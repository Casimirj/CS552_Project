<?php
require_once("acmedb.php");


$database = new acmedb;
$database->connect();
$id = (int)$_GET['id'];


//if($_SESSION['usertype'] == 1 || $_SESSION['usertype'] == 3 ){
$database->delete_course($id);
header("Location: home.php");
//}


