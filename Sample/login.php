<?php
session_start();
?>

<?php
$email=$_POST['email'];
$password=$_POST['password'];
// $password=md5($password);
/*if(empty($name) || empty($email) || empty($password)){
	echo '<script type="text/javascript">alert("Please fill all the fields");</script>';
	echo '<script type="text/javascript">window.location="home.php";</script>';
} */

//if($email && $password){
	$connect=mysqli_connect("localhost","root","masterslave","quizmania") or die("Connection Error");
	$query=mysqli_query($connect, "SELECT * FROM users WHERE email='$email'");
	$numrows=mysqli_num_rows($query);
	$row=mysqli_fetch_array($query);
	$dbemail=$row['email'];
	$dbpassword=$row['password'];
	$dbname=$row['name'];
	
    
	if($email==$dbemail && $password==$dbpassword)
	{
		header("location:page2.php");
		$_SESSION['loggedin'] = true;
		$_SESSION['name']=$row['name'];
	//	$_SESSION['email']=$row['email'];
	//	$_SESSION['password']=$row['password'];
	//'<script type="text/javascript">alert("Login Successful")</script>'
//		echo  "Welcome " .$dbname;
	//	echo '<script type="text/javascript">window.location="user.php";</script>';
	}

	else{
		echo '<script type="text/javascript">alert("Incorrect email or password");</script>';
		//header("location:home.php");
		echo '<script type="text/javascript">window.location="home.php";</script>';
	} 
?>