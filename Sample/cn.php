<?php
session_start();
?>

<?php 
require 'config.php';
     $name=$_SESSION['name'];
     $difficulty=$_POST['difficulty'];
     $_SESSION['difficulty']=$difficulty;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Quiz</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .error {
                color: #B94A48;
            }
            .form-horizontal {
                margin-bottom: 0px;
            }
            .hide{display: none;}
            body{
                background-image: url("images/org.jpg");
                background-repeat: no-repeat;
                background-size: 600%;
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
                margin-left: 50%; 
                background-color: green;
                font-size: 24px;
				border-radius: 5px;
				padding:8px;
            }
            #timer{
                float: right;
                font-size: 60px;
            }
        </style>
		<script type="text/javascript">
    function countdown(minutes) {
    var seconds = 60;
    var mins = minutes
    function tick() {
        var counter = document.getElementById("timer");
        var current_minutes = mins-1
        seconds--;
        counter.innerHTML =    current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        if( seconds > 0 ) {
            setTimeout(tick, 1000);
        }     else {
 
            if(mins > 1){
               // countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst
                       setTimeout(function () { countdown(mins - 1); }, 1000); 
                }
                }
                if(seconds==0&&current_minutes==0)
                {
                    alert("time up!");
                    /*$(document).ready(function(){
                    $('input[type="submit"]').trigger('click');
                    });*/
                    document.getElementById("sub").click();
                }
            }
        tick();
        }
 
        //countdown(10);
 
    </script>

    </head>
    <body onload="countdown(10)">
	<header>
           <!-- <p id='sign-out'> <<!?php if(!empty($_SESSION['name'])){echo $_SESSION['name'];}?> </p> -->
            <div id="timer">10:00</div>
        </header>

        <div>
            <div>
                
                <form role="form" id='login' method="post" action="cn_result.php">
                    <?php 
                    $res = mysqli_query($connect,"select * from cn where difficulty='$difficulty' ORDER BY RAND()") or die("Connection Error");
                    $rows = mysqli_num_rows($res); 
                    $i=1;
                while($result=mysqli_fetch_array($res)){?>

                    <?php if((empty($result['c'])) && (empty($result['d']))){?>         
                    <div>
                    <p id="question"> <?php echo $i?>.<?php echo $result['question'];?></p>
                    <input type="radio" value="<?php echo $result['a']?>" id='ans' name='<?php echo $result['id'];?>'/> <?php echo $result['a'];?>
                   <br/>
                    <input type="radio" value="<?php echo $result['b']?>" id='ans' name='<?php echo $result['id'];?>'/> <?php echo $result['b'];?>
                    <br/>
                    </div>     

                    <?php }else if((empty($result['d']))){?>

                       <div>
                    <p id='question'><?php echo $i?>.<?php echo $result['question'];?></p>
                    <input type="radio" value="<?php echo $result['a']?>" id='ans' name='<?php echo $result['id'];?>'/> <?php echo $result['a'];?>
                    <br/>
                    <input type="radio" value="<?php echo $result['b']?>" id='ans' name='<?php echo $result['id'];?>'/> <?php echo $result['b'];?>
                    <br/>
                    <input type="radio" value="<?php echo $result['c']?>" id='ans' name='<?php echo $result['id'];?>'/> <?php echo $result['c'];?>
                    <br/>
                                                                                        
                 
                    </div>

                    <?php } else{?>
                    <div>
                    <p id='question'><?php echo $i?>.<?php echo $result['question'];?></p>
                    <input type="radio" value="<?php echo $result['a']?>" id='ans' name='<?php echo $result['id'];?>'/> <?php echo $result['a'];?>
                    <br/>
                    <input type="radio" value="<?php echo $result['b']?>" id='ans' name='<?php echo $result['id'];?>'/> <?php echo $result['b'];?>
                    <br/>
                    <input type="radio" value="<?php echo $result['c']?>" id='ans' name='<?php echo $result['id'];?>'/> <?php echo $result['c'];?>
                    <br/>
                    <input type="radio" value="<?php echo $result['d']?>" id='ans' name='<?php echo $result['id'];?>'/> <?php echo $result['d'];?>
                    <br/>
                    
                    </div>
                    <?php } $i++;} ?>
                    <button id='sub' type='submit'>Finish</button>
                </form>
            </div>
        </div>
    </body>
</html>