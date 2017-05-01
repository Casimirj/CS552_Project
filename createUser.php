<?php include("header.php");?>


<div class="createaccounttoptext">Create an Account</div>
<div class="createuserwrapper">
    <form method="post" action="database/acmedbCreateUser.php">

        <div class="createusertextwrapper">
            <div class="createusertext">First Name</div>
            <div class="createusertext">Last Name</div>
            <div class="createusertext">Email Address</div>
            <div class="createusertext">User Name</div>
            <div class="createusertext">Password</div>
            <div class="createusertext">Re-Enter your Password</div>
            <?php if($_SESSION['usertype'] == 1){
                echo("
                <div class=\"createusertext\">User Type</div>
                ");
            }?>
        </div>
        <div class="createuserinputwrapper">
            <input id="fnameinput" class="createuserinput" placeholder="First Name" name="fnameinput">
            <input id="lnameinput" class="createuserinput" placeholder="Last Name" name="lnameinput">
            <input id="emailinput" class="createuserinput" placeholder="Email Address" name="emailinput">
            <input id="logininput" class="createuserinput" placeholder="Username" name="usernameinput">
            <input id="passinput" class="createuserinput" placeholder="Password" name="passinput" type="password">
            <input id="passvalidate" class="createuserinput" Placeholder="Password" name="passvalidate" type="password">

            <?php if($_SESSION['usertype'] == 1){
                echo("
                <input id='usertype' class=createuserinput placeholder='User Type' name=usertype>
                ");
            }?>
        </div>


        <input id=createuserbutton class="acmebutton" type="submit" value="Create Account">
    </form>

</div>









