<?php
    

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
                        </ul>
                    </li>
                    <li id = "TNav"><a  href="CLAboutUs.html">About Us</a></li>
                    <li id = "TNav"><a  href="craigslist.html">Logout</a></li>
                    <li id = "TNav"><a  href="#AboutUs">Categories <i class="fa fa-caret-down"></i> </a>
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
                    <li id = "TNav"><a class="active"  href="buyer.php">Home</a></li>
                
                      <li id = "TNav" ><a  style="left:0;pointer-events: none;
                     cursor: default; font-family: Snell Roundhand, cursive;font-size: 25px;color:silver"  href="#about">FrenchCo.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            
            </ul>  
        </div>
            
        
       <center>
           </br></br>
            <div id="log1">
              <table>
                <tr colspan=2>
                    <h1> Item Details  </h1> 
                        <hr style="width:60%;color:silver; height: 0.5%">
                    <br/>
                </tr>
                <tr>
                   
                </tr>
              
                </table>  
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
