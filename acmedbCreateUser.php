<?php
    require_once("acmedb.php");

    $database = new Acmedb();

    $database->connect();

    $username = $_POST['usernameinput'];
    $password = $_POST['passinput'];
    $passvalidate = $_POST['passvalidate'];
    $fname = $_POST['fnameinput'];
    $lname = $_POST['lnameinput'];
    $email = $_POST['emailinput'];
    $userType;

    if(isset($_POST['usertype'])){
        $userType = $_POST['usertype'];
    }
    else{
        $userType = 0;
    }


    if($password === $passvalidate){
        $database->create_user($username, $password, $fname, $lname, $email, $userType);
    }
    else{
        echo "didnt create\n";
    }


    if(isset($_SESSION['loggedin'])){
        header('location: ../home.php');
    }
    else{
        header('location: ../index.php');
    }



?>