<?php

	require_once('../config/config.php');
	session_start();


	if(isset($_POST["lg"])){
		$un = $_POST["un"];
		$pw = $_POST["pw"];
		
		
		$sqluser = "select * from `users` where `user_name`='$un' and `password` = '$pw'";
		$result = mysqli_query($connect,$sqluser);
		if(mysqli_num_rows($result)==1){

			
			while($row = mysqli_fetch_assoc($result)){
				$uid=$row['uid'];
			}
			
			
			session_start();
			$_SESSION["user"] = $un;
			
			
			
			
			if($status == 0){
				header("Location:../views/home.php");
			}
			/*elseif($status ==1){
				header("Location: ../views/admin.php");
			}*/
						
			
		}
		else{
			echo "<script>
				   alert('Sorry you do not have an account. Please Sign up!!');
				   window.location.href='../views/index.php';
				  </script>";
			
		}
	}



?>