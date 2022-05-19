<?php
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
	
	<form action="submitvote.php">
    <input type="submit" value="Add Vote" />
	</form>
	
	<form action="removevote.php">
    <input type="submit" value="Remove Vote" />
	</form>
	
	<form action="readvote.php">
    <input type="submit" value="View Votes" />
	</form>
</body>
</html>