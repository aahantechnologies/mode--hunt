<?php 
include('connection.php');
//checkmail.php

// $con= mysqli_connect('localhost','root','','countrystate')or die;

if (isset($_GET['email'])) {

	$email=$_GET['email'];

	$sql=mysqli_query($con,'SELECT * FROM register WHERE email ="'.$email.'" ');

	if (mysqli_num_rows($sql)>0) {
					echo "<p style='color:red'>This Email Is Avalible Please Insert Other One</p>";
		}

	else{
					// echo "<p style='color:green'>ok</p>";	
		}

}

 ?>