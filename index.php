<?php 

	require_once('test.php');
	
	$obj = new test();
	$content = $obj->getContent();
	
	echo "testovacia aplikacia <br />";
	echo "Novy update <br />";
	
	echo $content . ' test';
	
	
	
?>