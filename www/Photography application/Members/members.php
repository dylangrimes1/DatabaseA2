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
	
	<form action="adduser.php">
    <input type="submit" value="Add Member" />
	</form>
	
	<form action="readusers.php">
    <input type="submit" value="View Members" />
	</form>
	
	<form action="removeuser.php">
    <input type="submit" value="Remove Member" />
	</form>
</body>
</html>