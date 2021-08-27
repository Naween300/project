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

<div class="title">
<h1>Register to find out how healthy you are !</h1>
  </div>   
<div class="flex-container">
<div class="box1">


    
<form action="../includes/Signup.inc.php" method="post">
<br>
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
<div class="button">
<button type="submit" name="submit"class="button primary"> Register</button>
</div>
<br>


</form>


</div>

</div>
<div class="description">We are fitnessmake.com. your transformation is our passion.We are your personal trainer, your nutritionist,your supplement expert,your lifting partner,your support group.We provide the technology, tools and products you need to burn fat , build muscle and become your best self.</div>

    
</body>
</html>
