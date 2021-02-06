<?php
	include_once('connect.php');

	$s_title=$_POST['name'];
	$s_link=$_POST['link'];
	$s_detail=$_POST['describe'];

	$stmt=$con->prepare("INSERT INTO scholarship(s_title,s_link,s_detail) VALUES(?,?,?)");

	$stmt->bind_param("sss",$s_title,$s_link,$s_detail);

	if($stmt->execute()){
		echo "Successfully Inserted";
	}
	else
		echo "Insertion Failed";