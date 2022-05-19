<?php

include '../Configs/Config.php';

$uname = $_POST['username'];
$pword = $_POST['password'];
echo $uname;
echo $pword;

if($uname == "37271911" && $pword == "letmein")
{
	header('Location: ../home.php');
}
else {
  {
    echo "You have entered the wrong password";
    header('Location: ../login.php');
  }
}
?>
