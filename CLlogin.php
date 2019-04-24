<!DOCTYPE html>
<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="Logins";

    mysql_connect($host,$user,$password);
    mysql_select_db($db);

    if(isset($_POST['username']))
    {
        $Uname=$_POST['username'];
        $password=$_POST['password'];
        
        sql="SELECT * FROM loginForm where Username='".$Uname."' AND Password='".$password."' limit 1";
        $result=mysql_query(sql);
        
        if(mysql_num_rows($result)==1))
        {
            echo "Login Successful";
            exit();
        }
        else{
            echo "Login Unsuccessful, Please check Username/Password"
            exit();
        }
    }

?>

<html>
    <head>      
        
        <TITLE> craigslist</TITLE>
        <link href="CLFormat.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
    </head>
    <body >
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

        <div id= "top" class="main">
            <p style="display: inline; vertical-align: bottom;color:white; font-family: Stencil Std;font-size: 15px; "> 
            <img src="cl.png" alt="home logo" width="50" height="40" style="display: inline;vertical-align: bottom;font-size: 21px; color: white; padding-left: 80px;" >
            
            
            
            &nbsp; Quality services and items at the best prices.
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
              <img src="IG.png" alt="Instagram logo" width="50" height="30" style=" z-index: 1000; right:0" >
                
              Craigslist_Official
                
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                
              <img src="fb.png" alt="facebook logo" width="50" height="30" style=" z-index: 1000; right:0" >
              Craigslist
          
            </p>
            
        </div>
        
        <div id= "container-main" >
            <div class="container" id="main" role="main">
                <ul class="menu">
                    <li><a id= "TNav" href="#s1">Links <i class="fa fa-caret-down"></i></a>
                        <ul class="submenu">
                            <li> <a href="memo.pdf">Memo</a> </li>
                            <li> <a href="#">Data Gathering </a> </li>
                            <li> <a href="#">Requirements Analysis</a> </li>
                            <li> <a href="#">Conceptual Design</a> </li>
                        </ul>
                    </li>
                    <li id = "TNav"><a href="CLAboutUs.html">About Us</a></li>
                    <li id = "TNav"><a class="active" href="CLlogin.html">My Account</a></li>
                    <li id = "TNav"><a href="#AboutUs">Categories <i class="fa fa-caret-down"></i> </a>
                        <ul class="submenu">
                            <li> <a href="#">Community</a> </li>
                            <li> <a href="#">Housing</a> </li>
                            <li> <a href="#">Jobs</a> </li>
                            <li> <a href="#">Services</a> </li>
                            <li> <a href="#">For Sale</a> </li>
                            <li> <a href="#">Discussion Forum</a> </li>
                            <li> <a href="#">Gigs</a> </li>
                            <li> <a href="#">Resume</a> </li>
                        </ul>
                    </li>
                    <li id = "TNav"><a href="craigslist.html">Home</a></li>
                
                     <li id = "TNav" ><a  style="left:0;pointer-events: none;
                     cursor: default; font-family: Snell Roundhand, cursive;font-size: 25px;color:silver"  href="#about">FrenchCo.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            
            </ul>  
        </div>
            
        
       <center>
            <br/><br/><br/>
            <div id="log">
              <form id="form" method="POST" action="#">
                <label for="fname">Username</label>
                <input style="font-size: 18px; font-family: Times, Times New Roman, serif" type="text" id="username" name="username" placeholder="John..">

                <label for="lname">Password</label>
                <input style="font-size: 18px; font-family: Times, Times New Roman, serif" type="text" id="password" name="password" placeholder="Abc123..">

                <label for="country">Account Type</label>
                <select style="font-size: 18px; font-family: Times, Times New Roman, serif" id="type" name="country">
                  <option value="landlord">Seller</option>
                  <option value="tenant">Buyer</option>
                </select>
                <p style="font-family: Apple Chancery; font-size:16px">Don't have an account? <a style="color: blue; text-decoration: none " href="Register.html">Register now</a></p>
                <input style="font-size: 18px; font-family: Times, Times New Roman, serif" type="submit" value="Login">
              </form>
            </div>
            
          </center>  
            
            
            
            
            
            
            
           
        </div>  
        <center>
        <div id= "container21">
            <ul id="footer_Nav1" style="pointer-events: none;
                 cursor: default;s-index:1000;color:black;top:0px">
                <li id = "FSNav" ><a href="#"> &copy; Copyright 2018. All Rights Reserved. | This website was designed by French Corp. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            
            </ul> 
        </div> 
     </center>
      
    </body>
        
    </html>
