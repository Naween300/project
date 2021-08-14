<?php 

include("./header.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Signupform1.style.css"/>
    <title>Document</title>
    
</head>
<body>
<main>
    
<div class="hero-image">
<div class="form">
<h1>Register to find out your
calorie budget !</h1>
<div class="input">
<form action="../includes/Signup.inc.php" method="post">
Name <br> <input type= "text" name="un" placeholder="Name" class="name">
<br>
<br>
E-mail <br> <input type= "email" name="email" placeholder="email"class="name" >
<br>
<br>
Password <br> <input type= "password" name="pw" placeholder="Password" class="name">
<br>
<br>
Repeat Password<br><input type= "password" name="rpw" placeholder="Repeat password"class="name" >
<br>
<br>
<div class="action">
<button type="submit" name="submit" value="signup" class="button">  Register </button>
</div>


</form>
</div>



</div>

</div>

</main>
    
</body>
</html>
