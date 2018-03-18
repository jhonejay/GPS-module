<?php

	require_once("./includes/initialize.php");

	
		$id = $_GET["id"];
		$x = $_GET["x"];
		$y = $_GET["y"];
		//$data_array = array(); 
		$var = Vehicles::find_by_id($id);
		$var->x = $x;
		$var->y = $y;
		$var->save();
		
		echo 'success';
		//$post_data = json_encode(array('item' => $post_data), JSON_FORCE_OBJECT);
		//array_push($data_array, $var);
		header('Access-Control-Allow-Origin: *');
		//echo json_encode($var);
		//echo json_last_error_msg();
?>