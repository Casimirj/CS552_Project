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
    $_SESSION['username'] = $usernameinput;
    $result = $result->fetch_assoc();

    echo $result['id'];


    //$_SESSION['userType'] =
    //header('Location: '.'home.php');
}
else{
    echo $result;
    echo "Login Failed";

}






?>