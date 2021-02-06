

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
				});
			}

	</script>
</head>

<body>
	<div align="center" style="margin-top: 10%; border: 1px solid black ; ">
	<h1><u>Add Scholarship Details</u></h1>
	<form id="myform" action="upload_detail.php" method="post" ><br><br>
		<input type="text" name="name" placeholder="Enter Tittle" /><br/><br/>
		<input type="text" name="link" placeholder="Enter Official website" /><br/><br/>
		<input type="text" name="describe" placeholder="Enter few Description" /><br/><br/>
		<button id="sub">SAVE</button><br><br>
	</form>
	<span id="result"> </span>
</div>
</body>
</html>