<?php
require_once("acmedb.php");

$database = new Acmedb();

$database->connect();

$trainer = $_POST['employeeID'];
$begintime = $_POST['begintimeinput'];
$endtime = $_POST['endtimeinput'];



$database->create_course($begintime, $endtime, $trainer);

header('location: home.php');

