<?php 
	$data = preg_replace('/<.*?>/', "", $_POST['legal']);
	echo $data;
?> 
