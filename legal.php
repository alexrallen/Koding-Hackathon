<?php 
	$data = preg_replace('/<.*?>/', "", $_POST['legal']);
	
	
	//Data!
	
	$words = ["forbidden","lawsuit","penalty","legal action","may not","forced","obligated","deny"];
	
	$mar = ["Look Here!"];
	
	//echo $_POST['legal'];
	

	$data = "";
	
	$file = fopen("EULA.txt","r") or exit("Unable to open file!");
	while(!feof($file))
	{
		$data .= fgets($file);
	}
	
	
	foreach($words as $val) {
		preg_match_all('/[^(\n|.)]*\b('.$val.')\b[^.]*?[\n|.]/', $data, $match);
		
		

		$mar = array_merge($mar, $match[0]);	
	}
	
	//echo(serialize($mar));
	
	
	//echo ("[\"TEST3\",\"TEST5\",\"TEST9\"]");
	$final = "[";
	$i = 0;
	foreach($mar as $va){
		if($i != 0){
			$final .= ",";
		}
		$i = $i + 1;
		$final .= "\"";
		$final .= $va;
		$final .= "\"";
	}
	$final .= "]";
			
	echo ($final);
?> 
