<?php
	$file = fopen("data.csv","w");
	fclose($file);

header("Location:index.php");
die();
?>