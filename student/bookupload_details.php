<?php
	include_once('connect.php');

	$b_title=$_POST['bk_title'];
	$b_author=$_POST['bk_img'];
	$b_link=$_POST['bk_link'];
	$b_preview=$_POST['bk_preview'];

	$stmt=$con->prepare("INSERT INTO table_book(b_title,b_author,b_link,b_preview) VALUES(?,?,?,?)");

	$stmt->bind_param("ssss",$b_title,$b_author,$b_link,$b_preview);

	if($stmt->execute()){
		echo "Successfully Inserted";
	}
	else
		echo "Insertion Failed";