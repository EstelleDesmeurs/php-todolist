<?php
function pr($array){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}

function sanitize($x) { 
    $x = filter_var($x, FILTER_SANITIZE_STRING);
    $x = htmlspecialchars($x, FILTER_SANITIZE_STRING);    
    return $x;
}

function validate($y) {
    $y= filter_var($y, FILTER_VALIDATE_STRING);
    return $y;
}

$content = sanitize($_POST['content']);	
//print_r($content);
$todojson = 'assets/js/todo.json';
//print_r($todojson);
$openFile = file_get_contents($todojson);
//print_r($openFile);
$obj = json_decode($openFile, true);
//pr($_POST);

function toDo(){
	global $obj;   
	global $todojson;  
	if (isset($_POST['content'])) {
		if (!empty ($_POST['content'])) {
			$content = sanitize($_POST['content']);	
			$tasks = array(
				"task" => $content,
				"done" => false);
			//print_r($tasks);
			$save = array_push($obj, $tasks);
			//print_r($save);
			$test = json_encode($obj, JSON_PRETTY_PRINT);
			//print_r($test);
			$put = file_put_contents($todojson, $test);
			//print_r($obj);
		}
		/*else {
			echo "Ajoutez une tâche";
		}*/
	}	
	foreach ($obj as $x => $y) {
	//print_r($y);
		if ($y['done'] === false){ 
	 		echo '<label class="taches"><input type="checkbox" name="taches['.$x.']" value="done">'.$y['task'].'</label><br>';
		}
	}
}

if(!empty($_POST['taches'])){
		foreach ($_POST['taches'] as $key => $value) {
			global $todojson;
			//$value = true;
			$obj[$key]['done'] = true;
			$save = array_push($bj, $tasks);
			$test = json_encode($obj, JSON_PRETTY_PRINT);
			$put = file_put_contents($todojson, $test);

		}
	}
function displayDone(){

	//$checked = ($_POST['task'] == ' checked');
	global $obj;
	foreach ($obj as $x => $y) {
	//print_r($y);
		if ($y['done'] === true){ 
			echo '<label class="tachesDone"><input type="checkbox" name="done[true]" value="done">'.$y['task'].'</label><br>';
		}

	}
}



?>


