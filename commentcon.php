<?php 
$con=mysqli_connect('localhost','root','','himmat');
if(!$con)
{
	die("connection failed".mysqli_connect_error());
}