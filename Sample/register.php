<?php
session_start();
?>

<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$password1=$_POST['password1'];

/*if($password!=$password1)
{
		echo '<script type="text/javascript">alert("Incorrect password");</script>';
		echo '<script type="text/javascript">window.location="home.php";</script>';
}
else
{ */
$connect=mysqli_connect("localhost","root","masterslave","quizmania") or die("Connection Error");
$query=mysqli_query($connect, "SELECT * FROM users WHERE email='$email'");
$row=mysqli_fetch_array($query);
$dbemail=$row['email'];
if($email==$dbemail)
{
		echo '<script type="text/javascript">alert("Email Id already exists,Please register again");</script>';
	//	echo '<script type="text/javascript">window.location="home.php";</script>';
}
else
{
$result=mysqli_query($connect,"INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')" );
echo '<script type="text/javascript">alert("Registration Successful");</script>';
//header("Location: home.php");
echo '<script type="text/javascript">window.location="home.php";</script>';
}
// header("Location: login.html");
?>