<?php
    session_start();

    $UID =  $_SESSION["id"]; 
     
    //CONNECTION TO NEXT DATABASE
    $servername1 = "localhost";
    $username1 = "French";
    $password1 = "password";
    $dbname1 = "UserLogin";

    // Create connection
    $conn = new mysqli($servername1, $username1, $password1, $dbname1);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    //$UID=$_POST['UID'];

    
    $query = "DELETE FROM Logins WHERE ID='".$UID."' ";
    

 
    if ($conn->query($query) === TRUE) {
         echo "<script>alert('User Successfully Removed');</script>";
         header('refresh:0.2; url=RemoveUser.php');
     } 
     else {
        echo "Error: " . $query . "<br>" . $conn->error;
     }
     
     

?>