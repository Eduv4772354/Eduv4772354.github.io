<?php
    //USed this to help with showing data from the tables https://www.w3schools.com/php/php_mysql_select.asp
include "dbconn.php";
$MemberTable="tbl_member";
$ListingTable="tbl_listings";

    if(isset($_POST["login"])){
        $Email=$_POST["emailaddress"];
        $Password=$_POST["password"];

        $VerifyUser="SELECT * FROM tbl_member WHERE emailAddress='$Email' and PASSWORD='$Password'";
        $Result=$dbconn->query($VerifyUser);
        if($Result->num_rows>0){

            while($row=$Result->fetch_assoc())
            echo "User UID: ". $row['user_ID']."<br>".
                 "User first name:". $row['firstName']."<br>".
                 "User last name:". $row['lastName']."<br>".
                 "User email address:". $row['emailAddress']."<br>".
                 "User password: ". $row['PASSWORD']."<br>".
                 "User Admin status: ". $row['isAdmin']."<br>";
            exit();
        }
        else{
            echo "not found, Incorrect Email or Password";
            header("Location: index.php");
        }
    }
    
?>