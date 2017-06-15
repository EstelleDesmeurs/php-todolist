<?php 
require 'form.php';
?>

<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Catamaran|Questrial" rel="stylesheet">
	<title>To Do List</title>
</head>
<body>

<main>
	<div class="form" >
		<h1>My<br>Daily<br>To Do List</h1>

<form id="form" action="" method="post">
    <textarea name="content" id="content"></textarea><br>

    <input type="submit" id="todo" name="todo" value="Envoyer"/>
<section class="afaire">
<h2>A faire</h2>

<?php
toDo();
?>

<input type="submit" id="done" name="done" value="Enregistrer"/>
</section>

<section class="archives">
<h2>Archives</h2>

<?php
displayDone();
?>

</section>
</form>
	</div>

</main>
</body>
</html>