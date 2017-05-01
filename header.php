<?php session_start();
    if(!isset($_SESSION['loggedin'])){
        header('location: '.'index.php');
    }


?>
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








