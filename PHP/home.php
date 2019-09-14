
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
			<li><a style="color: white" href="home.php">Home</a></li>
			<li><a href="culturalnew.php">Cultural</a></li>
			<li><a href="technical.php">Technical</a></li>
			<li><a href="sports.php">Sports</a></li>
			<li><a href="contact1.php">Submit Your Ideas</a></li>
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


<div id="image">
	<div style="text-align: center;position: absolute;top: 25%;left: 25%;color: white;">
		<p style="font-size: 50px">Welcome to </p>
		<p style="font-size: 60px"><strong>St. Francis Student Council</strong></p>
	</div>
</div>



<div>
	<div style="float: left;padding-left: 18%;padding-top: 80px;"><img src="prez1.jpg" width="260" height="260"></div>
	<div style="color: black;width: 48%;font-size: 25px;float: left;padding-top: 65px;padding-left: 3%"><p>Hello Sfitians,<br><br>Welcome! Our website contains information on past projects, ongoing initiatives, and future work. Please contact us at sfsc@sfit.edu to share any ideas you have or challenges you face.<br><br>We are excited to work with you to address student concerns and improve the undergraduate experience.<br><br>Best regards,<br><br><i>Jetso Analin</i><br><br><i>President 2017-2018</i></p></div>
</div>


<div>
	<div style="float: left;padding-left: 18%;padding-top: 80px;"><img src="gs1.jpg" width="260" height="260"></div>
	<div style="color: black;width: 48%;font-size: 25px;float: left;padding-top: 65px;padding-left: 3%"><p>Hello Sfitians,<br><br>Welcome! Our website contains information on past projects, ongoing initiatives, and future work. Please contact us at sfsc@sfit.edu to share any ideas you have or challenges you face.<br><br>We are excited to work with you to address student concerns and improve the undergraduate experience.<br><br>Best regards,<br><br><i>Madhura Mathkar</i><br><br><i>General Secratory 2017-2018</i></p></div>
</div>



<div style="width: 100%;height: auto;float: left;">
	<div style="font-size: 30px;color: #19334d;margin-left: 40px">
		<p>News and Happenings</p>
	</div>
	<div>
		<div style="float: left;margin-left: 6%;padding-right: 2%"><img src="Elections.jpg" width="80" height="80"></div>
		<div style="padding-top: 0.5%">
			<p style="font-size: 20px;">JOIN SFIT COLLEGE COUNCIL!!!</p><p style="font-size: 18px;"><a href="" style="text-decoration-line: none;">Read More --></a></p>
		</div>
	</div>
	<div style="padding-top: 0.5%">
		<div style="float: left;margin-left: 6%;padding-right: 2%"><img src="Technical1.png" width="80" height="80"></div>
		<div >
			<p style="font-size: 20px;">REGISTER FOR TECHNICAL EVENT!!!!</p><p style="font-size: 18px;"><a href="" style="text-decoration-line: none;">Read More --></a></p>
		</div>
	</div>
	<div style="padding-top:0.5%">
		<div style="float: left;margin-left: 6%;padding-right: 2%"><img src="Cultural.jpg" width="80" height="80"></div>
		<div>
			<p style="font-size: 20px;">REGISTER FOR CULTURAL EVENT!!!!</p><p style="font-size: 18px;"><a href="" style="text-decoration-line: none;">Read More --></a></p>
		</div>
	</div>
	<div style="padding-top:0.5%">
		<div style="float: left;margin-left: 6%;padding-right: 2%"><img src="Sports.png" width="80" height="80"></div>
		<div>
			<p style="font-size: 20px;">REGISTER FOR SPORTS EVENT!!!!</p><p style="font-size: 18px;"><a href="" style="text-decoration-line: none;">Read More --></a></p>
		</div>
	</div>
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