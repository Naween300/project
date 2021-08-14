<?php 
declare(strict_types =1);
include 'include/class-autoload.inc.php';
?>

<?php
require"header.php";

session_start();
echo "User name " . $_SESSION["user"] . ".<br>";

                
?>





<main>

<div>
<form action="../includes/Calc.inc.php" method = "post">

<input type="hidden"  name="user" value="<?php $_SESSION["user"]; ?>">

weight:<input type= "number" name="num1" placeholder="weight">
<br>
<br>
Gender:
<input type="radio" id="male" name="oper" value="male">
<label for="male">male</label>
<input type="radio" id="female" name="oper" value="female">
<label for="female">female</label><br>  


<br>
Hight:<input type="number" name="num2" placeholder="Hight">
<br>
<br>
Age:<input type="number" name="num3" placeholder="Age">
<br>
<br>
<button type="submit" name="submit">  Calculate</button>

</form>


</div>

</main>

