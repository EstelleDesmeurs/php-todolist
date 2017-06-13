<html>
<head>
	<meta charset="UTF-8">
	<title>To Do List</title>
</head>
<body>
	<form>
<?php
		$todojson = 'assets/js/todo.json';
		//print_r($todojson);
		$openFile = file_get_contents($todojson);
		//print_r($openFile);
		$obj = json_decode($openFile, true);
		print_r($obj);
/*
function saveData($content){
	$line = date('Y-m-d | H:i:s') . ',' . $content;
	$lines = file_get_contents("todo.json");
	$lines = $lines . PHP_EOL . $line;
	file_put_contents ("/assets/js/todo.json", $lines);

}

saveData($content);
*/
?>

	  
	</form>


</body>
</html>