<html>
<head>
    <title>Student Council Website</title>
    <link rel="stylesheet" type="text/css" href="mycss.css">
    <link rel="stylesheet" type="text/css" href="buttoncss.css">
</head>
<style>
.image { 
   position: relative; 
   weight:100%;

   
}
body
{
	height: 100%;
	margin: 0;
}

.centered {
    position: absolute;
    
    top: 50%;
    left:50%;
    
    transform: translate(-50%, -50%);
    color: white;
    font-size: 60px;
    font-weight: 900;
    font-family: Arial, Helvetica, sans-serif;
}


.p1
{
letter-spacing: 2px;
word-spacing: 4px;
font-variant: small-caps;
font-family: Georgia, serif;

font-size: 26px;
line-height: 2;

}
.p2
{
word-spacing: 2px;
font-family:Verdana, sans-serif;
letter-spacing: -;
line-height: 1.8;


}



input[type=text], select, textarea
 {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 10px;
    margin-bottom: 30px;
    resize: vertical;
    
}

input[type=submit] {
    background-color: black;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 40px;
    margin: 20px 0;
    
}

input[type=submit]:hover {
    background-color: #45a049;
}

a:hover
{
 background-color: #FFFFFF;   
}
a:active
{
   background-color: #000000;
}
.containerone
 {
    border-radius: 5px;
    background-color: white;
    padding: 100px 300px 300px 150px;
}


</style>
<body>

<div class="container">
    <div style="padding: 25px; float: left;">
        <img src="product-1.jpg" width="300px" height="60px">
    </div>
    <div style="height: 100px">
        <ul class="navbar">
            <li class="active" style="padding-left: 40px;"><a href="home.html" style="height:120px; margin-top:0 ;width:100px">Home</a></li>
            <li><a href="Cultural.html" style="height:120px; margin-top:0 ;width:100px">Cultural</a></li>
            <li><a href="technical.html" style="height:120px;  margin-top:0; width:100px">Technical</a></li>
            <li><a href="sports.html" style="height:120px; margin-top:0 ;width:100px">Sports</a></li>
            <li><a href="contact.php" style="width:100px; margin-top:0 ;height: 120px">Submit Your Ideas</a></li>
            <li style="float: right;padding-right: 40px ">

            <button onClick="document.getElementById('id01').style.display='block'" style="height:px;width:125px">Login</button></li>
                   
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

<div class="image"><img src="better.jpg" alt="alt text"  style="width:1349px;height:300px;margin-top: -11px">
      <div class="centered">CONTACT US</div>


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

</body>
</html>
