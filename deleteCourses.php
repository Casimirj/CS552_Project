<?php
include("header.php");
$_SESSION['targetheader'] = "Courses";
$_SESSION['target'] = "acmedbDeleteCourse.php?id=";
$_SESSION['targetname'] = "Delete";
include("displayCoursesTable.php");


?>