<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <script src="script.js"></script>

</head>
<body>

<div class="header">
    <a href="home.php"><div class="col-sm-2 acmelogo"></div></a>
    <div class="col-sm-7"></div>
    <div class="col-sm-3 profile">
        <div><?php echo $_SESSION['name'];?></div><div class="material-icons" style="margin-right:20px">face</div>
    </div>
</div>






<div class="content">

<div class="createaccounttoptext">Create an Account</div>
<div class="createuserwrapper">
    <form method="post" action="acmedbCreateUser.php">

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









