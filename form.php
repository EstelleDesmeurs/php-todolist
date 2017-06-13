<?php

$content = sanitize($_POST['content']);	
function sanitize($x) { 
    $x = filter_var($x, FILTER_SANITIZE_STRING);
    $x = htmlspecialchars($x, FILTER_SANITIZE_STRING);    
    return $x;
}

function validate($y) {
    $y= filter_var($y, FILTER_VALIDATE_STRING);
    return $y;
}

function toDo(){     
	if (isset($_POST['content'])) {
			global $toDo;
			global $done;
			$toDo = [];
			$done = [];
		if (!empty ($_POST['content'])) {
			$content = sanitize($_POST['content']);
			//print_r($content);
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
}

/*
    $obj = array($id => array("task" => $value, "status" => "open"));
    if(is_array($current)) {
        $current = array_merge_recursive($obj, $current);
    } else {
        $current = $obj;
    }
    $current=json_encode($current); 
    if(file_put_contents($file, $current, LOCK_EX)) {
        echo"Task added";
    } else {
        echo"failure.";
    }

*/


?>




