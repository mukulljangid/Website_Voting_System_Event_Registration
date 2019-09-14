<?php

$username = $_POST["username"];
$password = $_POST["password"];


$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);

mysql_connect("localhost","root","");
mysql_select_db("login");

$result1= mysql_query("select * from student where username='$username' and password='$password'") or die("FAILED TO QUERY DATABASE".mysql_error());
$result2= mysql_query("select * from member where username='$username' and mpassword='$password'") or die("FAILED TO QUERY DATABASE".mysql_error());
$row1=mysql_fetch_array($result1);
$row2=mysql_fetch_array($result2);

if ($row1['username'] == $username && $row1['password'] == $password) 
{
	echo "Login successful";
}elseif ($row2['username'] == $username && $row2['mpassword'] == $password) {
	echo "Login successful!";
}else 
{
	echo "Incorrect username or password!";
}










?>

