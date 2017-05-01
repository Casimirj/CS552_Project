<?php

include("header.php");





if($_SESSION['usertype'] == 0){ //regular user (trainee)
    echo("
        <div class=\"buttonwrapper\">
        <a class=\"homepagebutton\"><div class=\"buttonimage material-icons\">developer_board</div><div class=\"buttontext\">View Schedule</div></a>
        <a class=\"homepagebutton\"><div class=\"buttonimage material-icons\">receipt</div><div class=\"buttontext\">View Bill</div></a>
        <a class=\"homepagebutton\"><div class=\"buttonimage material-icons\">card_membership</div><div class=\"buttontext\">View Reciept</div></a>
    ");
}
else if($_SESSION['usertype'] == 1){ //full admin
    echo("
        <div class=\"buttonwrapper\">
        <a class=\"homepagebutton\"><div class=\"buttonimage material-icons\">add_to_queue</div><div class=\"buttontext\">Add Course</div></a>
        <a class=\"homepagebutton\" href='displayCourses.php'><div class=\"buttonimage material-icons\">remove_from_queue</div><div class=\"buttontext\">Delete Course</div></a>
        <a class=\"homepagebutton\" href=\"createUser.php\"><div class=\"buttonimage material-icons\">add_circle</div><div class=\"buttontext\">Add User</div></a>
        <a class=\"homepagebutton\" href='displayUsers.php'><div class=\"buttonimage material-icons\">remove_circle</div><div class=\"buttontext\">Delete User</div></a>
        <a class=\"homepagebutton\"><div class=\"buttonimage material-icons\">accessibility</div><div class=\"buttontext\">Enroll User</div></a>
        <a class=\"homepagebutton\"><div class=\"buttonimage material-icons\">polymer</div><div class=\"buttontext\">Remove from Course</div></a>
        <a class=\"homepagebutton\"><div class=\"buttonimage material-icons\">perm_identity</div><div class=\"buttontext\">Payroll</div></a>
        <a class=\"homepagebutton\"><div class=\"buttonimage material-icons\">receipt</div><div class=\"buttontext\">Billing</div></a>
        <a class=\"homepagebutton\"><div class=\"buttonimage material-icons\">assessment</div><div class=\"buttontext\">Reports</div></a>
    
    ");
}
if($_SESSION['usertype'] == 2){ //trainer
    echo("
        <div class=\"buttonwrapper\">
        <a class=\"homepagebutton\"><div class=\"buttonimage material-icons\">developer_board</div><div class=\"buttontext\">View Schedule</div></a>
        <a class=\"homepagebutton\"><div class=\"buttonimage material-icons\">highlight_off</div><div class=\"buttontext\">Cancel Class</div></a>
    
    ");
}
if($_SESSION['usertype'] == 3){ //registrar
    echo("
        <div class=\"buttonwrapper\">
        <a class=\"homepagebutton\"><div class=\"buttonimage material-icons\">add_to_queue</div><div class=\"buttontext\">Add Course</div></a>
        <a class=\"homepagebutton\" href='displayCourses.php'><div class=\"buttonimage material-icons\">remove_from_queue</div><div class=\"buttontext\">Delete Course</div></a>
        <a class=\"homepagebutton\" href=\"createUser.php\"><div class=\"buttonimage material-icons\">add_circle</div><div class=\"buttontext\">Add User</div></a>
        <a class=\"homepagebutton\" href='displayUsers.php'><div class=\"buttonimage material-icons\">remove_circle</div><div class=\"buttontext\">Delete User</div></a>
        <a class=\"homepagebutton\"><div class=\"buttonimage material-icons\">accessibility</div><div class=\"buttontext\">Enroll User</div></a>
        <a class=\"homepagebutton\"><div class=\"buttonimage material-icons\">polymer</div><div class=\"buttontext\">Remove from course</div></a>
    
    ");
}
if($_SESSION['usertype'] == 4){ //Financial Controller
    echo("
        <div class=\"buttonwrapper\">
        <a class=\"homepagebutton\"><div class=\"buttonimage material-icons\">perm_identity</div><div class=\"buttontext\">Payroll</div></a>
        <a class=\"homepagebutton\"><div class=\"buttonimage material-icons\">receipt</div><div class=\"buttontext\">Billing</div></a>
        <a class=\"homepagebutton\"><div class=\"buttonimage material-icons\">assessment</div><div class=\"buttontext\">Reports</div></a>
    
    ");
}




?>