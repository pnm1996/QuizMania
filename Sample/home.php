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
<script>
function Validateform()
{
var pass=document.getElementById("pass");
var cpass=document.getElementById("pass1");
if(pass.value!=cpass.value)
{
  alert("Passwords do not match");
  document.getElementById("pass1").focus();
  return false;
}
}
</script>
<style>
#over {
	color:black;
	margin-right:500px;
}
</style>
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">QUIZ MANIA</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#" data-toggle="modal" data-target="#Signup">SIGN UP</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#" data-toggle="modal" data-target="#Login">LOG IN </a>
                    </li>
                    <!---<li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="modal fade" id="Login">
       <div class="modal-dialog">
        <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Log In</h3>
        </div>
        <div class="modal-body">
            <form role="form" action="login.php" method="POST">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary btn-block" type="submit">Log In</button>
            </form>
        </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="Signup">
       <div class="modal-dialog">
        <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Sign Up</h3>
        </div>
        <div class="modal-body">
            <form role="form" action="register.php" onsubmit="return Validateform()" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter Name" name="name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter Email Id" name="email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Enter Password" name="password" id="pass" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirm Password" name="password1" id="pass1" required>
                </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
            </form>
        </div>
        </div>
        </div>
    </div>
    <header>
    <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">A Quiz that will blow your mind</h1>
                <hr>
                <p>Get started and know your subjects in a fun way</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">IT'S ALL YOU NEED TO ACE YOUR VIVAS</h2>
                    <hr class="light">
                    <p class="text-faded">Quiz Mania is a quiz portal with all the relevant questions you need to ace your vivas.</br></br>
                                Just 4 subjects,3 levels and 30 questions and we assure you to know your subject from the roots.</br></br>
                                Quiz Mania gives best guidance and latest material to help our users in their upcoming exams and interviews
                                Our quizzes are a popular platform for viva prep and revison.</br></br>
                                Our team has been working on improving our services hoping for the deliverable to satisfy the users.</br></br>
                                Wishing you good luck for your brilliant and bright future!</p>
                    <a class="page-scroll btn btn-default btn-xl sr-button" href="#" data-toggle="modal" data-target="#teacherlogin">Teacher Log In</a>
					<div class="modal fade" id="teacherlogin">
       <div class="modal-dialog">
        <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title" id="over">Log In</h3>
        </div>
        <div class="modal-body">
            <form role="form" action="teacher.php" method="POST">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary btn-block" type="submit">Log In</button>
            </form>
        </div>
        </div>
        </div>
    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>