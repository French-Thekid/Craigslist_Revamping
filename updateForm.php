<?php
    session_start();

    $ID =  $_SESSION["id"]; 
     
    //CONNECTION TO NEXT DATABASE
    $servername1 = "localhost";
    $username1 = "French";
    $password1 = "password";
    $dbname1 = "Stocks";

    // Create connection
    $conn = new mysqli($servername1, $username1, $password1, $dbname1);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $name = $_POST['name'];
    $price = $_POST['price'];
    $features = $_POST['features'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $image = $_FILE['fileToUpload'];
    
    echo $id;
    $Description = $_POST["description"];
  
    $image = addslashes(file_get_contents($_FILES['file']['tmp_name'])); //SQL Injection defence!
    $image_name = addslashes($_FILES['file']['name']);

   
    $query = "Update Items Set Name= '".$name."',Price= '".$price."',Features='".$features."', Category= '".$category."', Quantity= '".$quantity."', Description='".$Description."'  WHERE ID='".$ID."' ";
    

    
    if ($conn->query($query) === TRUE) {
         echo "<script>alert('Item Successfully Updated');</script>";
         header('refresh:0.2; url=update.php');
     } 
     else {
        echo "Error: " . $query . "<br>" . $conn->error;
     }
     
     

?>