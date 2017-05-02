<?php include("header.php");?>


<div class="createaccounttoptext">Create an Course</div>
<div class="createuserwrapper">
    <form method="post" action="acmedbCreateCourse.php">

        <?php

            if(isset($_GET['id'])){
                $_POST['employeeID'] = $_GET['$id'];
                echo"
                <div class=\"createuserinputwrapper\">
                    <input id='begintimeinput' class=\"createuserinput\" placeholder='Begining Time' name='begintimeinput'>
                    <input id='endtimeinput' class=\"createuserinput\" placeholder='Ending Time' name='endtimeinput'>

                </div>";

            }
            else{
                $_SESSION['target'] = "createCourse.php?id=";
                $_SESSION['targetname'] = "Select";
                $_SESSION['targetheader'] = "Select a trainer";
                include("displayemployeesTable.php");
            }


        ?>



        <input id=createuserbutton class="acmebutton" type="submit" value="Create Course">
    </form>

</div>









