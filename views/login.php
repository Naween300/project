<?php 

include("./header.php");
require_once("../config/config.php");



?>


<main>
<div>
<form action="../includes/login.inc.php" method="post">
Name: <input type= "text" name="un" placeholder="Name" >
<br>

Password : <input type= "password" name="pw" placeholder="Password" >
<br>


<button type="submit" name="lg" value="login">  login </button>

</form>


</div>
</main>