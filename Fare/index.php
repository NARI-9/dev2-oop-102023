<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fare</title>
</head>
<body>
    <form action="" method="post">
        <label for="age">Age(10-80):</label>
        <input type="number" name="age" min="10" max="80" id="age" placeholder="Age" required>

        <br>
        <br>

        <label for="distance">Distance</label>
        <input type="number" name="distance" id="distance" min="1"placeholder="Distance (km)">

        <br>
        <br>
        <button type="submit" name="btn_submit" value="Culculate Fare">Compute</button>



    </form>
    <?php
    include "Fare.php";

    if(isset($_POST['btn_submit'])){
        $age = $_POST['age'];
        $distance = $_POST['distance'];

        // $base_fare = 8;
        //  $additional_fare_per_km = 1;


        //  if($age>=60){
        //     $discounted_base_fare =($base_fare*(100 - 20))/100;
        //     $total_fare = $discounted_base_fare + $additional_fare_per_km *($distance -4);

        //  }else{
        //     $total_fare = $base_fare +($additional_fare_per_km *($distance - 4));

        //  }
        //  if($distance<=4){
        //     $total_fare = 8;
        //  }
        



        $fare = new Fare; //Instantiate the class

        //Setters
        $fare->setAge($age);
        $fare->setDistance($distance);
        $fare->setFare();

        

        //Display Values
        echo"Age:". $fare->getAge()."years old <br>";
        echo"Distance:". $fare->getDistance()."km <br>";
        echo"Fare:". $fare->getFare()."<br>";


        // echo"Author". $book->getAuthor()."<br>";
        // echo"Publisher". $book->getPublisher()."<br>";
    }
    
    ?>
    
</body>
</html>