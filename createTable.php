<?php

$connectstr_dbhost = '';
$connectstr_dbname = '';
$connectstr_dbusername = '';
$connectstr_dbpassword = '';

foreach ($_SERVER as $key => $value) {
if (strpos($key, "MYSQLCONNSTR_acmedb") !== 0) {
continue;
}

$connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
$connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
$connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
$connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}

$link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);


$sql = "INSERT INTO users (id, fname, lname, age)
VALUES (1, 'James', 'Casimir', 20)";

if (mysqli_query($link, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error:james " . $sql . "<br>" . mysqli_error($link);
}
mysqli_close($link);



?>