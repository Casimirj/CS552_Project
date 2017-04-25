<?php
require("acmedb.php");

$database = new Acmedb();

$database->connect();

$name = $_POST['name'];
$password = $_POST['password'];

database->create_user($name, $password);

echo "SUCCESS!";

?>