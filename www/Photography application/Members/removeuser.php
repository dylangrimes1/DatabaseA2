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

	<form method="post" action="removeuserprocess.php">
    <select name="removeusers" id="removeusers">
    <?php
        $result = $conn -> query("SELECT * FROM membertbl");
        while($row = $result->fetch_assoc()) {
            echo "<option>".$row["MemberName"]."</option>";
        }
    ?>
	<input type="submit" value="submit">
    </select>
</form>
  </body>
</html>
