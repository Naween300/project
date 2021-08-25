
<?php
include 'class-autoload.inc.php';
include 'header.php';


session_start();



$user= $_POST ["user"];
$gender = $_POST["gender"];
$weight = $_POST["weight"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];
$neck = $_POST["neck"];
$waist = $_POST["waist"];

$bodyfatCalc = new bodyfatCalc ($gender,$weight,$num2,$num3,$neck,$waist);



$answer = $bodyfatCalc->bodyfatCalc();

//echo "<p> <font color=blue size='4pt'> Maintain weight :</font> <font color=red size='4pt'>$answer %</font></p>";

$active = $answer /100*90;
//echo "<p> <font color=blue size='4pt'> Maild weight lost :</font> <font color=red size='4pt'>$active 90%</font></p>";

$weightlost = $answer /100*79;
//echo "<p> <font color=blue size='4pt'> weight lost :</font> <font color=red size='4pt'>$weightlost 79%</font></p>";

$extremeweightlost = $answer /100*59;
//echo "<p> <font color=blue size='4pt'> Extreme weight lost :</font> <font color=red size='4pt'>$extremeweightlost 59%</font></p>";






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bodyfatcalcinc.style.css"/>
</head>
<body>
<div class="flex-container">
  <div class="box1">
<h1>Hi, <?php echo $_SESSION ['user'];?></h1>
<h1> Here Is Your Body Fat percentage </h1>
<h1> <?php echo  $answer ?>%</h1>
<input type="button" onclick="location.href='../views/bmicalc.php';" value="Try again" />
  </div>
</div>
<div class="title2">
  <h1>Body Fat, Overweight, and Obesity</h1>
  </div>
  <div class="description3">
  The scientific term for body fat is "adipose tissue." Adipose tissue serves a number of important functions. Its primary purpose is to store lipids from which the body creates energy. In addition, it secretes a number of important hormones, and provides the body with some cushioning as well as insulation.1

Body fat includes essential body fat and storage body fat. Essential body fat is a base level of fat that is found in most parts of the body. It is necessary fat that maintains life and reproductive functions. The amount of essential fat differs between men and women, and is typically around 2-5% in men, and 10-13% in women. The healthy range of body fat for men is typically defined as 8-19%, while the healthy range for women is 21-33%. While having excess body fat can have many detrimental effects on a person's health, insufficient body fat can have negative health effects of its own, and maintaining a body fat percentage below, or even at the essential body fat percentage range is a topic that should be discussed with a medical professional.

Storage fat is fat that accumulates in adipose tissue, be it subcutaneous fat (deep under the dermis and wrapped around vital organs) or visceral fat (fat located inside the abdominal cavity, between organs), and references to body fat typically refer to this type of fat. While some storage fat is ideal, excess amounts of storage fat can have serious negative health implications.

Excess body fat leads to the condition of being overweight and eventually to obesity given that insufficient measures are taken to curb increasing body fat. Note that being overweight does not necessarily indicate an excess of body fat. A person's body weight is comprised of multiple factors including (but not limited to) body fat, muscle, bone density, and water content. Thus, highly muscular people are often classified as overweight.

The rate at which body fat accumulates is different from person to person and is dependent on many factors including genetic factors as well as behavioral factors such as lack of exercise and excessive food intake. Due to varying factors, it can be more difficult for certain people to reduce body fat stored in the abdominal region. However, managing diet and exercise has been shown to reduce stored fat. Note that both women and men store body fat differently and that this can change over time. After the age of 40 (or after menopause in some cases for women), reduced sexual hormones can lead to excess body fat around the stomach in men, or around the buttocks and thighs of women.
  </div>
  <div class="description">The Body Fat Calculator can be used to estimate your total body fat based on specific measurements. Use the "Metric Units" tab if you are more comfortable with the International System of Units (SI). To get the best results, measure to the nearest 1/4 inch (0.5 cm). This calculation is based on the U.S. Navy method, but also includes the calculation of body fat percentage using the BMI method (both of which are outlined below).</div>
</body>
</html>



