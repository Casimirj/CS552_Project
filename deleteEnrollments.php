<?php
include("header.php");
$_SESSION['targetheader'] = "Courses this user has enrolled in";
$_SESSION['target'] = "acmedbDeleteEnrollment.php?id=";
$_SESSION['targetname'] = "Delete";
include("displayEnrollmentsTable.php");
