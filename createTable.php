<?php
// DB connection info
$host = "us-cdbr-azure-southcentral-f.cloudapp.net";
$user = "bf8932a5a63db8";
$pwd = "df1075af";
$db = "database";
try{
    $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "CREATE TABLE registration_tbl(
                 id INT NOT NULL AUTO_INCREMENT, 
                 PRIMARY KEY(id),
                 name VARCHAR(30),
                 email VARCHAR(30),
                 date DATE)";
    $conn->query($sql);
}
catch(Exception $e){
    die(print_r($e));
}
echo "<h3>Table created.</h3>";
?><?php
/**
 * Created by PhpStorm.
 * User: poop
 * Date: 4/24/17
 * Time: 4:26 PM
 */