<?php
require_once("acmedb.php");

$database = new Acmedb();

$database->connect();

$userid = (int)$_POST['uid'];
$courseid = (int)$_POST['cid'];

$database->create_enrollment($userid, $courseid);


header("Location: home.php");
