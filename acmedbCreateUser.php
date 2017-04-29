<?php
    require("acmedb.php");

    $database = new Acmedb();

    $database->connect();

    $username = $_POST['usernameinput'];
    $password = $_POST['passinput'];
    $passvalidate = $_POST['passvalidate'];
    $fname = $_POST['fnameinput'];
    $lname = $_POST['lnameinput'];
    $email = $_POST['emailinput'];

    if(isset($_POST['userType'])){
        $userType = $_POST['userType'];
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
    header('location: '.'index.php');


?>