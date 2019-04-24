<?php

    session_start();

    $servername = "localhost";
    $username = "French";
    $password = "password";
    $dbname = "UserLogin";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $Uname = $_POST['username'];
    $Pword = $_POST['password'];
    $AType = $_POST['Atype'];
 

    if(($Uname=="admin@admin.com")&&($Pword=="admin")&&($AType=="Seller")){
        header('refresh:0.1; url=admin.php');
    }


    
    $sql = "SELECT * FROM Logins WHERE Username= '".$Uname."' AND AccountType= '".$AType."' ";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result)==1) {
            $row = $result->fetch_assoc();
            if(password_verify($Pword, $row["Password"])) {
                if($AType=="Seller")
                {
                    $servername1 = "localhost";
                    $username1 = "French";
                    $password1 = "password";
                    $dbname1 = "CurrentUser";

                    // Create connection
                    $conn = new mysqli($servername1, $username1, $password1, $dbname1);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 
                    
                    $id=$row["ID"];
                     $query = " INSERT INTO users (SellerName, SellerEmail,UID) VALUES ('".$row["Name"]."', '".$Uname."', '".$row["ID"]."') ";
                    if ($conn->query($query) === TRUE) {

                    } 
                    else {
                        echo "Error: " . $query . "<br>" . $conn->error;
                    }
                    
                    $_SESSION['tempID']=$row["ID"];
                    $_SESSION['tempName']=$row["Name"];
                    $_SESSION['tempEmail']=$Uname;
                    
                    header('refresh:0.1; url=buyer.php');
                }
                else
                {
                     $_SESSION['Respondent']=$row["Name"];
                     echo "<script>alert('Successfully logged on as ". $_SESSION['Respondent']."');</script>";
                     header('refresh:0.1; url=craigslist.php');
                }
            }
            else
            {
                echo "User Not Found, Please Check Username or Password";
            }
    } else {
        echo "User Not Found, Please Check Username or Password";
    }
    $conn->close();

?>