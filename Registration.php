<?php
    //USed this to help with showing data from the tables https://www.w3schools.com/php/php_mysql_select.asp
include "dbconn.php";
$MemberTable="tbl_member";
$ListingTable="tbl_listings";
//$_SESSION["EmailAddress"];

//Remeber to update emails as unique keys and to run that SQL script for the incrementation
//for both primary keys




if(isset($_POST["Register"])){
    $FirstName=$_POST["firstname"];
    $LastName=$_POST["lastname"];
    $Email=$_POST["emailaddress"];
    $Password=$_POST["password"];

        $CheckEmailExists="SELECT * FROM $MemberTable where emailAddress='$Email'";
        $ShowMemberInfo="SELECT * FROM $MemberTable";
        $Result=$dbconn->query($CheckEmailExists);
        $ShowData=$dbconn->query($ShowMemberInfo);

        if($Result->num_rows>0){
            //echo "email exists enter a new email !<br>";
            header("location: login.php");
                        //This was to test if It could get the data from the db
           /* while($row=$Result->fetch_assoc())
            echo "User UID: ". $row['user_ID']."<br>".
                 "User first name:". $row['firstName']."<br>".
                 "User last name:". $row['lastName']."<br>".
                 "User email address:". $row['emailAddress']."<br>".
                 "User password: ". $row['PASSWORD']."<br>".
                 "User Admin status: ". $row['isAdmin']."<br>";
            */
                 
                 
        }
        else{
            echo "no not exist";
            $InsertQuery="INSERT INTO $MemberTable(lastname,firstName,emailAddress,PASSWORD,isAdmin)
                            VALUES ('$LastName','$FirstName','$Email','$Password',0)";
                        if($dbconn->query($InsertQuery)==TRUE){
                            header("location: Mainpage.php");
                        }
                        else{
                            echo "Error:".$conn->error;
                        }
        }
}
    
if(isset($_POST["Login"])){
        $Email=$_POST["emailaddress"];
        $Password=$_POST["password"];

        $CheckEmailExists1="SELECT * FROM $MemberTable where emailAddress='$Email' and PASSWORD='$Password'";
        $Result=$dbconn->query($CheckEmailExists1);
        if($Result->num_rows>0){
            $row=$Result->fetch_assoc();
            session_start();
            $_SESSION["EmailAddress"]=$row["emailAddress"];
            $_SESSION["U_ID"]=$row["user_ID"];
            if($row['isAdmin']==0){
                header("location: Mainpage.php");
            }
            else{
                header("location: adminpage.php");
            }
            //This was to test if It could get the data from the db
            /*
            echo "User UID: ". $row['user_ID']."<br>".
                 "User first name:". $row['firstName']."<br>".
                 "User last name:". $row['lastName']."<br>".
                 "User email address:". $row['emailAddress']."<br>".
                 "User password: ". $row['PASSWORD']."<br>".
                 "User Admin status: ". $row['isAdmin']."<br>";*/            
            exit();
                 
        }
        else{
            echo "not found, Incorrect Email or Password";
            header("Location: index.php");
        }
    }






    
?>