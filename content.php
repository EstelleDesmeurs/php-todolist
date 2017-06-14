
<?php
		$todojson = 'assets/js/todo.json';
		$openFile = file_get_contents($todojson);
		$obj = json_decode($openFile, true);
		//print_r($obj);
?>

	<h2>A faire</h2>

<?php
	foreach ($obj as $x => $y) {
	 echo '<input type="checkbox" name="done" value="done">'.$y.'<br>';
}	
?>

<input type="submit" id="submit" name="submit" value="Enregistrer"/>

	<h2>Archives</h2>

<?php
	
		foreach ($obj as $x => $y) {
	 		echo '<input type="checkbox" name="done" value="done">'.$y.'<br>';
	}	
}

?>	

	</form>


</body>
</html>