<?php 

require_once ('Model/model2.php');

function fetchAllinfo($tableName){
	return showAllData($tableName);

}

function fetchApplyInfo($name){
	return showData($name);

}

 ?>