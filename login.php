<?php
    include "databaseDetails.inc";

    session_start();

    if(isset($_POST['email']) && isset($_POST['password'])  ){
        $email = $_POST['email'];
        $pass  = $_POST['password'];

        $con = new mysqli($server,$username,$password, $dbname);
        if (mysqli_connect_errno() ){echo "Couldnt connect ".mysql_connect_error();}

        $email = $con->real_escape_string($email);
        $pass = $con->real_escape_string($pass);

        $res = $con->query("select * from Members where EmailAddress= '".$email."' and
            Password= '".$pass."'");

        if ($res->num_rows) {
            $row = $res->fetch_assoc();
            $_SESSION['UserId'] = $row['idMembers'];
            
        }


        $con->close();

        if (isset($_SESSION['UserId'])) {
            // header("Location: Schedule.php");
            
            $retval = "1";
            echo $retval;
        }
        else{
            // header("Location: wwww.espn.com");
            echo "0";
            // if ($email != "") {
            //     echo "<span style='color:red;'>LOGIN FAILURE: ".$email." is not an authorized user or wrong password</span><br>\n";
            // }
            // else{
            //     echo "";
            // }
        }
    }


    

?>
