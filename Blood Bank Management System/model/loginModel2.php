<?php
	require_once('db2.php');

	function getAlluser(){

		$conn = getConnection();
		$sql = "select * from patient_db";
		$result = mysqli_query($conn, $sql);
		$services = [];
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($services, $row);
		}
		return $services;
	}
	

?>