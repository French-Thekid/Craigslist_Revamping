<?php
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
    $MyEmail = "craigslist.welcome@gmail.com";
    $Uname = $_POST['username'];
    $Email = $_POST['email'];
    $Pword = $_POST['password'];
    $AType = $_POST['Atype'];

    $hashed_password = password_hash($Pword, PASSWORD_DEFAULT);
    
    $sql = "SELECT * FROM Logins";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) 
        {
          if(($row["Username"]==$Email) &&  ($row["AccountType"]==$AType))
            {
                header('refresh:0.2; url=Register.html');
                echo '<script language="javascript">alert("Account already exist, please try again. ");</script>';
                exit();
            }
        }        

    $query = " INSERT INTO Logins (Name, Username, Password, AccountType) VALUES ('".$Uname."', '".$Email."', '".$hashed_password."', '".$AType."') ";
    if ($conn->query($query) === TRUE) {

    } 
    else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
  
    
    $to = $Email; 
    $subject = "Craigslist Account Verification";
    $message = "Dear ".$Uname."\n\nThank you for registering with Craigslist, Please <a href='/Applications/MAMP/htdocs/Craiglist/CLlogin.html'> Click here </a> to     verify your email. \n\n\nThis is an automated message. Please do not reply to this email";
    $header = "From: Craigslist";

    mail($to,$subject,$message,$header);
    header('refresh:1; url=CLlogin.html');
    
    /*
    {
         echo '<script language="javascript">alert("Mail Sent to ".$Email.". Thank you ".$Name.", we will contact you shortly. <a href='CLlogin.html'> Click here </a> to login.");</script>';
    }
    else
    {
         echo '<script language="javascript">alert("Please ensure you entered a valid email");</script>';
         header('Location: CLlogin.php'); 
    
    }
*/
   
//    header('Location: CLlogin.php'); 
    

    $conn->close();
?>