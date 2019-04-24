<?php
    
session_start();
?>
<!DOCTYPE html>
<html>
    <head>      
        <script>            
            function validateForm() {
                var u = document.forms["form"]["name"].value;
                var e = document.forms["form"]["description"].value;
                var e1 = document.forms["form"]["price"].value;
                var p = document.forms["form"]["features"].value;
                var p1 = document.forms["form"]["quantity"].value;
                var t = document.getElementById("category").selectedIndex;
                if ((u == "")||(e=="")||(e1=="")||(p=="")||(p1=="")||t==0) {
                    alert("Please check to ensure all fields are filled out");
                    return false;
                }
                else{
                    alert("Please check to ensure that Emails / Passwords match");
                    return false;
                }
            }
            
             window.onload = function () {
                    if (localStorage.getItem("hasCodeRunBefore") === null) {
                        /** Your code here. **/
                        alert("Please Select an image to auto load the fields, which will make removing your merchandise easier");
                        localStorage.setItem("hasCodeRunBefore", true);
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
            <div id="log1">
              <form  name="form" id="myform" action="RemoveRStock.php"  method="post" enctype="multipart/form-data">
              <table>
                <tr colspan=2>
                    <p style="color:white"> Remove Item  </p> 
                        <hr style="margin:0 auto;width:60%;color:silver; height: 0.5%">
                    <br/>
                <tr/>
                <tr>
                     <?php
                        $tempID=$_SESSION['tempID'];  
                        $ID = ucwords($_GET['id']); 
                        $_SESSION["id"] = $ID;
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

                        $sql = "SELECT * FROM Items ORDER BY DateUpload DESC  ";

                        $result = $conn->query($sql);
                        while($row=mysqli_fetch_array($result)) 
                        {
                             echo '<a href="adminRStock.php?id='.$row["ID"].'" ><img id="v" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'" height="100px" width="100px"/></a>&nbsp;';
                        }
                    
                    
                        $servername2 = "localhost";
                        $username2 = "French";
                        $password2 = "password";
                        $dbname2 = "Stocks";

                        // Create connection
                        $conn = new mysqli($servername2, $username2, $password2, $dbname2);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        } 

                        $sql = "SELECT * FROM Items where ID= '".$ID."' ";

                        $result = $conn->query($sql);
                        $row=mysqli_fetch_array($result); 
                    echo '
                
                </tr>  
                <tr>
               
                    <td>
                       <label style="font-size: 14px; color:white" for="fname">Item/Service Title</label><br/>
                    </td>
                    <td>
                        <input style="font-size: 12px; width:300px; font-family: Times, Times New Roman, serif" type="text" id="name" name="name" Value='.$row["Name"].'><br/>
                    </td>
                    <td>
                       <label style="font-size: 14px; color:white" for="fname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Item Description</label><br/>
                    </td>
                    <td rowspan=2>
                        
                       <textarea name="description" form="myform" rows="8" cols="60" style="font-size:12">'.$row["Description"].'</textarea>
                        
                    </td>
                </tr>  
                <tr>
                    <td>
                         <label style="font-size: 14px" for="fname">Price</label><br/>
                    </td>
                    <td>
                          <input style="font-size: 12px; width:300px; font-family: Times, Times New Roman, serif" type="text" id="price" name="price" Value='.$row["Price"].'><br/>
                    </td>
                </tr>
                <tr>
                    <td>
                      <label style="font-size: 14px" for="fname">Key Features</label><br/>
                    </td>
                    <td>
                         <input style="font-size: 12px; width:300px; font-family: Times, Times New Roman, serif" type="text" id="features" name="features" Value='.$row["Features"].'><br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 14px" for="lname">Quantity</label><br/>
                    </td>
                    <td>
                      <input style="font-size: 12px; width:300px; font-family: Times, Times New Roman, serif" type="text" id="quantity" name="quantity"  Value='.$row["Quantity"].'><br/>
                    </td>
                    <td>
                        <label style="font-size: 14px; color:white" for="fname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload Image</label><br/>
                    </td>
                    <td>
                        <input type="file" name="file" id="file">
                    </td>
                </tr>
                <tr>
                    <td>
                       <label style="font-size: 14px" for="category">Item Category</label><br/>
                    </td>
                    <td>
                        <select style="width:300px;font-size: 12px; font-family: Times, Times New Roman, serif" id="category" name="category" >
                            <option value="select">'.$row["Category"].'</option>
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
                  <tr align="center" >
                        <td colspan=4>
                            <input style="width:300px;font-size: 14px; font-family: Times, Times New Roman, serif" onclick="validate()" href="CLlogin.html" type="submit" value="Remove Item"><br/>
                         </td>  
                       
                  </tr>';?>
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

    <script>
        function selectOpt{
             alert('Please select merchandise from list provided to update');
        }
        
    </script>
      
    </body>
        
    </html>
