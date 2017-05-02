<?php include("header.php");?>


<div class="createaccounttoptext">Create an Course</div>
<div class="createuserwrapper">
    <form method="post" action="acmedbCreateCourse.php">

        <?php

        if(isset($_GET['uid'])){
            if(isset($_GET['cid'])){
                $_SESSION['target'] = "createEnrollment.php?uid=";
                $_SESSION['targetname'] = "Select";
                $_SESSION['targetheader'] = "Select a User";
                include("displayusersTable.php?id=".$_GET['uid']);




                echo"<input type='hidden' name='userID' value='".$_GET['uid']."'>";
                echo"<input type='hidden' name='userID' value='".$_GET['uid']."'>";
            }
            else{
                $_SESSION['target'] = "createEnrollment.php?uid=".$_GET['uid']."&cid=";
                $_SESSION['targetname'] = "Select";
                $_SESSION['targetheader'] = "Select a trainer";
                include("displaytraineeTable.php");
            }


        }
        else{
            $_SESSION['target'] = "createEnrollment.php?uid=";
            $_SESSION['targetname'] = "Select";
            $_SESSION['targetheader'] = "Select a User";
            include("displayCoursesTable.php");
        }


        ?>



        <input id=createuserbutton class="acmebutton" type="submit" value="Create Course">
    </form>

</div>





