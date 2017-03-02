<?php
session_start();
?>

<?php
//$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$_SESSION['email']=$email;
$connect=mysqli_connect("localhost","root","masterslave","quizmania") or die("Connection Error");
$query=mysqli_query($connect,"SELECT * FROM teachers WHERE email='$email'");
$row=mysqli_fetch_array($query);
$dbemail=$row['email'];
$dbpassword=$row['password'];
if($email==$dbemail && $password==$dbpassword)
	{
		header("location:add.php");
		$_SESSION['loggedin'] = true;
		$_SESSION['name']=$row['name'];
	}

	else{
		echo '<script type="text/javascript">alert("Incorrect email or password");</script>';
		echo '<script type="text/javascript">window.location="home.php";</script>';
	} 
/*else
{
$result=mysqli_query($connect,"INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')" );
echo '<script type="text/javascript">alert("Registration Successful");</script>';
echo '<script type="text/javascript">window.location="home.php";</script>';
} */
?>