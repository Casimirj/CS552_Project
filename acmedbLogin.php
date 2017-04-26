<?php
require_once("acmedb.php");
session_start();

$database = new Acmedb;
$database->connect();




$usernameinput = $_POST['usernameinput'];
$passwordinput = $_POST['passwordinput'];


$result = $database->login($usernameinput, $passwordinput);


if($result){
    $_SESSION['username'] = $usernameinput;
    header('Location: '.'home.php');
}
else{
    echo "Login Failed";
}







?>