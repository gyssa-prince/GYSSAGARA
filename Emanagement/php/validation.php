<?php 
    session_start();
    include_once "connections.php";
	
    $email = mysqli_real_escape_string($conn, $_POST['names']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
	     if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM manageraccount WHERE email = '{$email}'");
		if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
			$user_pass = md5($password);
			$encryp_pass = $row['password'];}
		 if($user_pass === $encryp_pass){
		 $_SESSION['manager'] = $row['email'];
		 header('location:home.php');
		}
		else{
		header('location:../login.php');
		}
		}
		
		?>