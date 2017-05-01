<?php
require("acmedb.php");





echo "<h1 class='displayusersheader'>Users</h1>";


$database = new Acmedb();
$database->connect();
$result = $database->getCourses();


echo ("
    <table class='displayuserstable'>
    <tr>
        <th>ID</th>
        <th>Instructor</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Length</th>
    </tr>

");

while($row = mysqli_fetch_array($result))
{
    $name = $row['employeeID'];
    echo(
        "<tr>" .
        "<td><a href=''>" . $row['id']. "</a></td>".
        "<td>" . $name . "</td>".
        "<td>" . $row['startTime'] . "</td>".
        "<td>" . $row['endTime'] . "</td>".
        "<td>" . $row['totalTime'] . "</td>".
        "</tr>"
    );


}


echo "</table>";





?>