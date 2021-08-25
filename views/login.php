<?php 

include("./header.php");
require_once("../config/config.php");


?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<main>
<div class="row g-3 align-items-center">
    
<form action="../includes/login.inc.php" method="post">

Name: <input type= "text" name="un" placeholder="Name" >
<br>
<div class="col-auto">
<label for="inputPassword6" class="col-form-label">Password</label>
Password : <input type= "password" name="pw" placeholder="Password" >
</div>
<br>


<button type="submit" name="lg" value="login">  login </button>

</form>


</div>
</main>