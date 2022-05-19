<?php
//Setup connection paramaters
$host = "127.0.0.1";
$my_user = "37271911";
$my_password = "letmein";
$my_db = "photography";

//Connect to the database
$conn = new mysqli($host, $my_user, $my_password, $my_db);


//Execute the query
$result = $conn -> query("SELECT *  FROM `votetbl`");
echo "The number of rows are: " . $result -> num_rows, "<br>";

//Display Results
while($row = $result -> fetch_assoc())
{
   echo $row ["VoteID"], " ", $row["MemberID"], " ", $row["EventID"], "<br>";
}

?>
