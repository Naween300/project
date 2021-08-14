
<?php
include 'class-autoload.inc.php';
include 'header.php';





$oper = $_POST["oper"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];

$calc = new Calc($oper,$num1,$num2,$num3);



$answer = $calc->calculator();
echo "<p> <font color=blue size='4pt'> Maintain weight :</font> <font color=red size='4pt'>$answer 100%</font></p>";

$active = $answer /100*90;
echo "<p> <font color=blue size='4pt'> Maild weight lost :</font> <font color=red size='4pt'>$active 90%</font></p>";

$weightlost = $answer /100*79;
echo "<p> <font color=blue size='4pt'> weight lost :</font> <font color=red size='4pt'>$weightlost 79%</font></p>";

$extremeweightlost = $answer /100*59;
echo "<p> <font color=blue size='4pt'> Extreme weight lost :</font> <font color=red size='4pt'>$extremeweightlost 59%</font></p>";



require_once("../config/config.php");

if(isset($_POST["submit"])){
    $user= $_POST ["user"];
    $num1 = $_POST["num1"];
    $oper = $_POST["oper"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];


    $sqluser = "insert into users (num1,oper, num2,num3) values ('$num1','$oper','$num2','$num3')";
    if(mysqli_query($connect,$sqluser)){
        header('http://localhost/project/includes/Calc.inc.php');


        exit;
    }
    else{ 
        header('Location: http://localhost/project/includes/Calc.inc.php');
        exit;
    
}
  
}



?>




