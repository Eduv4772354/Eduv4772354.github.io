<?php
    //USed this to help with showing data from the tables https://www.w3schools.com/php/php_mysql_select.asp
include "dbconn.php";

if(isset($_POST["Register"])){
    $FirstName=$_POST["firstname"];
    $LastName=$_POST["lastname"];
    $Email=$_POST["emailaddress"];
    $Password=$_POST["password"];

        $CheckEmailExists="SELECT * FROM tbl_member where emailAddress='$Email'";
        $ShowMemberInfo="SELECT * FROM tbl_member";
        $Result=$dbconn->query($CheckEmailExists);
        $ShowData=$dbconn->query($ShowMemberInfo);

        if($Result->num_rows>0){
            echo "email exists enter a new email !<br>";

            while($row=$Result->fetch_assoc())
            echo "User UID: ". $row['user_ID']."<br>".
                 "User first name:". $row['firstName']."<br>".
                 "User last name:". $row['lastName']."<br>".
                 "User email address:". $row['emailAddress']."<br>".
                 "User password: ". $row['PASSWORD']."<br>".
                 "User Admin status: ". $row['isAdmin']."<br>";
        }
        else{
            echo "email does not exist";
        }
}
    
?>