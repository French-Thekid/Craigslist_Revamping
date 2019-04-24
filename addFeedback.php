<?php
    session_start();

 $tempID=$_SESSION['tempID'];                    
 $servername1 = "localhost";
 $username1 = "French";
 $password1 = "password";
 $dbname1 = "FeedBacks";

 // Create connection
 $conn = new mysqli($servername1, $username1, $password1, $dbname1);
 // Check connection
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 } 
 $person=$_SESSION['Respondent'];

 if(empty($person))
 {
     $respondent="Anonymous";
 }
 else
 {
    $respondent=$_SESSION['Respondent'];
 }

 $feedback=$_POST['feedbacks'];

 $query = "Insert into feedbacks (Respondent,Feedbacks, SellerID) values('".$respondent."','".$feedback."','".$tempID."') ";
 if ($conn->query($query) === TRUE) {
         echo "<script>alert('Feedback Successfully submitted');</script>";
         header('refresh:0.2; url=UsersBio.php');
     } 
     else {
        echo "Error: " . $query . "<br>" . $conn->error;
     }  
     
?>
