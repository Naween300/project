
<?php
include 'class-autoload.inc.php';
include 'header.php';


session_start();



$user= $_POST ["user"];
$gender = $_POST["gender"];
$weight = $_POST["weight"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];

$bmicalc = new bmiCalc($gender,$weight,$num2,$num3);



$bmi = $bmicalc->bmicalc();

if ($bmi <= 18.5) {
    $output = "Under Weight";
    } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
    $output = "Normal Weight";
    } else if ($bmi > 24.9 AND $bmi<=29.9) {
    $output = "Over Weight";
    } else if ($bmi > 30.0) {
    $output = "OBESE";
    }
    /*echo"";
    echo "Your BMI value is " . $bmi . " and you are : "; 
    echo "$output";
    return $bmi;*/   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bmicalcinc.styles.css"/>
</head>
<body>
<div class="flex-container">
  <div class="box1">
<h1>Hi, <?php echo $_SESSION ['user'];?></h1>
<h1> Your BMI value is <?php echo  $bmi ?></h1>
<h1> You are : <?php echo $output?></h1>
<input type="button" onclick="location.href='../views/bmicalc.php';" value="Try again" />
  </div>
  
</div>
<div class="description">The Body Mass Index (BMI) Calculator can be used 
    to calculate BMI value and corresponding weight status while 
    taking age into consideration. Use the "Metric Units" tab
     for the International System of Units or the "Other Units" 
     tab to convert units into either US or metric units. Note 
     that the calculator also computes the Ponderal Index in
      addition to BMI, both of which are discussed below in detail.</div>


      <div class="title">
  <h1>BMI table for adults</h1>
  </div>
  <div class="description1">This is the World Health Organization's (WHO) recommended body weight based on BMI values for adults. It is used for both men and women, age 18 or older</div>
      
    
  <div class="table">
  <img src="../images/Table.png">
  </div>

</body>
</html>



