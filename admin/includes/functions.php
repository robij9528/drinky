<?php 

function addDrink($img, $title, $size, $case, $price, $comp, $cat, $info){
	include('connect.php');
	if($_FILES['image']["type"]== "image/jpeg" || $_FILES['image']['type']=="image/jpg") {
		$targetpath = "../images/{$img}";
		if(move_uploaded_file($_FILES['image']['tmp_name'], $targetpath)) {
			$qstring = "INSERT INTO tbl_drink VALUES (NULL, '{$title}', '{$size}', '{$case}', '{$price}', '{$img}', '{$cat}', '{$info}', '{$comp}')";
			$result = mysqli_query($link, $qstring);
			if($result) {
				// $qstring2 = "SELECT * FROM tbl_drink ORDER BY drink_id DESC LIMIT 1";
				// $result2 = mysqli_query($link, $qstring2);
				// $row = mysqli_fetch_array($result2);
				// $lastID = $row['drink_id'];
				// $qstring3 = "INSERT INTO tbl_l_dc VALUES(NULL,{$lastID},{$cat})";
				// $result3 = mysqli_query($link, $qstring3);
				if($result3){
					redirect_to("admin_index.php");
				}else{
					echo "Failed to upload";
				}
			}
		}
	}
	mysqli_close($link);
}

function search($search_term){
	include('connect.php');
	$sql = "SELECT * FROM tbl_drink WHERE drink_title = '{$search_term}' OR drink_type = '{$search_term}'";
	echo $sql;
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
	echo $filterquery;
	$run = mysqli_query($link, $filterquery);
	if ($run) {
		return $run;
	}else{
		$error =  "There was an error accessing this information.  Please contact your admin.";
		return $error;		
	}
	mysqli_close($link);
}


 ?>