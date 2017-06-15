<?php

if(!empty($_POST['taches'])){
		foreach ($_POST['taches'] as $key => $value) {
			//$value = true;
			$obj[$key]['done'] = true;
			
		}
	}

?>	