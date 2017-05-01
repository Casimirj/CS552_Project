<?php

require("acmedb.php");





echo "<h1 class='displayusersheader'>Users</h1>";


$database = new Acmedb();
$database->connect();
$result = $database->getUsers();


echo ("
    <table class='displaytable'>
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
        "<td><a href=''>" . $row['id']. "</a></td>".
        "<td>" . $row['fname'] . "</td>".
        "<td>" . $row['lname'] . "</td>".
        "<td>" . $row['username'] . "</td>".
        "<td>" . $row['email'] . "</td>");
        if($_SESSION['usertype'] == 1 || $_SESSION['usertype'] == 3){
            echo "<td><a href=\"acmedbDeleteUser.php?id=".$row['id']."\">Delete</a></td>";
        }

        echo"</tr>";


}


echo "</table>";





?>