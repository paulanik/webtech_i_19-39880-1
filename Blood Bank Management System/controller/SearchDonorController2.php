<?php

require_once 'Model/model2.php';

if (isset($_POST['findDonor'])) {
	
    try {
    	
    	$allSearchedProducts = searchDonor($_POST['name']);
    	require_once 'SearchedResult2.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}