

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
    <link rel="stylesheet" href="../css/bmicalc.style.css"/>
</head>
<body>
<div class="title">
<h1>BMI Calculator</h1>
  </div>

<div class="flex-container">
<div class="box1">

<form action="../includes/bmiCalc.inc.php" method = "post">
<br>

<input type="hidden"  name="user" value="<?php $_SESSION["user"] ?>">

Weight<br><input type= "number" name="weight" placeholder="weight in pounds(lbs)">
<br>
<br>
Gender<br> <br>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label><br>  


<br>
Hight<br><input type="number" name="num2" placeholder="Hight in inches(in)">
<br>
<br>
Age<br><input type="number" name="num3" placeholder="Age">
<br>
<br>
<div class="button">
<button type="submit" name="submit"class="button primary"> Calculate</button>
</div>


</form>

  </div>
</div>
<div class="description">The Body Mass Index (BMI) Calculator can be used 
    to calculate BMI value and corresponding weight status while 
    taking age into consideration. Use the "Metric Units" tab
     for the International System of Units or the "Other Units" 
     tab to convert units into either US or metric units. Note 
     that the calculator also computes the Ponderal Index in
      addition to BMI, both of which are discussed below in detail.</div>

</body>
</html>













