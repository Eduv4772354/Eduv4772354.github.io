<?php

include "dbconn.php";
$MemberTable="tbl_member";
$ListingTable="tbl_listings";


if(isset($_POST["CreateListing"])){

    $ListingTitle=$_POST["C-LstTitle"];
    $description=$_POST["C-LstDescription"];
    $price=$_POST["C-Lstprice"];
    $contactno=$_POST["C-LstContactNo"];
    $Email=$_POST["C-LstContactEmail"];
    $itemimage=$_POST["C-LstImage"];
    $location=$_POST["C-LstLocation"];
    $User_ID=$_SESSION["U_ID"];
        //If the whole thing exists besides the email since im using it as the foreign
        //Logic get email and look for User_ID
        $CheckEmailExists="SELECT * FROM $ListingTable where contactEmail='$Email'";
        $ShowMemberInfo="SELECT * FROM $ListingTable";
        $Result=$dbconn->query($CheckEmailExists);
        $ShowData=$dbconn->query($ShowMemberInfo);

        if($Result->num_rows>0){
            echo "email exists enter a new email !<br>";
            
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
            $row=$Result->fetch_assoc();
            //$User_ID["ser_ID"]=$row["user_ID"];
            $InsertQuery="INSERT INTO $ListingTable(listingTitle, description, price, contactNo, contactEmail, itemImage, location,user_ID)
                            VALUES ('$ListingTitle','$description','$price','$contactno','$Email','$itemimage','$location','$User_ID')";
                        if($dbconn->query($InsertQuery)==TRUE){
                            header("location: Mainpage.php");
                        }
                        else{
                            echo "posting error<br>";
                            echo "Error:".$conn->error;
                        }
        }
}

?>