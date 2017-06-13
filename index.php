<?php require 'form.php';
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>To Do List</title>
</head>
<body>

<h1>To Do List : </h1>

<form id="form" action="" method="post">
    <textarea name="content" id="content"></textarea>
    <input type="submit" id="submit" name="submit" value="Envoyer"/>

<h2>A faire</h2>
<?php
toDo();
?>
<input type="submit" id="submit" name="submit" value="Enregistrer"/>


<h2>Archives</h2>




</form>
</body>
</html>