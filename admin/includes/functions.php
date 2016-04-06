<?php 

function addDrink($img, $title, $size, $case, $price, $comp, $cat, $info){
	include('connect.php');
	if($_FILES['image']["type"]== "image/jpeg" || $_FILES['image']['type']=="image/jpg") {
		$targetpath = "../images/{$img}";
		if(move_uploaded_file($_FILES['image']['tmp_name'], $targetpath)) {
			$qstring = "INSERT INTO tbl_drink VALUES (NULL, '{$title}', '{$size}', '{$case}', '{$price}', '{$img}', '{$cat}', '{$info}', '{$comp}')";
			$result = mysqli_query($link, $qstring);
			if($result) {
					redirect_to("admin_index.php");
				}
				else{
					echo "Failed to upload";
				}
		}
	}
	mysqli_close($link);
}

function addSup($img, $title, $url){
	include('connect.php');
	if($_FILES['supImage']["type"]== "image/jpeg" || $_FILES['supImage']['type']=="image/jpg"){
		$tarpath = "../images/{$img}";
		if(move_uploaded_file($_FILES['supImage']['tmp_name'], $tarpath)) {
			$string = "INSERT INTO tbl_supplier VALUES (NULL, '{$img}' , '{$title}' , '{$url}')";
			$res = mysqli_query($link, $string);
			if($res) {
				redirect_to("admin_index.php");
			}else{
				echo "Failed to Upload";
			}
		}
	}
	mysqli_close($link);
}

function addStaff($img, $name, $info){
	include('connect.php');
	if($_FILES['staffImage']["type"]== "image/jpeg" || $_FILES['staffImage']['type']=="image/jpg"){
		$tarpath = "../images/{$img}";
		if(move_uploaded_file($_FILES['staffImage']['tmp_name'], $tarpath)) {
			$string = "INSERT INTO tbl_staff VALUES (NULL, '{$img}' , '{$name}' , '{$info}')";
			$res = mysqli_query($link, $string);
			if($res) {
				redirect_to("admin_index.php");
			}else{
				echo "Failed to Upload";
			}
		}
	}
	mysqli_close($link);	
}

function addAdmin($username, $email, $password){
	include('connect.php');
	$string = "INSERT INTO tbl_user VALUES (NULL, '{$username}' , '{$password}' , '{$email}')";
	$result = mysqli_query($link, $string);
	$to = $email;
	$subj = "Login Info";
	$extra = "Reply-To: {$email}";
	$msg = "Here is your login Information.\n\n Username: {$username} \n\nPassword: {$password} \n\n Link to login: http://localhost/drinky/signin.php";
	mail($to,$subj,$msg,$extra);

	if($result) {
		redirect_to("edit_admin.php");
	}else{
		$error =  "There was an error accessing this information.  Please contact your admin.";
		return $error;			
	}
}



function search($search_term){
	include('connect.php');
	$sql = "SELECT * FROM tbl_drink WHERE drink_title LIKE '{$search_term}%' OR drink_type LIKE '{$search_term}%'";
	// echo $sql;
	$run = mysqli_query($link, $sql);
	if ($run) {
		return $run;
	}else{
		$error =  "There was an error accessing this information.  Please contact your admin.";
		return $error;			
	}
	mysqli_close($link);
}


function filterDrink($filter){
	include('connect.php');
	$filterquery = "SELECT * FROM tbl_drink WHERE drink_type  = '{$filter}'";
	// echo $filterquery;
	$run = mysqli_query($link, $filterquery);
	if ($run) {
		return $run;
	}else{
		$error =  "There was an error accessing this information.  Please contact your admin.";
		return $error;		
	}
	mysqli_close($link);
}

function deleteDrink($id){
	include("connect.php");
	$del = "DELETE FROM tbl_drink WHERE drink_id={$id}";
	$delquery = mysqli_query($link, $del);
	if($delquery){
		redirect_to("../delete_drink.php");
	}else{
		$error =  "There was an error accessing this information.  Please contact your admin.";
		return $error;		
	}
	mysqli_close($link);
}

function deleteSupp($id){
	include("connect.php");
	$del = "DELETE FROM tbl_supplier WHERE supplier_id={$id}";
	$delquery = mysqli_query($link, $del);
	if($delquery){
		redirect_to("../delete_supplier.php");
	}else{
		$error =  "There was an error accessing this information.  Please contact your admin.";
		return $error;		
	}
	mysqli_close($link);
}

function deleteStaff($id){
	include("connect.php");
	$del = "DELETE FROM tbl_staff WHERE staff_id={$id}";
	$delquery = mysqli_query($link, $del);
	if($delquery){
		redirect_to("../edit_staff.php");
	}else{
		$error =  "There was an error accessing this information.  Please contact your admin.";
		return $error;		
	}
	mysqli_close($link);	
}

function deleteAdmin($id){
	include("connect.php");
	$del = "DELETE FROM tbl_user WHERE user_id={$id}";
	$delquery = mysqli_query($link, $del);
	if($delquery){
		redirect_to("../edit_admin.php");
	}else{
		$error =  "There was an error accessing this information.  Please contact your admin.";
		return $error;		
	}
	mysqli_close($link);
}


 ?>