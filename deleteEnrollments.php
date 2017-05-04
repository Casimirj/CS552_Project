<?php
include("header.php");
$_SESSION['targetheader'] = "Enrollments";
$_SESSION['target'] = "acmedbDeleteEnrollment.php?id=";
$_SESSION['targetname'] = "Delete";
include("displayEnrollmentsTable.php");
