<?php

$dbconn = mysqli_connect("localhost","root","","afriecomdb");
    if($dbconn){
        echo"You are connected to database<br>";
    }
    else{
        echo"Unable to connect to database<br>";
    }
    
?>