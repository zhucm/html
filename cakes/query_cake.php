<?php

header('Content-type: text/html; charset=utf-8');
include("../db_info.php");
include("../common_utils.php");




$sql = "select * from cake_res_lib";
$ready = true;

$results = array();


$ids = "";

if($ready){
	$result = mysql_query($sql);
	if($result){
		while ($row = mysql_fetch_assoc($result)) {
			//查找地标图片
			$res_id = $row["res_id"];
			
	

			$rows[] = $row;
		}		
		
		if($rows){
			$results["result"] = $rows;
			

		}	
	}	
}

echo json_encode($results);
echo mysql_error();

mysql_close($link);


?>