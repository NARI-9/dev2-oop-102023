<?php
include "../classes/User.php" ;

//Create an Object -->
$user = new User;
//Call the method
$user->store($_POST); // $_POST will holds all the data from the form in view/register.php
?>