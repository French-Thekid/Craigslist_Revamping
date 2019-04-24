<?php
    session_start();

    function clearit()
    {
       unset($_SESSION['Respondent']);
    }

?>
<!DOCTYPE html>
<html>
    <head>      
        <script>            
            function validateForm() {
                var u = document.forms["form"]["username"].value;
                var e = document.forms["form"]["email"].value;
                var e1 = document.forms["form"]["email1"].value;
                var p = document.forms["form"]["password"].value;
                var p1 = document.forms["form"]["password1"].value;
                var t = document.getElementById("Atype").selectedIndex;
                if ((u == "")||(e=="")||(e1=="")||(p=="")||(p1=="")||t==0) {
                    alert("Please check to ensure all fields are filled out");
                    return false;
                }
                else if((e==e1)&&(p==p1)){
                    return true;
                }
                else{
                    alert("Please check to ensure that Emails / Passwords match");
                    return false;
                }
            }
        </script>
          <style>
    
                .Con {
                    position: relative;
                    width: 200px; 
                    left:0px
                }

                .image {
                  opacity: 1;
                  border-radius:10px;
                  border: 1px solid blue;
                  display: block;
                  width: 200px; 
                  height: 200px;
                  transition: .5s ease;
                  backface-visibility: hidden;
                }

                .middle {
                  transition: .5s ease;
                  opacity: 0;
                  position: absolute;
                  top: 50%;
                  left: 50%;
                  transform: translate(-50%, -50%);
                  -ms-transform: translate(-50%, -50%);
                  text-align: center;
                }

                .Con:hover .image {
                  opacity: 0.7;
                }

                .Con:hover .middle {
                  opacity: 1;
                }

                .text {
                  background-color: #6633FF;
                  color: white;
                  font-size: 12px;
                  padding: 5px 10px;
                }
            </style>
        
        <TITLE> craigslist</TITLE>
        <link href="CLFormat.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
    </head>
    <body >
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

        <div id= "top" class="main">
            <p style=" color:white; font-family: Stencil Std;font-size: 15px; "> 
            <a href= "craigslist.html">
            <img src="cl.png" align="middle" alt="home logo" width="50" height="30" style="display: inline;font-size: 21px; color: white; padding-left: 80px" >
                </a>
            
            
            &nbsp; Quality services and items at the best prices.
            
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
              <img src="IG.png" align="middle" alt="Instagram logo" width="50" height="30" style=" z-index: 1000; right:0" >
                
              Craigslist_Official
                
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
          
              <img src="fb.png" align="middle" alt="facebook logo" width="50" height="30" style=" z-index: 1000; right:0" >
              Craigslist
          
            </p>
            
        </div>
        
         <div id= "container-main" >
            <div class="container" id="main" role="main">
                <ul class="menu">
                    <li><a id= "TNav" href="#s1">Assignments <i class="fa fa-caret-down"></i></a>
                         <ul class="submenu">
                            <li> <a href="memo.pdf" target="_blank">Memo</a> </li>
                            <li> <a href="Part2.pdf" target="_blank">Data Gathering </a> </li>
                            <li> <a href="Requirements.pdf" target="_blank">Requirements Analysis</a> </li>
                            <li> <a href="ConceptualDesign.pdf" target="_blank">Conceptual Design</a> </li>
                            <li> <a href="physical.pdf" target="_blank">Physical Design and Wireframe</a> </li>
                            <li> <a href="eval.pdf" target="_blank">Evaluation</a> </li>
                        </ul>
                    </li>
                    <li id = "TNav"><a  href="CLAboutUs.html">About Us</a></li>
                    <li id = "TNav"><a  onclick='clearit()' href="craigslist.php">My Account</a></li>
                    <li id = "TNav"><a  href="#AboutUs">Categories <i class="fa fa-caret-down"></i> </a>
                       <ul class="submenu">
                            <li> <a onclick='<?php $cat = "community"; ?>' href="catView.php?cat=community">Community</a> </li>
                            <li> <a onclick='<?php $cat = "Housing"; ?>'   href="catView.php?cat=housing">Housing</a> </li>
                            <li> <a onclick='<?php $cat = "Jobs"; ?>'      href="catView.php?cat=jobs">Jobs</a> </li>
                            <li> <a onclick='<?php $cat = "Services"; ?>'  href="catView.php?cat=services">Services</a> </li>
                            <li> <a onclick='<?php $cat = "For Sale"; ?>'  href="catView.php?cat=For Sale">For Sale</a> </li>
                            <li> <a onclick='<?php $cat = "Discussion Forum"; ?>'href="catView.php?cat=discussion">Discussion Forum</a> </li>
                            <li> <a onclick='<?php $cat = "Gigs"; ?>'      href="catView.php?cat=gigs">Gigs</a> </li>
                            <li> <a onclick='<?php $cat = "Resume"; ?>'    href="catView.php?cat=resume">Resume</a> </li>
                        </ul>
                    </li>
                    <li id = "TNav"><a class="active"  href="craigslist.php">Home</a></li>
                
                      <li id = "TNav" ><a  style="left:0;pointer-events: none;
                     cursor: default; font-family: Snell Roundhand, cursive;font-size: 25px;color:silver"  href="#about">FrenchCo.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            
            </ul>  
        </div>
            
        
       <center>
           </br></br>
            <div id="log1" style="height:600px">
                    <?php
                          $tempID=$_SESSION['tempID'];  
                          
                          $servername2 = "localhost";
                          $username2 = "French";
                          $password2 = "password";
                          $dbname2 = "FeedBacks";
                            
                          $feedback=array();
                          $respondent=array();
                
                          // Create connection
                          $conn = new mysqli($servername2, $username2, $password2, $dbname2);
                          // Check connection
                          if ($conn->connect_error) {
                              die("Connection failed: " . $conn->connect_error);
                          } 
                          $sql = "SELECT * FROM feedBacks WHERE sellerID= '".$tempID."' ";
                          $result = $conn->query($sql);
                          $count=0;
                          while($row=mysqli_fetch_array($result)) 
                          {
                            $feedback[$count]=$row['feedBacks'];
                            $respondent[$count]=$row['Respondent'];
                            $count=$count+1;
                          }
                
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
                        $sql = "SELECT * FROM Logins WHERE ID= '".$tempID."' ";
                        $result = $conn->query($sql);
                        $counter=0;
                        while($row=mysqli_fetch_array($result)) 
                        {
                              echo '
                                    <table style="font-size:18px" width="100%" height="100%">
                                        <tr >
                                        
                                            <th  rowspan=2 style="vertical-align:top;max-width:300px; min-width:300px" >
                                              <table>
                                                <tr>
                                                    <td align="right">
                                                        <img src="imgIcon.png" align="top" alt="home logo" width="300" height="300" style="border: 1px solid blue" >
                                                        <br/><br/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td  align="left">
                                                         Name:  '.$row['Name'].'</br></br>
                                                         Email Address: '.$row['Username'].'  </br></br>
                                                         Email Verified: <img src="verified.png" align="top" alt="home logo" width="30" height="30" style="display: inline" >  </br></br>
                                                         Account Type: Craigslist '.$row['AccountType'].'
                                                    </td>
                                                </tr>
                                              </table>
                                            </th>
                                            <th align="left" style="height:550px;max-width:1200px; border:1px solid blue; vertical-align:top">
                                                  <center>Customer Feedback</center><br/><br/>';
                                                  while($counter<$count)
                                                  {
                                                    echo '
                                                    &nbsp;&nbsp;&nbsp;&nbsp;'.$respondent[$counter].' : '.$feedback[$counter].'<br/>
                                                    ';
                                                    $counter=$counter + 1;
                                                  }
                                                
                                                 echo'
                                            </th>
                                         </tr>
                                         <tr style="border:1px solid blue">
                                            <td>
                                               <form method="POST" action="addFeedback.php">
                                                    &nbsp;&nbsp;&nbsp;<input name="feedbacks" type="text" placeholder="Leave a feedback..." style="width:800px"></input>
                                                    <input type="submit" style="width:150px">
                                               </form>
                                            </td>
                                         </tr>
                                        
                                    </table>
                                 ';
                            }
        
                    ?>
            </div>
        </center> 
            

           
        </div>  
        <center>
        <div id= "container21" style="top:780px">
            <ul id="footer_Nav1" style="pointer-events: none;
                 cursor: default;s-index:1000;color:black;top:0px">
                <li id = "FSNav" ><a href="#"> &copy; Copyright 2018. All Rights Reserved. | This website was designed by French Corp. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            
            </ul> 
        </div> 
        </center>
      
    </body>
        
    </html>
