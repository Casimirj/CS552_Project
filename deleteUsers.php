<?php


include("header.php");
$_SESSION['target'] = "acmedbDeleteUser.php?id=";
$_SESSION['targetname'] = "Delete";
$_SESSION['targetheader'] = "Delete Users";
include("displayusersTable.php");