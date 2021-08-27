<?php 

include("./header.php");
require_once("../config/config.php");
;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.style.css"/>
</head>
<body>
    
<div class="title">
<h1>Registration Successful</h1>
<h1>Please login</h1>
  </div>

  <div class="flex-container">
  <div class="box1">
    
    <form action="../includes/login.inc.php" method="post">
    <br>
    Name<br><br><input type= "text" name="un" placeholder="Name" >
    <br>
    <br>
    Password <br><br> <input type= "password" name="pw" placeholder="Password" >
    </div>
    <br>
    
    <div class="button">
<button type="submit" name="lg"class="button primary" value="login"> Log in</button>
</div>
    
    
    </form>
    
    
    </div>  
</div>    
<div class="description">We are fitnessmake.com. your transformation is our passion.We are your personal trainer, your nutritionist,your supplement expert,your lifting partner,your support group.We provide the technology, tools and products you need to burn fat , build muscle and become your best self.</div>
    
</body>
</html>

