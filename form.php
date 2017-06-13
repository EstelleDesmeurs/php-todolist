<html>
<head>
	<meta charset="UTF-8">
	<title>To Do List</title>
</head>
<body>
<form id="form" action="" method="post">
    <textarea name="content" id="content"></textarea>
    <input type="submit" id="submit" name="submit" value="Envoyer"/>

<?php

$content = sanitize($_POST['content']);	
function sanitize($x) { 
    $x = filter_var($x, FILTER_SANITIZE_STRING);
    $x = htmlspecialchars($x, FILTER_SANITIZE_STRING);    
    return $x;
}

$content = sanitize($_POST['content']);

function validate($y) {
    $y= filter_var($y, FILTER_VALIDATE_STRING);
    return $y;
}
  

if (isset($_POST['content'])) {
	if (!empty ($_POST['content'])) {
		echo "La tâche a été ajoutée!";
		$todojson = 'assets/js/todo.json';
		//print_r($todojson);
		$openFile = file_get_contents($todojson);
		//print_r($openFile);
		$obj = json_decode($openFile, true);
		$save = array_push($obj, $content);
		$test = json_encode($obj, JSON_PRETTY_PRINT);
		$put = file_put_contents($todojson, $test);
		//print_r($obj);
	}
	else {
		echo "Ajoutez une tâche";
	}
}	




/*
function saveData($content){
	$line = date('Y-m-d | H:i:s') . ',' . $content;
	$lines = file_get_contents("todo.json");
	$lines = $lines . PHP_EOL . $line;
	file_put_contents ("/assets/js/todo.json", $lines);

}

saveData($content);

$content = ($_POST['content']);
echo json_encode($content);

function printData(){
	$lines = file_get_contents("data.csv");
	$linesArray = explode(PHP_EOL, $lines);
	rsort($linesArray);
	foreach ($linesArray as $line){
		echo "<tr>";
		$dataArray = explode(',' , $line);
		echo "<td>" . $dataArray[0] . "</td>";
		echo "</tr>";
	}
}


$lang = (file_exists('todo.json'));

/* Récupération du contenu du fichier .json 
$json = file_get_contents('todo'.$lang.'.json');
/* Les données sont récupérées sous forme de tableau (true) 
$tr = json_decode($json, true);
*/

//tache va dans un tableau
//tache stockée dans json
// $_POST push dans le tableau


?>

</form>
</body>
</html>