<?php
require_once("acmedb.php");

$database = new Acmedb();

$database->connect();

$trainer = (int)$_POST['employeeID'];
$begintime = $_POST['begintimeinput'];
$endtime = $_POST['endtimeinput'];


echo $trainer;
$database->create_course($trainer, $begintime, $endtime);



