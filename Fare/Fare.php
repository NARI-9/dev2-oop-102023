<?php

class Fare {
    //Properties
    public $age;
    public $distance;
    public $fare;


    //Methods
    //Setters
    public function setAge($new_age){
        $this->age =$new_age;
    }

    public function setDistance($new_distance){
        $this->distance = $new_distance;


    }


    //Getters
    public function getAge(){
        return $this->age;

    }

    public function getDistance(){
        return $this->distance;
    }
    







    public function displayAge(){
        return $this->age;
    }

    public function displayDistance(){
        return $this->distance;
    }

    public function setFare(){
        if($this->distance <= 4){
            $this->fare = 8;
        }
        if($this->distance > 4){
            $this->fare = $this->distance + 4;
        }
        if($this->age >= 60){
            $this->fare *= 0.8; 
        }
    }

    public function getFare(){
        return $this->fare;
    }




}

// $web_development = new Book; //web_development is an object to acceess the Book class
// $web_development->author ="John Doe"; 
// echo "Author:".$web_development->displayAuthor()."<br>";

// $web_development->setTitle("Web Development Course V2.");
// $web_development->setPrice("500");

// echo"Title:". $web_development->getTitle()."<br>";
// echo"Price:". $web_development->getPrice()."<br><br>";

// $web_design = new Book;
// $web_design->setTitle("Web Design : A design Course ");
// $web_design->setPrice("100 ");

// echo"Title:". $web_design->getTitle()."<br>";
// echo"Price:". $web_design->getPrice()."<br><br>";



?>