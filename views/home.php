<?php
include("./header.php");
require_once("../config/config.php");
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/home.style.css"/>
  <title>Document</title>
</head>
<body>
  
  
  <div class="calculators">
    <div class="titel1">
    <h2>BMI calculator</h2> 
    </div>
    <div class="titel2">
    <h2>Calorie Calculator</h2> 
    </div>
    <div class="titel3">
    <h2>Bodyfat Calculator</h2> 
    </div>
    <div class="flex-container">
      
  <div class="box1" href="../views/bmicalc.php"><img src="../images/undraw_working_out_6psf 1.png">

  <input type="button" onclick="location.href='../views/bmicalc.php';" value=" Start now" />
</div>
  <div class="box2"><img src="../images/undraw_fitness_tracker_3033 1.png">
  <input type="button" onclick="location.href='../views/calculator.php';" value=" Start now" />
</div>
  <div class="box3"><img src="../images/undraw_Stability_ball_b4ia 1.png">
  <input type="button" onclick="location.href='../views/bodyfatcal.php';" value=" Start now" />
  
</div> 

   
</div>


  </div>
  
  
  <div class="description">A Flexible Layout must have a parent element with the display property set to flex.

Direct child elements(s) of the flexible container automatically becomes flexible items.</div>

<div class="title">
  <h1>Hi <?php echo $_SESSION ['user'];?> what do you want to calculate today?</h1>
  </div>
  


 

</body>
</html>
  




