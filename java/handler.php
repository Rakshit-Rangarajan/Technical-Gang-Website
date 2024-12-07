<?php
$mysqli = mysqli_connect("remotemysql.com", "QxwpMT8O9j", "S2CgQg6iXg", "QxwpMT8O9j");

	$experience = mysqli_real_escape_string($mysqli, $_POST['experience']);
	$comment = mysqli_real_escape_string($mysqli, $_POST['comments']);
  $name= mysqli_real_escape_string($mysqli, $_POST['name']);
  $email= mysqli_real_escape_string($mysqli, $_POST['email']);
  $result = mysqli_query($mysqli, "INSERT INTO java(experience,comment,name,email) VALUES('$experience','$comment','$name','$email')");
header('Location: https://technicalgang.in');
