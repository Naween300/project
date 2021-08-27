
<?php
require"header.php";
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bodyfatcal.style.css"/>
</head>
<body>

<div class="title">
<h1>Body fat Calculator</h1>
  </div>

  <div class="flex-container">
  <div class="box1">
<form action="../includes/bodyfatcalc.inc.php" method = "post">
<br>

<input type="hidden"  name="user" value="<?php $_SESSION["user"] ?>">

Weight<br><input type= "number" name="weight" placeholder="weight in pounds(lbs)">
<br>
<br>
Gender<br><br>
<input type="radio" id="male" name="gender" value="male">
<label for="male">male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">female</label><br>  


<br>
Hight<br><input type="number" name="num2" placeholder="Hight in inches(in)">
<br>
<br>
Age<br><input type="number" name="num3" placeholder="Age">
<br>
<br>
Neck<br><input type="number" name="neck" placeholder="in CM">
<br>
<br>
Waist<br><input type="number" name="waist" placeholder="in CM">
<br>
<br>
<div class="button">
<button type="submit" name="submit"class="button primary"> Calculate</button>
</div>

</form>


</div>
  </div>   
  <div class="description">The Body Fat Calculator can be used to estimate your total body fat based on specific measurements. Use the "Metric Units" tab if you are more comfortable with the International System of Units (SI). To get the best results, measure to the nearest 1/4 inch (0.5 cm). This calculation is based on the U.S. Navy method, but also includes the calculation of body fat percentage using the BMI method (both of which are outlined below).</div>
    
</body>
</html>


