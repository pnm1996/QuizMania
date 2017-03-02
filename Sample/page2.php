<?php
session_start();
$name=$_SESSION['name'];
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>QUIZ MANIA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="page2.css" />

	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.html" class="logo"> QUIZ MANIA</a> 
								
								<a id="sign-out" href="logout.php">LOGOUT</a>
								<!--?php
								if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
								{	
								 <a id="sign-out" href=""> 	echo "Welcome, " . $_SESSION['name']</a>;
								} 
								?> -->
								<p id="sign-out"><?php 
								if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
								echo "Welcome, ".$name;
								else
								echo "Unregistered"?>&nbsp;&nbsp;&nbsp;</p>  
						</div>
					</header> 

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>SELECT YOUR SUBJECT</h1>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/mp2.jpg" alt="" />
									</span>
									<a href="page3.php#m">
										<h2>MICROPROCESSORS</h2>
										<div class="content">
											<p>A microprocessor is a computer processor which incorporates the functions of a computer's central processing unit (CPU) on a single integrated circuit (IC),or at most a few integrated circuits.</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/cn2.jpg" alt="" />
									</span>
									<a href="page3.php#c">
										<h2>COMPUTER NETWORKS</h2>
										<div class="content">
											<p>A computer network or data network is a telecommunications network which allows computers to exchange data.</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<a href="page3.php#s">
										<h2>SOOAD</h2>
										<div class="content">
											<p>Object-oriented analysis and design (OOAD) is a popular technical approach for analyzing, designing an application, system, or business by applying the object-oriented paradigm and visual modeling throughout the development life cycles to foster better stakeholder communication and product quality.</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/os.jpg" alt="" />
									</span>
									<a href="page3.php#o">
										<h2>OPERATING SYSTEMS</h2>
										<div class="content">
											<p>An operating system is system software that manages computer hardware and software resources and provides common services for computer programs.</p>
										</div>
									</a>
							</section>
						</div>
					</div>

			</div>
		<!--	<form role="form" action="demo.php" id="sooad" method="POST">
				<div class="form-group">
					<input type="radio" class="form-control" value="Easy" name="difficulty" required> Easy
				</div>
				<div class="form-group">
					<input type="radio" class="form-control" value="Medium" name="difficulty" required> Medium
				</div>
				<div class="form-group">
					<input type="radio" class="form-control" value="Hard" name="difficulty" required> Hard
				</div>
		<div class="modal-footer">
			<button class="btn btn-primary btn-block" type="submit">Log In</button>
			</form> -->
	</body>
</html>