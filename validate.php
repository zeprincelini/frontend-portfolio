<?php

	$nameError = "";
	
	if(isset($_POST["submit"])){
		$name= $_POST["name"];
		$email= $_POST["email"];
		$phone= $_POST["phone"];
		$job= $_POST["request"];
		
		if(empty($name)){
			$nameError = "Name is required";
		}else{
			$nameSuccess= user_validation($name);
		}
		
		function user_validation($data){
			return $data;
		}
	}
?>