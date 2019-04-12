<?php
	include_once('utils/headers.php');
	
	$res = array(
		'online' => true,
		'message' => ''
	);
	
	// $res = array(
		// 'online' => false,
		// 'message' => 'Game is updating, please try again later.'
	// );

	echo json_encode($res);
?>