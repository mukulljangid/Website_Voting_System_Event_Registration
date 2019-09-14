<?php

$conn = mysqli_connect("localhost","root","","event");

session_start();

$eventname = $_POST["event_name"];
$startdate = $_POST["start_date"];
$enddate = $_POST["end_date"];
$starttime = $_POST["start_time"];
$endtime = $_POST["end_time"];
$fees = $_POST["event_fees"];
$type = $_POST["event_type"];
$description = $_POST["description"];
$committe = $_POST["committee"];

if(mysqli_query($conn,"INSERT INTO $committe VALUES ('$eventname','$startdate','$enddate','$starttime','$endtime','$fees','$type','$description') ")) {
	header("Location: member.php");
}
else {
	echo "error";
}

?>