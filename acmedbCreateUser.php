

<?php
echo "SUCCESS!lolnah";
    require("acmedb.php");

    $database = new Acmedb();

    $database->connect();

    $name = $_POST['logininput'];
    $password = $_POST['passinput'];
    $fname = $_POST['fnameinput'];
    $lname = $_POST['lnameinput'];
    $email = $_POST['emailinput'];

    $database->create_user($name, $password, $fname, $lname, $email);

    echo "SUCCESS!";


?>