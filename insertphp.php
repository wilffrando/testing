<?php 

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'ajx');

extract($_POST);
if(isset($_POST['submit'])){
	$q = " insert into json (username,password) values ('$username','$password') ";

	$query = mysqli_query($con,$q);
	header('location:index.html');
}














 ?>