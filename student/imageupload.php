<!DOCTYPE html>
<html>
<head>
	<title>Insert data into database: Jquery +Ajax +php</title>
	<script type="text/javascript">
		$("#sub").click(function(){
		
		$.post($("#myform").attr("action"),$("#myform :input").serializeArray();,function(info{ $("#result").html(info);
			clearInput();
	});

			$("#myform").submit(function(){
				return false;
			});

			function clearInput(){
				$("$myform: input").each(function(){
					$(this.)val('');
				})
			}

	</script>
</head>

<body>
	<div align="center" style="margin-top: 10%; border: 1px solid black ; ">
	<h2><u>Add Book Details</u></h2>
	<form id="myform" action="bookupload_details.php" method="post">
		<input type="text" name="bk_title" placeholder="Enter Book Tittle" /><br/><br/>
		<input type="text" name="bk_img" placeholder="Enter Author name" /><br/><br/>
		<input type="text" name="bk_link" placeholder="Enter official website " /><br/><br/>
		<input type="text" name="bk_preview" placeholder="Enter description " /><br/><br/>
		<button id="sub">SAVE</button><br><br>
	</form>
	<span id="result"> </span>
</div>
</body>
</html>