<?php
    
session_start();
?>
<!DOCTYPE html>
<html>
    <head>  
        
        <TITLE> craigslist</TITLE>
        <link href="CLFormat.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            
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
                  opacity: 0.6;
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
        
    </head>
    <body >
        <button id="myBtn" title="Go to top">Top</button>

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
                    <li id = "TNav"><a  href="CLlogin.html">Logout</a></li>
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
                    <li id = "TNav"><a class="active"  href="admin.php">Home</a></li>
                
                      <li id = "TNav" ><a  style="left:0;pointer-events: none;
                     cursor: default; font-family: Snell Roundhand, cursive;font-size: 25px;color:silver"  href="#about">FrenchCo.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            
            </ul>  
        </div>
            
        
       <center>
           </br></br>
            <div id="log1" >
              <form  name="form" id="myform" action="admin.php" method="post" enctype="multipart/form-data">
              <table>
                <tr colspan=2>
                    <p style="color:white"> Merchandize View  </p> 
                        <hr style="margin:0 auto;width:60%;color:silver; height: 0.5%">
                    <br/>
                <tr/>
                <tr>
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
                            while($row=mysqli_fetch_array($result)) 
                            {
                                  echo'
                                     <div style="margin-right:10px;float:left;left:50px" class="Con">
                                         <center>
                                             <img class="image" id="v" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'" height="200px" width="300px"/>
                                         </center>
                                         
                                         <center>
                                            <div class="middle">
                                               <div class="text"><a style="text-decoration:none" href="detailedV.php?id='.$row["ID"].'" >View Details</a></div>
                                            </div>
                                            </center>
                                      </div>   
                                      
                                 ';
                            }
        
                        ?> 
                  </tr>
                  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                  <tr>
                      <td>
                        <input style="width:300px;font-size: 14px; font-family: Times, Times New Roman, serif"  href="admin.php" type="submit" value="Return"><br/>
                      </td>
                  </tr>
                        
                </table>  
              </form>
            </div>
        </center> 
            

           
        </div>  
        <center>
        <div id= "container21" style="top:1180px">
            <ul id="footer_Nav1" style="pointer-events: none;
                 cursor: default;s-index:1000;color:black;top:0px">
                <li id = "FSNav" ><a href="#"> &copy; Copyright 2018. All Rights Reserved. | This website was designed by French Corp. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            
            </ul> 
        </div> 
        </center>
      
    </body>
        
    </html>
