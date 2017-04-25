<?php include("header.php");?>




    <form method="post" action="createUser.php">
        <input id="logininput" placeholder="Username" name="logininput">
        <input id="passinput" placeholder="Password" name="passinput">
        <input id="passvalidate" Placeholder="Password" name="passvalidate"

        <input class="loginbutton" type="submit" value="click">Create Account</input>
    </form>













<?php
function create(){
    require("acmedb.php");

    $database = new Acmedb();

    $database->connect();

    $name = $_POST['logininput'];
    $password = $_POST['passinput'];

    $database->create_user($name, $password);

    echo "SUCCESS!";
}


?>