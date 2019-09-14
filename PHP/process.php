

<?php include 'database.php'; ?>

<?php

// create a variable
$first_name=$_POST['firstname'];
$last_name=$_POST['lastname'];
$subject=$_POST['subject'];

//Execute the query


mysqli_query($connect,"INSERT INTO studentinfo (firstname,lastname,subject)
		        VALUES ('$first_name','$last_name','$subject')");
				
	if(mysqli_affected_rows($connect) > 0)
	{
	echo "<p>THANK YOU, WE WILL ATTEND TO IT</p>";
	echo "<a href='contact.php'>more to share?</a>";
} else {
	echo "FAILED TO MAKE ENTRY<br />";
	echo mysqli_error ($connect);
}
?>