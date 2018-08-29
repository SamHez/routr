<?php 
	# split the path by '/'
	$params 	 = split("/", $_SERVER['REQUEST_URI']);
	switch ($params[1]) {

	 	case "review":
	 		require('review.php');
	 	break;
	 	default;
	 	require('404.php');
	 	break;

	 } 



 ?>