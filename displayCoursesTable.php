<?php
require("acmedb.php");





echo "<h1 class='displayusersheader'>Courses</h1>";


$database = new Acmedb();
$database->connect();
$result = $database->getCourses();


echo ("
    <table class='displaytable'>
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
    $name = $database->getName($row['instructorID']);

    echo(
        "<tr>" .
        "<td><a href=''>" . $row['id']. "</a></td>".
        "<td>" . $name . "</td>".
        "<td>" . $row['beginTime'] . "</td>".
        "<td>" . $row['endTime'] . "</td>".
        "<td>" . $row['totalTime'] . "</td>");
    if($_SESSION['usertype'] == 1 || $_SESSION['usertype'] == 3){
        $target = $_SESSION['target'];
        $targetname = $_SESSION['targetname'];

        echo "<td><a href=".$target."".$row['id']."\">".$targetname."</a></td>";
    }
    echo"</tr>";
}


echo "</table>";





?>