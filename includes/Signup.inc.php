<?php
require_once("../config/config.php");

if(isset($_POST["submit"])){
    $un = $_POST["un"];
    $email = $_POST["email"];
    $pw = $_POST["pw"];
    $rpw = $_POST["rpw"];

    $sqluser = "insert into users (user_name,e_mail, password,repeat_password) values ('$un','$email','$pw','$rpw')";
    if(mysqli_query($connect,$sqluser)){
        header('Location: http://localhost/project/views/login.php');


        exit;
    }
    else{ 
        header('Location: http://localhost/project/views/signupform1.php');
        exit;


    }
    
}

?>
