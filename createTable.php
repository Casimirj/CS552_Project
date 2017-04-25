    <?php

    $connectstr_dbhost = '';
    $connectstr_dbname = '';
    $connectstr_dbusername = '';
    $connectstr_dbpassword = '';

    foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_acmedb") !== 0) {
    continue;
    }

    $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
    }

    $link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);
    mysqli_error($link);

    //$sql = "INSERT INTO `users` (id, fname, lname, age)
    //VALUES (1, `James`, `Casimir`, 20)";

    if($link=mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname)) {
        $sql = "INSERT INTO `users` (`id`,`fname`,`lname`,`age`) VALUES (1, 'James', 'Casimir', 20)";
        if (mysqli_query($link, $sql)) {
            if (($aff_rows = mysqli_affected_rows($link)) > 0) {
                echo "New record created successfully ($aff_rows)";
            } else {
                echo "Query Logic Error: $sql";
            }
        } else {
            echo "Syntax Error: ", mysqli_error($link);
        }
        mysqli_close($link);
    }
    else{
        echo "Connection Error: ", mysqli_connect_error();
    }


    ?>