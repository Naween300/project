

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
    <link rel="stylesheet" href="../css/calculator.style.css"/>
</head>
<body>

<div class="title">
<h1>Calorie Calculator</h1>
  </div>

  <div class="flex-container">
  <div class="box1">
<form action="../includes/Calc.inc.php" method = "post">
<br>

<input type="hidden"  name="user" value="<?php $_SESSION["user"] ?>">

Weight <br><input type= "number" name="num1" placeholder="Weight in KG">
<br>
<br>
Gender<br><br>
<input type="radio" id="male" name="oper" value="male">
<label for="male">male</label>
<input type="radio" id="female" name="oper" value="female">
<label for="female">female</label><br>  


<br>
Hight<br><input type="number" name="num2" placeholder="Height in cm">
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

  <div class="description">The results show a number of daily calorie estimates that can be used as a guideline for how many calories to consume each day to maintain, lose, or gain weight at a chosen rate.</div>

    
</body>
</html>



