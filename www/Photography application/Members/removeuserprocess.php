<?php

//setup
$host = "127.0.0.1";
$my_user = "37271911";
$my_password = "letmein";
$my_db = "photography";

$conn = new mysqli($host, $my_user, $my_password, $my_db);

$MemberName = $_POST["removeusers"];

$result = $conn -> query("DELETE FROM `membertbl` WHERE `MemberName` = '".$MemberName."'");

?>

<html>
<head>
<link rel="stylesheet" href="stylesheet.css">
</head>
	<body onload="page_init()" style="background-color:#EBE5E0">
	<div class="navbar">
    <div class="header">
    <h1>Taw and Torridge Camera Club</h1>
	</div><br>
	<p>You Have Sucessfully removed this user</p>
	<form action="../home.php">
    <input type="submit" value="Home" />
	</form>
</html>