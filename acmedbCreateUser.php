

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

    if($password === $passvalidate){
        $database->create_user($username, $password, $fname, $lname, $email);
    }
    else{
        echo "didnt create\n";
    }
    header('location: '.'index.php');


?>