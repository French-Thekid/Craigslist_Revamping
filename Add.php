<?php
    
session_start();
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
                            <li> <a href="eval.pdf" target="_blank">Evaluation</a> </li>
                        </ul>
                    </li>
                    <li id = "TNav"><a  href="CLAboutUs.html">About Us</a></li>
                    <li id = "TNav"><a  href="craigslist.php">Logout</a></li>
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
                    <li id = "TNav"><a class="active"  href="buyer.php">Home</a></li>
                
                      <li id = "TNav" ><a  style="left:0;pointer-events: none;
                     cursor: default; font-family: Snell Roundhand, cursive;font-size: 25px;color:silver"  href="#about">FrenchCo.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            
            </ul>  
        </div>
            
        
       <center>
           </br></br>
            <div id="log1">
              <form  name="form" id="myform" action="Adding.php" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
              <table>
                <tr colspan=2>
                    <h1> Add Item  </h1> 
                        <hr style="width:60%;color:silver; height: 0.5%">
                    <br/>
                </tr>
                <tr>
                    <td>
                       <label style="font-size: 22px; color:white" for="fname">Item/Service Title</label><br/>
                    </td>
                    <td>
                        <input style="font-size: 18px; width:300px; font-family: Times, Times New Roman, serif" type="text" id="name" name="name" placeholder="4 Bed room apartment...."><br/>
                    </td>
                    <td>
                       <label style="font-size: 22px; color:white" for="fname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Item Description</label><br/>
                    </td>
                    <td rowspan=3>
                        
                       <textarea name="description" form="myform" rows="12" cols="60" placeholder="Enter Description here..."></textarea>
                        
                    </td>
                </tr>  
                <tr>
                    <td>
                         <label style="font-size: 22px" for="fname">Price</label><br/>
                    </td>
                    <td>
                          <input style="font-size: 18px; width:300px; font-family: Times, Times New Roman, serif" type="text" id="price" name="price" placeholder="$X00.."><br/>
                    </td>
                </tr>
                <tr>
                    <td>
                      <label style="font-size: 22px" for="fname">Key Features</label><br/>
                    </td>
                    <td>
                         <input style="font-size: 18px; width:300px; font-family: Times, Times New Roman, serif" type="text" id="features" name="features" placeholder="AC units, pool...."><br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 22px" for="lname">Quantity</label><br/>
                    </td>
                    <td>
                      <input style="font-size: 18px; width:300px; font-family: Times, Times New Roman, serif" type="text" id="quantity" name="quantity"  placeholder="1 Unit"><br/>
                    </td>
                    <td>
                        <label style="font-size: 22px; color:white" for="fname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload Image</label><br/>
                    </td>
                    <td>
                        <input type="file" name="file" id="file">
                    </td>
                </tr>
                <tr>
                    <td>
                       <label style="font-size: 22px" for="category">Item Category</label><br/>
                    </td>
                    <td>
                        <select style="width:300px;font-size: 14px; font-family: Times, Times New Roman, serif" id="category" name="category">
                            <option value="select"></option>
                            <option value="Community">Community</option>
                            <option value="Housing">Housing</option>
                            <option value="Jobs">Jobs</option>
                            <option value="Services">Services</option>
                            <option value="For Sale">For Sale</option>
                            <option value="Gigs">Gigs</option>
                            <option value="Resume">Resume</option>
                        </select><br/>
                      </td>
                  </tr>     
                  <tr align="center">
                        <td  colspan=4>
                            <input style="width:300px;font-size: 14px; font-family: Times, Times New Roman, serif" onclick="validate()" href="CLlogin.html" type="submit" value="Add Item">
                            <input style="width:300px;font-size: 14px; font-family: Times, Times New Roman, serif" id="reset" type="reset" value="Clear Form"><br/>
                         </td> 
                  </tr>
                </table>  
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
