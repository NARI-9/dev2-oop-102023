<?php
include "Database.php";

class User extends Database {
    // store() inserts a record into the users table 
    public function store($request) {
        // request holds data
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $username = $request['username'];
        $password = $request['password'];

        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (`first_name`, `last_name`, `username`, `password`)
                VALUES ('$first_name', '$last_name', '$username', '$password')";

        if ($this->conn->query($sql)) {
            header("location: ../views"); // Corrected the path
            exit;
        } else {
            die("Error in creating the user: " . $this->conn->error);
        }
    }

    public function login($request){
        session_start();
    
        $username = $request['username'];
        $password = $request['password'];
    
        $sql = "SELECT * FROM users WHERE username = '$username'";
    
        $result = $this->conn->query($sql);
    
        if($result->num_rows == 1){
            $user = $result->fetch_assoc();
    
            if(password_verify($password, $user['password'])){
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['full_name'] = $user['first_name'] . " " . $user['last_name'];
    
                header("location: ../views/dashboard.php"); // Corrected the path
                exit;
            } else {
                die("Password is incorrect");
            }
        } else {
            die("Username not found.");
        }
    }
    
    public function logout(){
        session_start();
        session_unset();
        session_destroy();
    
        header("location: ../views"); // Corrected the path
        exit;
    }

    public function getAllUsers(){
        $sql = "SELECT * FROM users";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Error in retrieving all users: " . $this->conn->error);
        }
    }

    public function getUser($id){
        $sql = "SELECT * FROM users where id = $id";
    
        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        } else {
            die("Error in retrieving the user: " . $this->conn->error);
        }
    }

    public function update($request, $files){
        session_start();

        $id = $_SESSION['id'];
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $username = $request['username'];
        $photo = $files['photo']['name']; // Corrected the variable name
        $tmp_photo = $files['photo']['tmp_name']; // Corrected the variable name

        $sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', username = '$username'
        WHERE id = $id";

        if($this->conn->query($sql)){
            $_SESSION['username'] = $username;
            $_SESSION['full_name'] = $first_name . " " . $last_name; // Corrected the concatenation

            if($photo){
                $sql = "UPDATE users SET photo = '$photo' WHERE id = $id"; // Corrected the table name
                $destination = "../assets/images/photo";
                if($this->conn->query($sql)){
                    if(move_uploaded_file($tmp_photo, $destination)){ // Corrected the function name
                        header("location: ../views/dashboard.php"); // Corrected the path
                        exit;
                    } else {
                        die("Error in moving the photo.");
                    }
                } else {
                    die("Error in uploading the photo: " . $this->conn->error);
                }
            }
            header("location: ../views/dashboard.php"); // Corrected the path
            exit;
        } else {
            die("Error in updating the user: " . $this->conn->error);
        }
    }

    public function delete(){
        session_start();

        $id= $_SESSION['id'];

        $sql = "DELETE FROM users WHERE id = $id";

        if($this->conn->query($sql)){
            $this->logout();

        }else{
            die("Error in deleting your account:" .$this->conn->error);
        }
    }
}
?>
