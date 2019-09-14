<?php
$link = mysqli_connect('localhost', 'root', '','vote');
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
echo "<script>alert ('Connected successfully');   </script>"; 
session_start();
$pid=$_SESSION['$username'];

$selected_pres=$_POST['pres'];
$selected_lr=$_POST['lr'];
$selected_gs=$_POST['gs'];


echo"<script>alert('$pid $selected_pres $selected_lr $selected_gs')</script>";

if ((mysqli_num_rows(mysqli_query($link,"select * from president where pid=$pid")))&&(mysqli_num_rows(mysqli_query($link,"select * from ladyrep where pid=$pid")))&&
	(mysqli_num_rows(mysqli_query($link,"select * from generalsec where pid=$pid"))) )
 {
    echo "<script>alert ('You have already voted dude!');</script>";
}
else{
$query=mysqli_query($link,"insert into president values('$pid','$selected_pres')");

$query=mysqli_query($link,"insert into ladyrep values('$pid','$selected_lr')");

$query=mysqli_query($link,"insert into generalsec values('$pid','$selected_gs')");
}


//$url='home.php';
 //  echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';

mysqli_close($link);
?>

