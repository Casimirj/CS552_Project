<?php
require("acmedb.php");

$database = new Acmedb();

$database->connect();

$name = $_POST['logininput'];
$password = $_POST['passinput'];

$database->create_user($name, $password);

echo "SUCCESS!";

?>