<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <script                       
                src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        </script>
          <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }
            
            function topFunction() {
                 $("html, body").animate({
                     scrollTop : 0
                     },1000);
               // document.body.scrollTop = 0;
                //document.documentElement.scrollTop = 0;
            }
              
              
            const body = document.body;
            const btn = document.querySelectorAll('.button')[0];

            btn.addEventListener('mouseenter', () => {
                body.classList.add('show');
            });

            btn.addEventListener('mouseleave', () => {
                body.classList.remove('show');
            });  


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
        
        <TITLE> craigslist</TITLE>
        <link href="CLFormat.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

        <div id= "top" class="main">
            <p style=" color:white; font-family: Stencil Std;font-size: 15px"> 
            <img src="cl.png" align="middle" alt="home logo" width="50" height="30" style="display: inline;font-size: 21px; color: white; padding-left: 80px" >
            
            
            
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
                    <li id = "TNav"><a href="CLAboutUs.html">About Us</a></li>
                    <li id = "TNav"><a href="CLlogin.html">My Account</a></li>
                    <li id = "TNav"><a href="#AboutUs">Categories <i class="fa fa-caret-down"></i> </a>
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
                    <li id = "TNav"><a class="active" href="craigslist.php">Home</a></li>
                
                     <li id = "TNav" ><a  style="left:0;pointer-events: none;
                     cursor: default; font-family: Snell Roundhand, cursive;font-size: 25px;color:silver"  href="#about">FrenchCo.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            
            </ul>  
        </div>
            <br/><br/><br/><br/><br/><br/><br/>
        <div id= "content">
                <p style="z-index:1000">
                    <H1>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Welcome to Craiglist's official website.
                    </H1>
                    <H4> 
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  We provide the best services at the best prices. CLICK below to get started.
                    </H4>
                </p>
                <br/>
                <form action="CLlogin.html">
                     <button id="getStarted">Get Started</button>
                </form>
              
           
             
        </div>  
            
        </div>  
        
        <div id= "container2">
            <br/>
            <center>
                <table align="right">
                    <center><p style="font-size:20px; font-weight: bold" > Recently Added Merchandise</p></center>
                    <tr align="right">
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
                                 $count= $count + 1;
                            }
        
                        ?>
                    </tr> 
                </table> 
            </center>
            
        
        </div> 
        <div id= "container3">
            <div id= "container31">
                <center>
                    <h1>Safety Tips</h1>
                    <hr style="width:60%;color:silver; height: 0.5%">
                    <table align="left" width=100% padding="0px" rowspan= 0; colspan=0>
                    <tr>
                        <td>
                            <img src="wire.png" align="middle" alt="wire" width="100" height="100" style="display: inline; vertical-align: bottom;font-size: 21px; color: white; padding-left: 10px;" > &nbsp;&nbsp;&nbsp; 
                        </td>
                        <td>
                            <h3  left="0px;" align="middle" style="font-size: 16px">No Wire Transactions, Keep Craigslist Payments Offline</h3>  
                        </td>
                        <td>
                            <img src="scam.png" align="middle" alt="wire" width="100" height="100" style="display: inline; vertical-align: bottom;font-size: 21px; color: white; padding-left: 10px;" > &nbsp;&nbsp;&nbsp; 
                        </td>
                        <td>
                            <h4  left="0px;" align="middle" style="font-size: 16px; font-family:  Stencil Std; left:0px; display: inline">Familiarize Yourself with the<br/> Most Common Signs of Craigslist Scams</h4>  
                        </td>
                        <td>
                            <img src="car.png" align="middle" alt="wire" width="150" height="100" style="display: inline; vertical-align: bottom;font-size: 21px; color: white; padding-left: 10px;" > &nbsp;&nbsp;&nbsp; 
                        </td>
                        <td>
                            <h4  left="0px;" align="middle" style="font-size: 16px; left:0px;font-family: Varela Round;  display: inline">Thoroughly observe images to determine <br/> if they're fake or not</h4>  
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="meet.jpg" align="middle" alt="wire" width="100" height="100" style="border-radius:  1em; display: inline; vertical-align: bottom;font-size: 21px; color: white; padding-left: 10px;" > &nbsp;&nbsp;&nbsp; 
                        </td>
                        <td>
                            <h3  left="0px;" align="middle" style="font-size: 16px; color: white;  font-family:Varela Round; left:0px; display: inline">Meet in public and See the Product in Person</h3>  
                        </td>
                        <td>
                            <img src="spam.png" align="middle" alt="wire" width="100" height="100" style="display: inline; vertical-align: bottom;font-size: 21px; color: white; padding-left: 10px;" > &nbsp;&nbsp;&nbsp; 
                        </td>
                        <td>
                            <h4  left="0px;" align="middle" style="font-size: 16px; font-family: Varela Round; left:0px; display: inline">Safeguard Your Privacy on Your Listing, by using spams</h4>  
                        </td>
                        <td>
                            <img src="gps.png" align="middle" alt="wire" width="150" height="100" style="display: inline; vertical-align: bottom;font-size: 21px; color: white; padding-left: 10px;" > &nbsp;&nbsp;&nbsp; 
                        </td>
                        <td>
                            <h4  left="0px;" align="middle" style="font-size: 16px; left:0px;font-family: Varela Round;  display: inline">Don't Forget to Privatize Your Location By Removing GeoTags</h4>  
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="iphone.jpg" align="middle" alt="wire" width="100" height="100" style="border-radius: 1em; display: inline; vertical-align: bottom;font-size: 21px; color: white; padding-left: 10px;" > &nbsp;&nbsp;&nbsp; 
                        </td>
                        <td>
                            <h3  left="0px;" align="middle" style="font-size: 16px; color: white; font-family:Varela Round; left:0px; display: inline">Inspect, Ask About, and Unwrap What You're Buying</h3>  
                        </td>
                        <td>
                            <img src="home.png" align="middle" alt="wire" width="100" height="100" style="border-radius: 1em; display: inline; vertical-align: bottom;font-size: 21px; color: white; padding-left: 10px;" > &nbsp;&nbsp;&nbsp; 
                        </td>
                        <td>
                            <h4  left="0px;" align="middle" style="font-size: 16px; font-family: Varela Round; left:0px; display: inline">Never invite sellers from <br/>Craigslist to your home</h4>  
                        </td>
                        <td>
                            <img src="cash.png" align="middle" alt="wire" width="150" height="100" style="border-radius: 1em; display: inline; vertical-align: bottom;font-size: 21px; color: white; padding-left: 10px;" > &nbsp;&nbsp;&nbsp; 
                        </td>
                        <td>
                            <h4  left="0px;" align="middle" style="font-size: 16px; left:0px;font-family: Varela Round;  display: inline">Don't carry large amounts of cash</h4>  
                        </td>    
                    </tr>
                    
                    </table>
                    
                </center>
            </div> 
        </div> 
        <div id= "container4">
            <div id = "Contact" style="s-index:-1;color:black">
                <div id = "ContactUs" style="s-index:-1;align-content: center; color:black;top:0px">
                        <div style=" font-size: 40px;color: white;text-align: center; font-family: Impact">
                            Contact Us 
                            <br/><br/>
                        <div class="button">
                            <a style="font-size: 20px" href="https://accounts.google.com/ServiceLogin/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&osid=1&service=mail&ss=1&ltmpl=default&rm=false&flowName=GlifWebSignIn&flowEntry=AddSession">
                                Email&nbsp;Us&nbsp;Now
                                <span class="shift">></span>
                            </a>
                            <div class="mask"></div>
                        </div>
                     </div>
                </div>
            </div>
            <ul id="footer_Nav" style="s-index:1000;color:black">
                <li id = "TNav"><a href="#news"></a></li>
                <li id = "FNav"><a href="CLlogin.html">My Account</a></li>
                <li id = "TNav"><a href="CLAboutUs.html">About Us</a></li>
                <li id = "FNav"><a class="active" href="craigslist.php">Home</a></li>
                <li id = "FSNav" ><a style="pointer-events: none;
                     cursor: default" href="#"> &copy; Copyright 2018. All Rights Reserved. | This website was designed by French Corp. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            
            </ul> 
        </div> 
      
    </body>
        
    </html>
