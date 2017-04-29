<?php

include("header.php");
require("acmedb.php");


?>


<h1>Users</h1>
















<?php

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
        "</tr>"

    );
}


echo "</table>";





?>