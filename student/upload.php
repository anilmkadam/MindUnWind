<?php
	include_once('connect.php');

	$name=$_POST['s_title'];
	$link=$_POST['s_link'];
	$describe=$_POST['s_detail'];

	if(mysql_query("INSERT INTO scholarship VALUES ('$name','$link','$describe')"))
		echo "Successfully inserted";
	else
		echo "insertion failed";
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert data into database: Jquery +Ajax +php</title>
</head>
<body>
	<form id="myform" action="" method="post">
		Tittle:<input type="text" name="name" /><br/>
		Oficial_Website:<input type="text" name="link" /><br/>
		Description:<input type="text" name="describe" /><br/>
		<button id="sub">SAVE</button>
	</form>
	<span id="result"> </span>
</body>
</html>