<!DOCTYPE html>
<html>
<head>
	<title>Student Council Website</title>
	<link rel="stylesheet" type="text/css" href="mycss.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="cultural.css">
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
			<li><a style="color: white" href="sports.php">Sports</a></li>
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

		</ul>
	</div>
</div>


<div>
  	<img class="mySlides" src="event1.jpg" style="width:100%" height="500px">
  	<img class="mySlides" src="event2.jpg" style="width:100%" height="500px">
  	<!--<img class="mySlides" src="img_chicago.jpg" style="width:100%">-->
</div>

<script>
	var myIndex = 0;
	carousel();

	function carousel() {
    	var i;
    	var x = document.getElementsByClassName("mySlides");
    	for (i = 0; i < x.length; i++) {
    	   x[i].style.display = "none";  
    	}
    	myIndex++;
    	if (myIndex > x.length) {myIndex = 1}    
    		x[myIndex-1].style.display = "block";  
    	setTimeout(carousel, 2000); // Change image every 2 seconds
	}
</script>

<div class="wrapper">
	<link rel="stylesheet" type="text/css" href="cultural.css">
		<h1 align="center">MEMBERS</h1>
</div>

<div>
	<div style="float: left;padding-left: 18%;padding-top: 80px;"><img src="sports1.jpg" width="260" height="260"></div>
	<div style="color: black;width: 48%;font-size: 25px;float: left;padding-top: 65px;padding-left: 3%"><p>Hello Sfitians,<br><br>Welcome! Our website contains information on past projects, ongoing initiatives, and future work. Please contact us at sfsc@sfit.edu to share any ideas you have or challenges you face.<br><br>We are excited to work with you to address student concerns and improve the undergraduate experience.<br><br>Best regards,<br><br><i>Rutvik Kakadiya</i><br><br><i>Sports Secretary 2017-2018</i></p></div>
</div>

<!--<div>
	<div style="float: left;padding-left: 18%;padding-top: 80px;"><img src="cul2.jpg" width="260" height="260"></div>
	<div style="color: black;width: 48%;font-size: 25px;float: left;padding-top: 65px;padding-left: 3%"><p>Hello Sfitians,<br><br>Welcome! Our website contains information on past projects, ongoing initiatives, and future work. Please contact us at sfsc@sfit.edu to share any ideas you have or challenges you face.<br><br>We are excited to work with you to address student concerns and improve the undergraduate experience.<br><br>Best regards,<br><br><i>Saheel Sawant</i><br><br><i>Joint Cultural Secretary 2017-2018</i></p></div>
</div>-->

<div class="wrapevent">
	<div class="event"><h1 align="center">EVENTS</h1></div>


	<div style="padding-top:0.5%">
		<div style="float: left;margin-left: 6%;padding-right: 2%"><img src="Sports.png" width="220" height="180"></div>
		<div>
			<p style="font-size: 20px;">REGISTER FOR SPORTS EVENT!!!!</p>
			<p style="font-size:19px">It is based on the belief that the creative process involved in artistic self-expression helps children to resolve conflicts and problems, develop interpersonal skills, manage behaviour, reduce stress, increase self-esteem and develop awareness.</p>
			<p style="font-size: 18px;"><a href="" style="text-decoration-line: none;">Register here!</a></p>
		</div>
	</div>
	<div style="padding-top:3%">
		<div style="float: left;margin-left: 6%;padding-right: 2%"><img src="Sports.png" width="220" height="180"></div>
		<div>
			<p style="font-size: 20px;">REGISTER FOR SPORTS EVENT!!!!</p>
			<p style="font-size:19px">It is based on the belief that the creative process involved in artistic self-expression helps children to resolve conflicts and problems, develop interpersonal skills, manage behaviour, reduce stress, increase self-esteem and develop awareness.</p>
			<p style="font-size: 18px;"><a href="" style="text-decoration-line: none;">Register here!</a></p>
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
</body>
</html>