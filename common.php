<?php

	include_once("db.php");

	$q = "SELECT * FROM hu_angilal";
	$categories = $db->select($q);

	$q = "SELECT * FROM huwtsas";
	$products = $db->exec($q);
	$product=[];
	while($row = $products->fetch_assoc()){
		$product[]=$row;
	}

	


?>