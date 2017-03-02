<?php
session_start();
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$_SESSION['loggedin'] = true;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>QUIZ MANIA</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!-- Custom Fonts -->
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css"> 
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'> 
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'> 
    <!-- CSS -->
    <link href="css/creative.css" rel="stylesheet"> 
    <style>
        body{
            background-image: url("images/org.jpg");
                background-repeat: no-repeat;
                background-size: 120%;
        }
		#sign-out {
			margin-left : 90%;
			text-decoration:none;
			font-size:20px;
			color:black;
		}
    </style>
</head>
<p style="color:black"><?php  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
						echo "Welcome, ".$name;
						else
						echo "Unregistered"?></p> 
<a id="sign-out" href="logout.php">LOGOUT</a>
<body id="page-top">
<form role="form" action="insert.php" id="add" method="POST">
				Subject : <br>
                    <input type="radio" value="cn" name="subject"> Computer Networks <br>
                    <input type="radio" value="mp" name="subject"> Microprocessors <br>
                    <input type="radio" value="os" name="subject"> Operating Systems <br>
                    <input type="radio" value="sooad" name="subject"> Structed Object Oriented Analysis and Design <br> <br>
				Difficulty : <br>
					<input type="radio" value="Easy" name="difficulty"> Easy <br>
					<input type="radio" value="Medium" name="difficulty"> Medium <br>
					<input type="radio" value="Hard" name="difficulty"> Hard <br> <br>
                <div>Question to be ADDED:</div>
                <input type="text" name="question" class="tea" style="width:500px" required><br><br>
                <div>Option 1:</div>
                <input type="text" name="1" class="tea" required><br><br>
                <div>Option 2:</div>
                <input type="text" name="2" class="tea" required><br><br>
                <div>Option 3:</div>
                <input type="text" name="3" class="tea" required><br><br>
                <div>Option 4:</div>
                <input type="text" name="4" class="tea" required><br><br>
                <div>CORRECT ANSWER:</div>
                <input type="text" name="ans" class="tea" required><br><br>
                <div>Explanation:</div>
                <input type="text" name="explanation" class="tea" style="width:500px" style="height:300px"><br><br>
            <button class="btn btn-primary btn-block" type="submit" style="width:100px" style="height:300px">ADD</button>
        </form>
</body>
</html>