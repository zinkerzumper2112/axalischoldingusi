<?php
include_once("inc/db_connect.php");
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {	
	$updateField='';
	if(isset($input['name'])) {
		$updateField.= "name='".$input['name']."'";
	} else if(isset($input['gender'])) {
		$updateField.= "gender='".$input['gender']."'";
	} else if(isset($input['address'])) {
		$updateField.= "address='".$input['address']."'";
	} else if(isset($input['age'])) {
		$updateField.= "age='".$input['age']."'";
	}
	if($updateField && $input['id']) {
		$sqlQuery = "UPDATE developers SET $updateField WHERE id='" . $input['id'] . "'";	
		mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));		
	}
}


