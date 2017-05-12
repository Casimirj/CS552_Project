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
            $sql = "INSERT INTO `users` (`username`,`password`,`usertype`, `fname`,`lname`, `email`) VALUES ('$usernameInput', '$passInput', '$userType', '$fnameInput', '$lnameInput', '$emailInput')";
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
    public function delete_user($id){
        global $connectstr_dbhost, $connectstr_dbname, $connectstr_dbpassword, $connectstr_dbusername;
        $link=mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);

        $sql = "DELETE FROM `users` WHERE id='".$id."'";
        mysqli_query($link, $sql);

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

    public function delete_course($id){
        global $connectstr_dbhost, $connectstr_dbname, $connectstr_dbpassword, $connectstr_dbusername;
        $link=mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);

        $sql = "DELETE FROM `courses` WHERE id='".$id."'";
        mysqli_query($link, $sql);

    }
    public function delete_enrollment($id){
        global $connectstr_dbhost, $connectstr_dbname, $connectstr_dbpassword, $connectstr_dbusername;
        $link=mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);

        $sql = "DELETE FROM `enrollment` WHERE id='".$id."'";
        mysqli_query($link, $sql);

    }
    public function create_course($employeeid, $begintime, $endtime){
        global $connectstr_dbhost, $connectstr_dbname, $connectstr_dbpassword, $connectstr_dbusername;
        $link=mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);
        $totaltime = $endtime - $begintime;
        $sql = "INSERT INTO `courses`(`beginTime`, `endTime`, `totalTime`, `instructorID`) VALUES ('$begintime', '$endtime', '$totaltime' , '$employeeid')";
        if(mysqli_query($link, $sql)){
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
    public function create_enrollment($userid, $courseid){
        global $connectstr_dbhost, $connectstr_dbname, $connectstr_dbpassword, $connectstr_dbusername;
        $link=mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);
        $sql = "INSERT INTO `enrollment`(`courseID`, `userID`) VALUES ('$courseid', '$userid')";
        if(mysqli_query($link, $sql)){
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

    public function getUsers(){
        global $connectstr_dbhost, $connectstr_dbname, $connectstr_dbpassword, $connectstr_dbusername;
        $link=mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);
        $sql = "SELECT * FROM `users`";
        $result = mysqli_query($link, $sql);

        return $result;
    }
    public function getUser($id){
        global $connectstr_dbhost, $connectstr_dbname, $connectstr_dbpassword, $connectstr_dbusername;
        $link=mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);
        $sql = "SELECT * FROM `users` where id='".$id."'";
        $result = mysqli_query($link, $sql);

        return $result;
    }
    public function getEmployeeFullNameFromCourseID($id){
        global $connectstr_dbhost, $connectstr_dbname, $connectstr_dbpassword, $connectstr_dbusername;
        $link=mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);
        $sql = "SELECT * FROM `users` where id='".$id."'";
        $result = mysqli_query($link, $sql)->fetch_assoc();

        $result = $result['instructorID'];
        $result = $this->getName($result);
        return $result;

    }

    public function getUsersofType($usertype){
        global $connectstr_dbhost, $connectstr_dbname, $connectstr_dbpassword, $connectstr_dbusername;
        $link=mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);
        $sql = "SELECT * FROM `users` where usertype='".$usertype."'";
        $result = mysqli_query($link, $sql);

        return $result;
    }

    public function getCourses(){
        global $connectstr_dbhost, $connectstr_dbname, $connectstr_dbpassword, $connectstr_dbusername;
        $link=mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);
        $sql = "SELECT * FROM `courses`";
        $result = mysqli_query($link, $sql);

        return $result;
    }
    public function getCourseTimeSlot($id){
        global $connectstr_dbhost, $connectstr_dbname, $connectstr_dbpassword, $connectstr_dbusername;
        $link=mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);
        $sql = "SELECT * FROM `courses` where id='".$id."'";
        $result = mysqli_query($link, $sql);

        $output['begintime'] = $result['beginTime'];
        $output['endtime'] = $result['endTime'];
        $output['totaltime'] = $result['totalTime'];

        return $output;
    }

    public function getEnrollments(){
        global $connectstr_dbhost, $connectstr_dbname, $connectstr_dbpassword, $connectstr_dbusername;
        $link=mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);
        $sql = "SELECT * FROM `enrollment`";
        $result = mysqli_query($link, $sql);

        return $result;
    }
    public function getTraineeSchedule($id){
        global $connectstr_dbhost, $connectstr_dbname, $connectstr_dbpassword, $connectstr_dbusername;
        $link=mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);
        $sql = "SELECT * FROM `enrollment` where userID = '".$id."'";
        $result = mysqli_query($link, $sql);

        return $result;
    }
    public function getBill($id){
        global $connectstr_dbhost, $connectstr_dbname, $connectstr_dbpassword, $connectstr_dbusername;
        $link=mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);
        $sql = "SELECT * FROM `enrollment` WHERE userID = '".$id."' and paid = 0";
        $result = mysqli_query($link, $sql);

        $bill = 0;
        while($row = mysqli_fetch_array($result)) {
            $sql = "SELECT totalTime FROM `courses` WHERE id = '".$row['courseID']."'";
            $hours = mysqli_query($link, $sql);

            $bill += $hours * 10;
        }
        return $bill;

    }
    public function getName($id){
        global $connectstr_dbhost, $connectstr_dbname, $connectstr_dbpassword, $connectstr_dbusername;
        $link=mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);

        $sql = "SELECT * FROM `users` WHERE id = '".$id."'";
        $result = mysqli_query($link, $sql)->fetch_assoc();

        $name = $result['fname']." ".$result['lname'];


        return $name;
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
            $_SESSION['name'] = $result['fname']." ".$result['lname'];
            $_SESSION['usertype'] = $result['usertype'];
            $_SESSION['email'] = $result['email'];

        }
        else{
            echo "Connection Error: ", mysqli_connect_error();
        }

    }





}


?>