<?php include("header.php");?>


<div class="createaccounttoptext">Create an Account</div>
<div class="createuserwrapper">
    <form method="post" action="acmedbCreateCourse.php">

        <?php

            if(isset($_GET['id'])){
                $_POST['employeeID'] = $_GET['$id'];
                echo"
                <div class=\"createuserinputwrapper\">
                    <input id=\"fnameinput\" class=\"createuserinput\" placeholder=\"First Name\" name=\"fnameinput\">
                    <input id=\"lnameinput\" class=\"createuserinput\" placeholder=\"Last Name\" name=\"lnameinput\">
                    <input id=\"emailinput\" class=\"createuserinput\" placeholder=\"Email Address\" name=\"emailinput\">
                    <input id=\"logininput\" class=\"createuserinput\" placeholder=\"Username\" name=\"usernameinput\">
                    <input id=\"passinput\" class=\"createuserinput\" placeholder=\"Password\" name=\"passinput\" type=\"password\">
                    <input id=\"passvalidate\" class=\"createuserinput\" Placeholder=\"Password\" name=\"passvalidate\" type=\"password\">

                </div>";

            }
            else{
                $_SESSION['target'] = "createCourse.php?id=";
                $_SESSION['targetname'] = "Select";
                include("displayUsersTable.php");
            }


        ?>



        <input id=createuserbutton class="acmebutton" type="submit" value="Create Account">
    </form>

</div>









