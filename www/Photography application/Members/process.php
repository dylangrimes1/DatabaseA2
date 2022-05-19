<?php

//setup
$host = "127.0.0.1";
$my_user = "37271911";
$my_password = "letmein";
$my_db = "photography";

$conn = new mysqli($host, $my_user, $my_password, $my_db);

$MemberName = $_POST["MemberName"];
$MemberTelNo = $_POST["MemberTelNo"];
$MemberAddr = $_POST["MemberAddr"];

$result = $conn -> query("INSERT INTO `membertbl` (`MemberID`,`MemberName`,`MemberTelNo`,`MemberAddr`) VALUES (NULL, '".$MemberName."','".$MemberTelNo."','".$MemberAddr."')");
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
	<p>You Have Sucessfully added this user</p>
	<form action="../home.php">
    <input type="submit" value="Home" />
	</form>
</html>