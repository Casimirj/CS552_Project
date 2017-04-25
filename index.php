<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="login.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <script src="script.js"></script>
</head>
<body>

<div class="content">
    <div class="darkenbackground">
        <div class="topcontent">
            <div class="centerbox">
                <div class="esutextlogo"></div>
                <div class="centertext">
                    ACME<span style="color:#4fc659;">TRAINER</span>
                </div>
            </div>
        </div>
        <div class="login">
            <form method="post" action="createUser.php">
                <input id="logininput" placeholder="Username" name="logininput">
                <input id="passinput" placeholder="Password" type="password" name="passinput">
                <a id="forgotpassword" href="www.google.com">Forgot Password?</a>
                <a class="loginbutton" href="home.html">Log In</a>
                <a class="loginbutton" type="submit" value="click">Create Account</a>
            </form>
        </div>
        <a href="#bot" class="bottombar">
            <div class="col-sm-4 bottombuttoncontainer" >
                <span class="col-sm-3 bottombutton" >Quick Access</span>
                <span class="col-sm-4 bottombutton" >System Status</span>
                <span class="col-sm-3 bottombutton" >Public Hubs</span>
                <span class="col-sm-2 bottombutton" >Help</span>
            </div>

        </a>


    </div>

</div>
<div class="bottommenu">
    <div class="col-sm-2 quickaccess">
        <span style="color:#4fc659;">Quick</span>&nbspAccess
        <div class="innertext">SkyPrint</div>
        <div class="innertext">SkyLab</div>
        <div class="innertext">Onbase</div>
    </div>
    <div class="col-sm-2 systemstatus">
        <span style="color:#4fc659;">System</span>&nbspStatus
    </div>
    <div class="col-sm-4 systemstatus2">

    </div>
    <div class="col-sm-4 assistance">
        <p>For assistance, contant the IT HELP DESK</p>
        <p>(877)341-5555</p>
        <p>helpdesk@emporia.edu</p>
        <p>Tweet us: @EmporiaStateHelpdesk</p>
        <p>Skype: helpdesk@emporia.edu</p>


    </div>

</div>
<a name="bot"/>
</body>
</html>