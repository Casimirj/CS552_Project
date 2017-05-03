<?php
require_once("acmedb.php");

$database = new Acmedb();

$database->connect();

$userid = $_POST['uid'];
$courseid = $_POST['cid'];

$database->create_enrollment($userid, $courseid);


if(isset($_SESSION['loggedin'])){
    header('location: home.php');
}
else{
    header('location: index.php');
}


