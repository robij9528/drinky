<?php 

function logIn($username, $password){
	require_once('connect.php');
	$username = mysqli_real_escape_string($link, $username);
	$password = mysqli_real_escape_string($link, $password);
	$logstring = "SELECT * FROM tbl_user WHERE user_name= '{$username}' AND user_pass= '{$password}'";
	$userset = mysqli_query($link, $logstring);

	if(mysqli_num_rows($userset)) {
		$found_user = mysqli_fetch_array($userset, MYSQLI_ASSOC);
		$id = $found_user['user_id'];
		$_SESSION['user_id']=$id;
		$_SESSION['user_name'] = $found_user['user_name'];
		redirect_to("admin/admin_index.php");
	}else{
		$message = "Username or Password is incorrect please try again";
		return $message;
	}
	mysql_close($link);
}


 ?>