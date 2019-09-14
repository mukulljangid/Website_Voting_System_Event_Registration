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
			<li><a style="color: white" href="addevent.php">Add Event</a></li>
			<li><a href="#feedback.php">Read Feedback</a></li>
			<li style="float: right;"></li>
		</ul>
	</div>
</div>
<div class="containerone">
 <form action="even.php" method="POST">
    
    <label >Name<span class="required" id="compulsory2">*</span>
     </label>
     <input type="text" name="event_name" placeholder="Event Name..">

    <table width="100%">
    <tr>
    <td>
    <label >Starting Date<span class="required" id="compulsory2">*</span></label>
    <input type="date" name="start_date"></td>     
    <td>
    <td>
    <label >Ending Date<span class="required" id="compulsory2">*</span></label>
    <input type="date" name="end_date" min=""></td>     
    <td>
    <label >Start Time<span class="required" id="compulsory2">*</span></label>
    <input type="time" name="start_time"></td>   
    <td>
    <td>
    <label >End Time<span class="required" id="compulsory2">*</span></label>
    <input type="time" name="end_time"></td>   
    <td>
    <label >Fees<span class="required" id="compulsory2">*</span></label>
    <input type="number" name="event_fees" placeholder="Event Fees.."></td>
	</tr>
	</table>
	<br>
	<label >Commitee<span class="required" id="compulsory2">*</span></label>
    <select name="committee"> 
    	<option value="">Select comittee </option>
    	<option value="cultural">Cultural</option>   
		<option value="sports">Sports</option> 
		<option value="technical">Technical</option>   
	</select>
	<br>
	<label >Event type<span class="required" id="compulsory2">*</span></label>
    <select name="event_type"> 
    	<option value="">Select Event Type</option>
    	<option value="workshop">Workshop</option>   
		<option value="seminar">Seminar</option> 
		<option value="competition">Competition</option>   
	</select>
 	
 	<label >Description<span class="required" id="compulsory2">*</span></label>
 	<textarea name="description" placeholder="Tell us about Event.." style="height:200px;resize: none;"></textarea>

    <input type="submit" name="submit">
  </form>
</div>
