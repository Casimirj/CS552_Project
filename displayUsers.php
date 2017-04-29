<?php

include("header.php");
require("acmedb.php");



$database = new Acmedb();

$database->connect();


$database->getUsers();





?>