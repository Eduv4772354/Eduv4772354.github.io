<?php
    session_start();
    include "dbconn.php";
$MemberTable="tbl_member";
$ListingTable="tbl_listings";


if(isset($_POST["CreateListing"])){

    $ListingTitle=$_POST["C-LstTitle"];
    $description=$_POST["C-LstDescription"];
    $price=$_POST["C-Lstprice"];
    $contactno=$_POST["C-LstContactNo"];
    $Email=$_POST["C-LstContactEmail"];
    //$itemimage=$_POST["C-LstImage"];
    $location=$_POST["C-LstLocation"];
    

        //If the whole thing exists besides the email since im using it as the foreign
        //Logic get email and look for User_ID
        $CheckEmailExists="SELECT * FROM $ListingTable where contactEmail='$Email' and listingTitle='$ListingTitle'";
        $ShowMemberInfo="SELECT * FROM $ListingTable";
        $Result=$dbconn->query($CheckEmailExists);
        $ShowData=$dbconn->query($ShowMemberInfo);

        if($Result->num_rows>0){
            echo "This listing exists !<br>";
            //header("location: createlisting.php");
            //echo "User UID: ". $row['user_ID'];
                //This was to test if It could get the data from the db
            //while($row=$Result->fetch_assoc())
            /*echo "Listing ID: ". $row['listingTitle']."<br>".
                 "Listing description: ". $row['description']."<br>".
                 "Listing price: ". $row['price']."<br>".
                 "Listing contact number:". $row['contactNo']."<br>".
                 "Listing contact email:". $row['contactEmail']."<br>".
                 "Listing :". $row['itemImage']."<br>".
                 "Listing : ". $row['location']."<br>".
                 "User ID: ". $row['user_ID']."<br>"; */
            
                 
                 
        }
        else{
            while($row=$Result->fetch_assoc())
            echo"Nothing";
            $imgTmpPath = $_FILES['C-LstImage']['tmp_name'];
            $imgData = file_get_contents($imgTmpPath);
            $ImageData = base64_encode($imgData);
            $row['user_ID']=$_SESSION["U_ID"];
            echo "User ID: ". $row['user_ID'];
            
            $User_ID=$row['user_ID'];
            $InsertQuery="INSERT INTO $ListingTable(listingTitle, description, price, contactNo, contactEmail, itemImage, location, user_ID)
                            VALUES ('$ListingTitle','$description','$price','$contactno','$Email','$ImageData','$location','$User_ID')";
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