<?php

require 'connect.php';
$i=1;
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-xs-10" style="margin-top:30px;">
	<form action="uploadQues.php" method="GET">

		<div class="form-group row" >
			    <label for="inputEmail3" class="col-sm-2 col-form-label"><b>ID</b></label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" id="quesid" placeholder="ID" name="qid"  value='<?php echo $i++;?>'>
		    	</div>
  		</div>

	  	<div class="form-group row">
		    <label for="inputEmail3" class="col-sm-2 col-form-label"><b>Option 1</b></label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" name="ans1" required>
	    	</div>
  		</div>

		<div class="form-group row">
		    <label for="inputEmail3" class="col-sm-2 col-form-label"><b>Option 2</b></label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" name="ans2" required>
	    	</div>
  		</div>
  		<div class="form-group row">
		    <label for="inputEmail3" class="col-sm-2 col-form-label"><b>Option 3</b></label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" name="ans3" required>
	    	</div>
  		</div><b>
  		<di</v class="form-group row">
		    <label for="inputEmail3" class="col-sm-2 col-form-label"><b>Option 4</b></label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" name="ans4" required>
	    	</div>
  		</div>
  		</div>
  		<div style="margin-top: 50px; text-align:center;">
  			<button type="submit" name="submit" class="btn btn-primary btn-lg" >Upload</button>
  		</div>


  	</div>
  	</div>
		  
</form> 
</body>
</html>
<?php
  		
  	require_once("connect.php");

  	if(isset($_GET['submit']))
  	{
  		$opt1=$_GET['ans1'];
  		$opt2=$_GET['ans2'];
  		$opt3=$_GET['ans3'];
  		$opt4=$_GET['ans4'];
  		$id=$_GET['qid'];

  		//echo $opt1.' '.$opt2.' '.$opt3.' '.$opt4;

  		if($opt1==''||$opt2==''||$opt3==''||$opt4=='')
  			echo "Fill all the fields";
  		else
  		{
  			
			//$resarr=mysqli_fetch_array(mysqli_query($connect,"select  from bdi where id=2;"));
        $resarr=mysqli_query($connect,"UPDATE bdi SET option1='$opt1',option2='$opt2',option3='$opt3',option4='$opt4' WHERE id='$id';");
			/*if($resarr)
				$id=$resarr[0];
			else
				$id=0;
*/
  			
  			//$sql="INSERT INTO `bdi2`(`id`, `option1`, `option2`, `option3`, `option4`) VALUES ('".$id+1."','".$opt1."','".$opt2."','".$opt3."','".$opt4."')";
  			/*if(mysqli_query($connect,$sql))

  				echo 'Successfully inserted';
  			else
  				echo 'Insert failed';*/
  		}
  	}	 
     
  ?>