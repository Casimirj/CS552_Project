<?php

include("header.php");
require_once("acmedb.php");



$database = new Acmedb();

$database->connect();


$database->getUsers();





?>