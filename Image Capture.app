 <?php
                        
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

        $sql = "SELECT * FROM Items ORDER BY DateUpload DESC";
        
        $result = $conn->query($sql);
        $count=0;
        while(($row=mysqli_fetch_array($result)) && ($count<12)) 
        {
             echo '<a id="check"href="ItemDetails.php"><img id="v" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'" height="200px" width="200px"/></a>&nbsp;&nbsp;';
             $count= $count + 1;
        }
        
        
      
?>