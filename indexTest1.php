<?php 
require 'test1.php';
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
    <input type="submit" id="todo" name="todo" value="Envoyer"/>

<h2>A faire</h2>
<?php
toDo();
?>
<input type="submit" id="done" name="done" value="Enregistrer"/>


<h2>Archives</h2>

<?php
done();
?>


</form>
</body>
</html>