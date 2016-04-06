<?php 

	function redirect_to($direct) {
		if($direct != NULL) {
			header("Location: {$direct}"); //redirector in php
			exit;
		}
	}

	function getAll($tbl) {
		include('connect.php');
		$queryAll = "SELECT * FROM {$tbl}";
		$runAll = mysqli_query($link, $queryAll);
		if($runAll){
			return $runAll;
		}else{
			$error =  "There was an error accessing this information.  Please contact your admin.";
			return $error;
		}
	}


	function getSingle($tbl, $col, $id){
		include('connect.php');
		$querySingle = "SELECT * FROM {$tbl} WHERE {$col} = {$id}";
		$run = mysqli_query($link, $querySingle);
		if($run){
			return $run;
		}else{
			$error =  "There was an error accessing this information.  Please contact your admin.";
			return $error;			
		}
	}

 ?>