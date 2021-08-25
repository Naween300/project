<?php 
declare(strict_types =1);
include 'include/class-autoload.inc.php';
session_start();
?>

<?php
require"header.php";

echo "user id " . $_SESSION["user"] . ".<br>";     
       
?>


<main>
    <h1>This is Body fat Calculator</h1>

<div>
<form action="../includes/bodyfatcalc.inc.php" method = "post">

<input type="hidden"  name="user" value="<?php $_SESSION["user"] ?>">

weight:<input type= "number" name="weight" placeholder="weight in pounds(lbs)">
<br>
<br>
Gender:
<input type="radio" id="male" name="gender" value="male">
<label for="male">male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">female</label><br>  


<br>
Hight:<input type="number" name="num2" placeholder="Hight in inches(in)">
<br>
<br>
Age:<input type="number" name="num3" placeholder="Age">
<br>
<br>
Neck:<input type="number" name="neck" placeholder="in CM">
<br>
<br>
Waist:<input type="number" name="waist" placeholder="in CM">
<br>
<br>
<button type="submit" name="submit"> Calculate</button>

</form>


</div>

</main>

