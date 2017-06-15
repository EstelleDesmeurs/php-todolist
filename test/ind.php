<html>
<head>
	<meta charset="UTF-8">
	<title>test</title>
</head>
<body>
<form action="process.php" method="POST">
	<?php
   	
   $myFile = "data.json";
   $arr_data = array(); // create empty array

  try
  {
	   //Get form data
	   $formdata = array(
	      'firstName'=> $_POST['firstName'],
	      'lastName'=> $_POST['lastName'],
	      'email'=>$_POST['email'],
	      'mobile'=> $_POST['mobile']
	   );

	   //Get data from existing json file
	   $jsondata = file_get_contents($myFile);

	   // converts json data into array
	   $arr_data = json_decode($jsondata, true);

	   // Push user data to array
	   array_push($arr_data,$formdata);

       //Convert updated array to JSON
	   $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
	   
	   //write json data into data.json file
	   if(file_put_contents($myFile, $jsondata)) {
	        echo 'Data successfully saved';
	    }
	   else 
	        echo "error";

   }
   catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
   }

?>
	First name:<br>
	<input type="text" name="firstName">
	<br><br/>
	Last name:<br>
	<input type="text" name="lastName">
	<br><br>
	  
	Email:<br>
	<input type="text" name="email">
	<br><br>
	  
	Mobile:<br>
	<input type="text" name="mobile">
	<br><br>
	<input type="submit" value="Submit">

</form>
</body>
</html>