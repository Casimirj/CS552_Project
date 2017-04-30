<?php

include("header.php");
require("acmedb.php");





echo "<h1 class='displayusersheader'>Users</h1>";


$database = new Acmedb();
$database->connect();
$result = $database->getUsers();


echo ("
    <table class='displayuserstable'>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
        <th>Email</th>
    </tr>

");

while($row = mysqli_fetch_array($result))
{
    echo(
        "<tr>" .
        "<td>" . $row['id']. "</td>".
        "<td>" . $row['fname'] . "</td>".
        "<td>" . $row['lname'] . "</td>".
        "<td>" . $row['username'] . "</td>".
        "<td>" . $row['email'] . "</td>".
        "<td class='contact-delete'>
            <form action='delete.php?name='"); echo $row['id']; echo"' method='post'>
                <input type='hidden' name='name' value='"; echo $row['id']; echo"
                <input type='submit' name='submit' value='Delete'>
            </form>
        </td>";
        echo"</tr>";


}


echo "</table>";





?>