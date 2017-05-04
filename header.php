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
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn"><?php echo $_SESSION['name'];?></button>
            <div id="myDropdown" class="dropdown-content">
                <a href="#home">Logout</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </div>
        </div>

        <script>
            /* When the user clicks on the button,
             toggle between hiding and showing the dropdown content */
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {

                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
        </script>
        <!--<div><?php echo $_SESSION['name'];?></div><div class="material-icons" style="margin-right:20px">face</div>-->
    </div>
</div>






<div class="content">








