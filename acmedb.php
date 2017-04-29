<?php

class Acmedb {
    private $connectstr_dbhost = '';
    private $connectstr_dbname = '';
    private $connectstr_dbusername = '';
    private $connectstr_dbpassword = '';

    public function __construct(){

    }

    public function connect(){
        global $connectstr_dbhost, $connectstr_dbname, $connectstr_dbpassword, $connectstr_dbusername;

        foreach ($_SERVER as $key => $value)
        {
            if (strpos($key, "MYSQLCONNSTR_") !== 0)
            {
                continue;
            }

            $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
            $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
            $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
            $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);

        }
    }


    public function create_user($usernameInput, $passInput, $fnameInput, $lnameInput, $emailInput, $userType){
        global $connectstr_dbhost, $connectstr_dbname, $connectstr_dbpassword, $connectstr_dbusername;

        if($link=mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname)) {
            $sql = "INSERT INTO `users` (`username`,`password`, `fname`,`lname`, `email`, `usertype`) VALUES ('$usernameInput', '$passInput', '$fnameInput', '$lnameInput', '$emailInput', '$userType')";
            if (mysqli_query($link, $sql)) {
                if (($aff_rows = mysqli_affected_rows($link)) > 0) {
                    echo "New record created successfully ($aff_rows)";
                } else {
                    echo "Query Logic Error: $sql";
                }
            } else {
                echo "Syntax Error:: ", mysqli_error($link);
            }
            mysqli_close($link);
        }
        else{
            echo "Connection Error: ", mysqli_connect_error();
        }

    }

    public function login($usernameinput, $passwordinput){
        global $connectstr_dbhost, $connectstr_dbname, $connectstr_dbpassword, $connectstr_dbusername;
        $count = "";
        if($link=mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname)) {
            $sql = "SELECT * FROM `users` WHERE username = '".$usernameinput."' and password = '".$passwordinput."'";
            $result = mysqli_query($link, $sql);
            $count = mysqli_num_rows($result);
            if($result != 0){
                if ($count == 1) {
                    echo "New record created successfully";
                } else {
                    echo "Query Logic Error: $sql";
                }
            } else {
                echo "Syntax Error:: ", mysqli_error($link);
            }
            mysqli_close($link);
        }
        else{
            echo "Connection Error: ", mysqli_connect_error();
        }

        echo $count;
        return ($count == 1);


    }

    public function getLink(){
        global $connectstr_dbhost, $connectstr_dbname, $connectstr_dbpassword, $connectstr_dbusername;
        $link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);
        return ($link);
    }


    public function setUserData($id){
        global $connectstr_dbhost, $connectstr_dbname, $connectstr_dbpassword, $connectstr_dbusername;
        $count = "";
        if($link=mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname)) {
            $sql = "SELECT * FROM `users` WHERE id = '" . $id . "'";
            $result = mysqli_query($link, $sql)->fetch_assoc();
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $result['id'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['fname'] = $result['fname'];
            $_SESSION['lname'] = $result['lname'];
            $_SESSION['usertype'] = $result['usertype'];
            $_SESSION['email'] = $result['email'];

        }
        else{
            echo "Connection Error: ", mysqli_connect_error();
        }

    }





}


?>