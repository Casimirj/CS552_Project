<?php include("header.php");?>


<div class="createaccounttoptext">Create an Account</div>
<div class="createuserwrapper">
    <form method="post" action="createUser.php">

        <div class="createusertextwrapper">
            <div class="createusertext">First Name</div>
            <div class="createusertext">Last Name</div>
            <div class="createusertext">Email Address</div>
            <div class="createusertext">User Name</div>
            <div class="createusertext">Password</div>
            <div class="createusertext">Re-Enter your Password</div>
        </div>
        <div class="createuserinputwrapper">
            <input id="fnameinput" class="createuserinput" placeholder="First Name" name="fnameinput">
            <input id="lnameinput" class="createuserinput" placeholder="Last Name" name="lnameinput">
            <input id="emailinput" class="createuserinput" placeholder="Email Address" name="emailinput">
            <input id="logininput" class="createuserinput" placeholder="Username" name="logininput">
            <input id="passinput" class="createuserinput" placeholder="Password" name="passinput" type="password" style="padding:10px 15px;">
            <input id="passvalidate" class="createuserinput" Placeholder="Password" name="passvalidate" type="password" style="padding:10px 15px;">
        </div>


        <input id=createuserbutton class="acmebutton" type="submit" value="Create Account">
    </form>

</div>











<?php
if(isset($post['logininput'])){
    require("acmedb.php");

    $database = new Acmedb();

    $database->connect();

    $name = $_POST['logininput'];
    $password = $_POST['passinput'];

    $database->create_user($name, $password);

    echo "SUCCESS!";
}


?>