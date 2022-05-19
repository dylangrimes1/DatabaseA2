<?php

//setup
$host = "127.0.0.1";
$my_user = "37271911";
$my_password = "letmein";
$my_db = "photography";

//connect to database
$conn = new mysqli($host, $my_user, $my_password, $my_db);
?>

<html>
<head>
<link rel="stylesheet" href="../stylesheet.css">
</head>
    <body onload="page_init()" style="background-color:#EBE5E0">
	<div class="navbar">
    <div class="header">
    <h1>Taw and Torridge Camera Club</h1>
    </div>
	
	<form method="post" action="process.php">
	<input placeholder="Name:" type="text" id="MemberName" name="MemberName"><br>
	<input placeholder="Telephone:" type="text" id="MemberTelNo" name="MemberTelNo"><br>
	<input placeholder="Address:" type="text" id="MemberAddr" name="MemberAddr"><br>
	<input type="submit" value="Register User">
	</form>
  </body>
</html>
