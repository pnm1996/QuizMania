<?php
session_start();
$email=$_SESSION['email'];
?>

<?php
require 'config.php';
$difficulty=$_POST['difficulty'];
$question=$_POST['question'];
$a=$_POST['1'];
$b=$_POST['2'];
$c=$_POST['3'];
$d=$_POST['4'];
$answer=$_POST['ans'];
$explanation=$_POST['explanation'];
$subject=$_POST['subject'];

$connect=mysqli_connect("localhost","root","masterslave","quizmania") or die("Connection Error");
//echo " ".$name;
$result=mysqli_query($connect,"INSERT INTO $subject (`question`,`a`,`b`,`c`,`d`,`answer`,`explanation`,`difficulty`) VALUES ('$question','$a','$b','$c','$d','$answer','$explanation','$difficulty')" );
header("location:add.php");
?>
