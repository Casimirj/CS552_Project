<?php

require("acmedb.php");


if(isset($_GET['uid'])){
    echo "<h1 class='displayusersheader'>".$_SESSION['targetheader']."</h1>";


    $database = new Acmedb();
    $database->connect();
    $result = $database->getEnrollments();


    echo ("
    <table class='displaytable'>
    <tr>
        <th>ID</th>
        <th>Trainee Name</th>
        <th>Instructor Name</th>
        <th>Begining Time</th>
        <th>Ending Time</th>
        <th>Total Time</th>
    </tr>

");

    while($row = mysqli_fetch_array($result))
    {
        $uid = $row['userID'];
        $cid = $row['courseID'];
        $uname = $database->getUserFullName($uid);
        $iname = $database->getEmployeeFullNameFromCourseID($cid);
        $times = $database->getCourseTimeSlot($cid);



        echo(
            "<tr>" .
            "<td><a href=''>" . $row['id']. "</a></td>".
            "<td>" .$uname . "</td>".
            "<td>" . $iname . "</td>".
            "<td>" . $times['begintime'] . "</td>".
            "<td>" . $times['endtime'] . "</td>".
            "<td>" . $times['totaltime'] . "</td>");
        if($_SESSION['usertype'] == 1 || $_SESSION['usertype'] == 3){
            $target = $_SESSION['target'];
            $targetname = $_SESSION['targetname'];

            echo "<td><a href=".$target."".$row['id']."\">".$targetname."</a></td>";
        }

        echo"</tr>";


    }


    echo "</table>";
}
else{
    $_SESSION['target'] = "displayEnrollmentsTable.php?uid=";
    $_SESSION['targetname'] = "Select";
    $_SESSION['targetheader'] = "Select a User";
    include("displaytraineeTable.php");





}




