<?php
require_once("acmedb.php");
session_start();

$database = new Acmedb;
$database->connect();




$usernameinput = $_POST['usernameinput'];
$passwordinput = $_POST['passinput'];




//$result = $database->login($usernameinput, $passwordinput);
$sql = "SELECT * FROM `users` WHERE username = '".$usernameinput."' and password = '".$passwordinput."'";
$link = $database->getLink();
$result = mysqli_query($link, $sql);
$count = mysqli_num_rows($result);


if($count == 1){
    $result = $result->fetch_assoc();
    $database->setUserData($result['id']);
    header('Location: ../home.php');
}
else{
    header('Location: index.php');

}






?>