<?php include("header.php");?>


<div class="createaccounttoptext">Create an Course</div>
<div class="createuserwrapper">
    <form method="post" action="acmedbCreateEnrollment.php">

        <?php

        if(isset($_GET['uid'])){
            if(isset($_GET['cid'])){





                echo"<input type='hidden' name='uid' value='".$_GET['uid']."'>";
                echo"<input type='hidden' name='cid' value='".$_GET['cid']."'>";
            }
            else{
                $_SESSION['target'] = "createEnrollment.php?uid=".$_GET['uid']."&cid=";
                $_SESSION['targetname'] = "Select";
                $_SESSION['targetheader'] = "Select a Course";
                include("displayCoursesTable.php");
            }


        }
        else{
            $_SESSION['target'] = "createEnrollment.php?uid=";
            $_SESSION['targetname'] = "Select";
            $_SESSION['targetheader'] = "Select a trainee";
            include("displaytraineeTable.php");


        }


        ?>



        <input id=createuserbutton class="acmebutton" type="submit" value="Create Course">
    </form>

</div>





