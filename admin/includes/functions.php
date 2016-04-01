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
			}else{
					echo "Failed to upload";
				}
			
		}
	}
	mysqli_close($link);
}


 ?>