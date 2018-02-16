<?php

	/** 
                User name : admu
                Password : new_pass
                MongoDB host : localhost
                MongoDB port : 27017
                Database : university
        */
        $server = "mongodb://reportsUser:12345678@localhost:27017/xyz";
	echo "hello";
        try{
                // Connecting to server
                $c = new MongoClient( $server );
        }catch(MongoConnectionException $connectionException){
                print $connectionException;
                exit;
        }
	
	$data  = "<table style='border:1px solid red;";
	$data .= "border-collapse:collapse' border='1px'>";
	$data .= "<thead>";
	$data .= "<tr>";
	$data .= "<th>Time stamp</th>";
	$data .= "<th>Temperature</th>";
	$data .= "<th>Humidity</th>";
	$data .= "</tr>";
	$data .= "</thead>";
	$data .= "<tbody>";

	try{
		$db = $c->xyz;
		$collection = $db->mycollect;
		$cursor = $collection->find();
		foreach($cursor as $document){
			$data .= "<tr>";
			$data .= "<td>" . $document["TimeStamp"] . "</td>";
			$data .= "<td>" . $document["Temperature"]."</td>";
			$data .= "<td>" . $document["Humidity"]."</td>";
			$data .= "</tr>";
		}
		$data .= "</tbody>";
		$data .= "</table>";
		echo $data;
	
	}catch(MongoException $mongoException){
		print $mongoException;
		exit;
	}
	?>
