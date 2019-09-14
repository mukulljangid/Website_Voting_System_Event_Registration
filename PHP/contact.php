
<!DOCTYPE html>
<?php  
session_start();//session is a way to store information (in variables) to be used across multiple pages.  
?>

<html>
<head>
	<title>Student Council Website</title>
	<link rel="stylesheet" type="text/css" href="mycss.css" media="all">
	<link rel="stylesheet" type="text/css" media="all" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" type="text/css" href="buttoncss.css">
</head>
<body>


<div class="container" style="height: 10%">
	<div style="margin-left: 1%;margin-top: 2%;float: left;width: 40%;height :30px">
		<i class="fa fa-group" style="color: white;font-size: 40px;">   St. Francis Student Council</i>
	</div>
	<div style="height: 100px;">
		<ul class="navbar">
			<li><a href="home.php">Home</a></li>
			<li><a href="culturalnew.php">Cultural</a></li>
			<li><a href="technical.php">Technical</a></li>
			<li><a href="sports.php">Sports</a></li>
			<li><a style="color: white" href="contact1.php">Submit Your Ideas</a></li>
			<li style="float: right;">
				<button onClick="document.getElementById('id01').style.display='block'">Login</button></li>
                   
            <div id="id01" class="modal">
  
              <form class="modal-content animate" action="login.php" method="post">
             
               <span onClick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

                    <div class="containerlogin">
                    <label><b>Username</b></label>
                    <input class="input1" type="text" placeholder="Enter Username" name="username" required>

                    <label><b>Password</b></label>
                    <input class="input2" type="password" placeholder="Enter Password" name="password" required>
        
                    <button class="button1" type="submit">Login</button>
                    </div>

                     <div class="containerlogin" style="background-color:#f1f1f1">
                     <button class="button1"  type="button" onClick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    </div>
                     </form>
                 </div>

            <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            if (event.target == modal) {
            modal.style.display = "none";
            }
           }
            </script>
		</ul>
	</div>
</div>


<div id="image1">
	<div style="text-align: center;position: absolute;top: 25%;left: 25%;color: white;margin-left: 15%">
		<p style="font-size: 60px" align=""><strong>Contact Us</strong></p>
	</div>
</div>

<div class="containerone">

    <p class="p1">CONTACT US ON</p>
    <p class="p2">
    	Ph. No. 022-28928585/28908585<br></br>
    	Fax. 022-28954787<br></br>
    	Email:
    	<a href="email"> sfedu@sfitengg.org</a>
    </p>
    <p class="p1">OR FILL OUT THIS FORM</p>
<br></br>
<br></br>

  
  <form action="process.php" method="post">
    
    <label>First Name
    <span class="required" id="compulsory3">*</span>
     </label>
     <input type="text" name="firstname" placeholder="Your name..">

    

    <label >Last Name<span class="required" id="compulsory2">*</span></label>
    <input type="text" name="lastname" placeholder="Your last name..">     
    
 

 	<label>Subject<span class="required" id="compulsory1">*</span>
     </label>
    <textarea name="subject" placeholder="Help us improve.." style="height:200px"></textarea>
    
     

    <input type="submit" name="submit">
  </form>
</div>


<div class="footer">
	<div style="font-size: 25px;color: white;padding: 1%;margin-left: 10%;float: left;" >Follow us on  </div>
	<div style="padding-top: 0.5%;padding-left: 20%">
		<i class="fa fa-facebook" style="font-size:36px;padding-left: 3%;color: white;"></i>
		<i class="fa fa-instagram" style="font-size:36px;padding-left: 3%;color: white;"></i>
		<i class="fa fa-youtube-play" style="font-size:36px;padding-left: 4%;color: white;"></i>
		<i class="fa fa-twitter" style="font-size:36px;padding-left: 4%;color: white;"></i>
	</div>
</div>

<?php include 'multiple.php' ?>

</body>
</html>
