<?php
  		
  	require_once("connect.php");	 
     $i=0;

     $score=0;
if(isset($_GET["encr"])|| isset($_GET["uni"]))
{
    $i=$_GET["encr"];
    $score=$_GET['uni'];
}
else 
	$i=1;

  ?>

<?php 
$pscr=$score;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/mycss1.css">
  <link rel="stylesheet" href="css/optionbtn.css">
  <link rel="stylesheet" href="css/timercss.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/loader.css" rel="stylesheet">


    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Social Buttons CSS -->
    <link href="css/bootstrap-social.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="css/nextbtncss.css" rel="stylesheet">


    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <script src="../vendor/jquery/jquery.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script>
	var myVar;

	function myFunction() {
	    myVar = setTimeout(showPage, 500);
	}

	function showPage() {
	  document.getElementById("loader").style.display = "none";
	  document.getElementById("myDiv").style.display = "block";
	}
</script>

  <!-- OPTION BUTTON EFFECTS -->

  <!-- Change button color on click -->
  <script>

  $(function(){
  		$('#spn').hide();
  });
	$(function () {
	    $("#b1").click(function () {
	        $(this).css('background-color', '#1bba65');

				$('#spn').show();
			

				
	    });

	    $("#b2").click(function () {
	        $(this).css('background-color', '#1bba65');

				$('#spn').show();

				
	    });

	    $("#b3").click(function () {
	        $(this).css('background-color', '#1bba65');

				$('#spn').show();

				
	    });

	    $("#b4").click(function () {
	        $(this).css('background-color', '#1bba65');

				$('#spn').show();
				
	    });
	});

	$(function () {
	    $(".onoptnhover").mouseover(function () {
	        $(this).css('background-color', '#efb239');
	    });
	});

	$(function () {
	    $(".onoptnhover").mouseout(function () {
	        $(this).css('background-color', '#7bbee5');
	    });
	});
	</script>


	<!-- TIMER CODE BEGINS -->
	<link rel="stylesheet" href="sb-admin-2.css">
<script>
		(function($){
		  var methods = {
			init: function(options) {
			  var state = {
				timer: null,
				timerSeconds: 60,
				callback: function() {},
				timerCurrent: 0,
				showPercentage: false,
				fill: '#ffffff',
				color: '#ffffff',
			  };

			  state = $.extend(state, options);

			  return this.each(function() {
				var $this = $(this);
				var data = $this.data('pietimer');
				if (!data) {
				  $this.addClass('pietimer');
				  $this.css({fontSize: $this.width()});
				  $this.data('pietimer', state);
				  if (state.showPercentage) {
					$this.find('.percent').show();
				  }
				  if (state.fill) {
					$this.addClass('fill');
				  }
				  $this.pietimer('start');
				}
			  });
			},

			stopWatch: function() {
			  var data = $(this).data('pietimer');
			  if (data) {
				var seconds = (data.timerFinish-(new Date().getTime()))/1000;
				if (seconds <= 0) {
				  clearInterval(data.timer);
				  $(this).pietimer('drawTimer', 100);
				  data.callback();
				} else {
				  var percent = 100-((seconds/(data.timerSeconds))*100);
				  $(this).pietimer('drawTimer', percent);
				}
			  }
			},

			drawTimer: function(percent) {
			  $this = $(this);
			  var data = $this.data('pietimer');
			  if (data) {
				$this.html('<div class="percent"></div><div class="slice'+(percent > 50?' gt50"':'"')+'><div class="pie"></div>'+(percent > 50?'<div class="pie fill"></div>':'')+'</div>');
				var deg = 360/100*percent;
				$this.find('.slice .pie').css({
				  '-moz-transform':'rotate('+deg+'deg)',
				  '-webkit-transform':'rotate('+deg+'deg)',
				  '-o-transform':'rotate('+deg+'deg)',
				  'transform':'rotate('+deg+'deg)'
				});
				 var secs = (data.timerSeconds)*((100-percent)/100);/*NEW*/
			$this.find('.percent').html(Math.round(secs)+'');/*Changed*/
			if (data.showPercentage) {
			  $this.find('.percent').show();
			}
				if ($this.hasClass('fill')) {
				  $this.find('.slice .pie').css({backgroundColor: data.color});
				}
				else {
				  $this.find('.slice .pie').css({borderColor: data.color});
				}
			  }
			},
			
			start: function() {
			  var data = $(this).data('pietimer');
			  if (data) {
				data.timerFinish = new Date().getTime()+(data.timerSeconds*1000);
				$(this).pietimer('drawTimer', 0);
				data.timer = setInterval("$this.pietimer('stopWatch')", 50);
			  }
			},

			reset: function() {
			  var data = $(this).data('pietimer');
			  if (data) {
				clearInterval(data.timer);
				$(this).pietimer('drawTimer', 0);
			  }
			}
		  };

		  $.fn.pietimer = function(method) {
			if (methods[method]) {
			  return methods[method].apply( this, Array.prototype.slice.call(arguments, 1));
			} else if (typeof method === 'object' || !method) {
			  return methods.init.apply(this, arguments);
			} else {
			  $.error('Method ' +  method + ' does not exist on jQuery.pietimer');
			}
		  };
		})(jQuery);


		$(function() {
			$('#timer').pietimer({
				timerSeconds: 30,
				color: '#f33250',
				fill:'#ffffff',
				showPercentage: true,
				callback: function() {
					
					$('#timer').pietimer('reset');
					$this.find('.percent').html(0);
//                    alert("yahoo, timer is done!");
                    
                     incr();
                    
				}
			});
		});
    function incr()
    {
        var endtime=<?php echo $i;?>;
        var pscore=<?php echo $pscr; ?>;
        endtime++;
     window.location.href='3.php?encr='+endtime+'&uni='+pscore;
//        alert(endtime);
    }
	</script>
        
  
  <style>
		
		.progress{bottom:8px;right:40px;left:40px ;height:40px;}

		#he
		{
			height: calc(100vh - 200px);
			overflow-y:auto;
		}
		
  </style>
  
  
 


</head>
<body style="background:url('img/eqback3img.jpg');" onload="myFunction()">

<div id="loader" ></div>

<div  id="myDiv" class="animate-bottom" style="display:none;" >

	<div  class="container"  >
  

		<div id="timer"></div>
		
		<!-- QUESTION X OF Y -->
        <?php 
       //echo $i;
	$res=mysqli_query($connect,"select * from bdi where id=$i");
	$result=mysqli_fetch_array($res);
	$rowsarr=mysqli_fetch_array(mysqli_query($connect,"select max(id) from bdi"));
	$p=$i;
	//echo $score;
	/*echo $pscr;*/
    $nrows=$rowsarr[0];
	//echo $p*(100/$nrows);
	?>
	

		<div  class="col-lg-4">
                    <div class="panel panel-info" style="margin-top:50px;">
                        <div class="panel-heading">
                          <h4 style="font-family:courier;font-size:20px; color:black;"><b>Question <?php echo $i.' of '.$nrows;?></b><h4>
                        </div>
                        
                    </div>
                </div>

         <!-- EQ QUESTION -->
                        <?php



                      if($i>$nrows)
                      {

                      	  echo "<script>window.location.href='TestResult.php?uni=".$score."';</script>";
                      }
                      

                      	
                      
	
	?>
		
		<div class="col-lg-12" style="margin-top:20px;">
                    <div class="panel panel-green" >
                        <div class="panel-heading">
                            <p style="font-family:calibri; font-size:20px;"></p>
                        </div>
                        <div class="panel-body">
                            <h2 style="font-family:comic sans-ms;">Choose the most appropriate option of the following.</h2>
                            <!-- <span id="spn"><?php echo $quescnt; ?></span> -->
                        </div>
                        
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
				

				
         <!-- OPTION BUTTON PANEL -->

		<div class="col-lg-12">
                    <div class="panel panel-yellow" style="background-color:#eeefac"> <!--#ede4aa;-->

                        <div class="panel-body" style="height:330px;" id="he">
							<div class="row " style="margin-left:50px; margin-top:20px; ">

								<button id="b1" type="button" class="btn btn-info btn-circle btn-lg onoptnhover" onclick="window.location.href='3.php?encr=<?php echo ++$i; ?>&uni=<?php echo $score+=0; ?>'"><i style="color:black" class="glyphicon glyphicon-ok"></i>                    
                            	</button>
                            	<div style="margin-top:10px">
                            		<p  style="margin-left:50px; font-style: verdana; font-size:20px; color:#e81b7e;"><b><?php echo $result['option1']; ?></b></p>
                            		
                            	</div>


                            </div>
                            <div class="row " style="margin-left:50px; margin-top:20px; ">

								<button id="b2" type="button" class="btn btn-info btn-circle btn-lg onoptnhover" onclick="window.location.href='3.php?encr=<?php echo $i; ?>&uni=<?php echo $score+=1; ?>'"><i style="color:black" class="glyphicon glyphicon-ok"></i>                    
                            	</button>
                            	<div style="margin-top:10px">
                            		<p  style="margin-left:50px; font-style: verdana; font-size:20px; color:#e81b7e;"><b><?php echo $result['option2']; ?></b></p>
                            		
                            	</div>


                            </div>

                            <div class="row " style="margin-left:50px; margin-top:20px; ">

								<button id="b3" type="button" class="btn btn-info btn-circle btn-lg onoptnhover" onclick="window.location.href='3.php?encr=<?php echo $i; ?>&uni=<?php echo $score+=1; ?>'"><i style="color:black" class="glyphicon glyphicon-ok"></i>                    
                            	</button>
                            	<div style="margin-top:10px">
                            		<p  style="margin-left:50px; font-style: verdana; font-size:20px; color:#e81b7e;"><b><?php echo $result['option3']; ?></b></p>
                            	
                            	</div>


                            </div>

                            <div class="row " style="margin-left:50px; margin-top:20px; ">

								<button id="b4" type="button" class="btn btn-info btn-circle btn-lg onoptnhover" onclick="window.location.href='3.php?encr=<?php echo $i; ?>&uni=<?php echo $score+=1; ?>'"><i style="color:black" class="glyphicon glyphicon-ok" ></i>                    
                            	</button>
                            	<div style="margin-top:10px">
                            		<p style="margin-left:50px; font-style: verdana; font-size:20px; color:#e81b7e;"><b><?php echo $result['option4']; ?></b></p>
                            	
                            	</div>


                            </div>
                        
                        </div>
                        
                    </div>
                </div>
			
	
	</div>


 


	<!--PROGRESS BAR CODE-->

  	<div  class="col-lg-12">
	<div class="row">
				
				<div class="" style="position:relative;width: 90%;">
					<div class="progress green ">
	                <h3 class="progress-title" style="font-family:verdana; color:blue; font-size:20px;">Complete</h3>
	                <div class="progress-bar ">
	                <?php $var="width: ".(int)($p*(100/$nrows))."%"; echo"<div class='progress-value' style='".($var)."'>".(int)($p*(100/$nrows))."%</div>"; ?>

	                </div>
	            </div>
	            <div class="col-xs-1"></div>
				
				</div>
				
			</div>
</div>


  

</div>


</div>

</body>
</html>
