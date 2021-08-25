
<?php
include 'class-autoload.inc.php';
include 'header.php';


session_start();



$user= $_POST ["user"];
$oper = $_POST["oper"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];

$calc = new Calc($oper,$num1,$num2,$num3);



$answer = $calc->calculator();

//echo "<p> <font color=blue size='4pt'> Maintain weight :</font> <font color=red size='4pt'>$answer 100%</font></p>";

$active = $answer /100*90;
//echo "<p> <font color=blue size='4pt'> Maild weight lost :</font> <font color=red size='4pt'>$active 90%</font></p>";

$weightlost = $answer /100*79;
//echo "<p> <font color=blue size='4pt'> weight lost :</font> <font color=red size='4pt'>$weightlost 79%</font></p>";

$extremeweightlost = $answer /100*59;
//echo "<p> <font color=blue size='4pt'> Extreme weight lost :</font> <font color=red size='4pt'>$extremeweightlost 59%</font></p>";




//echo "user id " . $_SESSION["user"] . ".<br>";  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/calcinc.style.css"/>
</head>
<body>
<div class="title1">
  <h1>BMI table for adults</h1>
  </div>
  <div class="flex-container">
      <div class="box1">
      <h1>Hi, <?php echo $_SESSION ['user'];?></h1>
  <h1>Here is your calorie breakdown to</h1>
<h1> Maintain weight  <?php echo  $answer ?> calories 100%</h1>
<h1> Mild weight lost  <?php echo $active?>calories 90%</h1>
<h1> Weight lost  <?php echo $weightlost ?>calories 79%</h1>
<h1> Extreme weight lost <?php echo $extremeweightlost ?>calories 59%</h1>
<input type="button" onclick="location.href='../views/calculator.php';" value="Try again" />  
      </div>
  <div class="description1">The results show a number of daily calorie estimates that can be used as a guideline for how many calories to consume each day to maintain, lose, or gain weight at a chosen rate.</div>
  
  </div>
  
  </div>
  <div class="description2">
  Please consult with a doctor when losing 1 kg or more per week since it requires that you consume less than the minimum recommendation of 1,500 calories a day.

  </div>
  <div class="title2">
  <h1>How Many Calories Do You Need?</h1>
  </div>
  <div class="description3">
  Many people seek to lose weight, and often the easiest way to do this is to consume fewer calories each day. But how many calories does the body actually need in order to be healthy? This largely depends on the amount of physical activity a person performs each day, and regardless of this, is different for all people – there are many different factors involved, not all of which are well-understood or known.

Some factors that influence the number of calories a person needs to remain healthy include age, weight, height, sex, levels of physical activity, and overall general health. For example, a physically active 25-year-old male that is 6 feet in height requires considerably higher calorie intake than a 5-foot-tall, sedentary 70-year-old woman. Though it differs depending on age and activity level, adult males generally require 2,000-3000 calories per day to maintain weight while adult females need around 1,600-2,400 according to the U.S Department of Health.

The body does not require many calories to simply survive. However, consuming too few calories results in the body functioning poorly, since it will only use calories for functions essential to survival, and ignore those necessary for general health and well-being. Harvard Health Publications suggests women get at least 1,200 calories and men get at least 1,500 calories a day unless supervised by doctors. As such, it is highly recommended that a person attempting to lose weight monitors their body's caloric necessities and adjusts them as necessary to maintain its nutritional needs.
  </div>
</body>
</html>



