<?php
include "..//classes/User.php";

$user = new User;
$user->login($_POST); //POST holds the data from the form the from in the login


?>