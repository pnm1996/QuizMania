<?php
session_start();
?>

<?php 
require 'config.php';
    $right_answer=0;

   $keys=array_keys($_POST);
   $order=join(",",$keys);
	
   $response=mysqli_query($connect,"select id,answer from os where id IN($order)")  or die("Connection Error");

   while($result=mysqli_fetch_array($response)){
       if($result['answer']==$_POST[$result['id']]){
               $right_answer++;
           }
   }
   $name=$_SESSION['name'];  
   $difficulty=$_SESSION['difficulty'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Result</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
        <style>
        body{
                background-image: url("images/org.jpg");
               background-repeat: no-repeat; 
                background-size: 500%;
            }
        #question{
        font-family: "Times New Roman";
        color: black;
        text-decoration: underline;
        font-weight: bold;
        font-size: 25px;
      }
        #ans{
        font-family: "Times New Roman";
        color: black;
        font-style: italic;
        font-size: 20px;  
      }
      #sub{
                margin-left: 45%; 
                background-color: green;
                font-size: 24px;
				border-radius: 5px;
				padding:8px;
            }
		#sign-out {
			margin-left : 90%;
			text-decoration:none;
			font-size:20px;
		}
        </style>
    </head>
    <body>
        <div>
			<a id="sign-out" href="logout.php">LOGOUT</a>
								<!--?php
								if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
								{	
								 <a id="sign-out" href=""> 	echo "Welcome, " . $_SESSION['name']</a>;
								} 
								?> 
								<p id="sign-out"><<!?php 
								if(!empty($_SESSION['name']))
								echo "".$name;
								else
								echo "Unregistered"?>&nbsp;&nbsp;&nbsp;</p> -->
          <!--  <p id='sign-out'>
                 <!--?php 
                if(!empty($_SESSION['name'])){
                    echo $_SESSION['name'];
                }?>
            </p> -->
        </div>
        <div>
           <div> 
                  <div> 
                        <h1>Score : <span class='answer'><?php echo $right_answer;?></span>/30</h1>
                    <?php if($right_answer<10) { ?>
                    <h1> You need to study hard. </h1>
                    <?php } else if($right_answer<20) { ?>
                    <h1> Good but you can do better. </h1>
                    <?php } else if($right_answer<30) { ?>
                    <h1> Very good,you just need some brushing up. </h1>
                    <?php } else { ?>
                    <h1> Excellent!</h1>
                    <?php } ?>
                   </div>
            </div>    
        </div>
                <?php 
                    $res = mysqli_query($connect,"select answer,explanation,question from os where difficulty='$difficulty' ORDER BY RAND()") or die("Connection Error");
                  //  $rows = mysqli_num_rows($res); 
                    $i=1;
                while($result=mysqli_fetch_array($res))
                { ?>     
                    <?php if(!(empty($result['explanation']))) { ?>
                    <div>
                    <p class='questions' id='question'> <?php echo $i?>. <?php echo $result['question'];?></p>
                    <p id='ans'>Answer : <?php echo $result['answer'];?></p>
                    <p id='ans'>Explanation : <?php echo $result['explanation'];?></p>
                    </div> 
                    <?php } 
                    else{ ?>
                    <div>
                    <p class='questions' id='question'> <?php echo $i?>. <?php echo $result['question'];?></p>
                    <p id='ans'>Answer : <?php echo $result['answer'];?></p>
                    </div>
                    <?php } 
                    $i++;} ?>
        
                    <a href="page2.php" id='sub'>Take new Quiz</a>                   
    </body>
</html>