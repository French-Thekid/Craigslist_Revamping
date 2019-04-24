<?php
    session_start();
    $servername = "localhost";
    $username = "French";
    $password = "password";
    $dbname = "CurrentUser";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    
    $CurUser= $_SESSION['tempName'];
    $CurEmail = $_SESSION['tempEmail'];
    $CURid = $_SESSION['tempID'];

    
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
    

    $Description = $_POST["description"];
  
    $image = addslashes(file_get_contents($_FILES['file']['tmp_name'])); //SQL Injection defence!
    $image_name = addslashes($_FILES['file']['name']);

     $query = " INSERT INTO items (Name, Price, Features, Category, Quantity, Description, SellerName, SellerEmail,Image,ImageName,SellerID ,DateUpload) VALUES ('".$name."', '".$price."', '".$features."', '".$category."', '".$quantity."', '".$Description."' , '".$CurUser."', '".$CurEmail."','".$image."','".$image_name."' ,'".$CURid."',NOW()) ";
     if ($conn->query($query) === TRUE) {
         echo "<script>alert('Item Successfully added to your stocks');</script>";
         header('refresh:0.2; url=Add.php');
     } 
     else {
        echo "Error: " . $query . "<br>" . $conn->error;
     }
     
     

?>