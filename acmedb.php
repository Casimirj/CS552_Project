<?php

class acmedb
{
    private $connectstr_dbhost = '';
    private $connectstr_dbname = '';
    private $connectstr_dbusername = '';
    private $connectstr_dbpassword = '';

    public function __construct(){

    }

    public function connect(){
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








    public function create_user($username, $pass){
        global $connectstr_dbhost, $connectstr_dbname, $connectstr_dbpassword, $connectstr_dbusername;


        if($link=mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname)) {
            $sql = "INSERT INTO `users` (`id`,`username`,`password`) VALUES (1, $username, $pass)";
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









}
?>