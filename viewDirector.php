<?php

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
    $query = " select * from users";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    
    


    if ($conn->query($query) === TRUE) {
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

        $query1 = " select * from Items where ID= '".$row["ID"]."' ";
        if ($conn->query($query1) === TRUE) {
            header('refresh:0.5; url=detailedV.php');
        } 
        else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
        
        
        
    } 
    else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    



    
?>