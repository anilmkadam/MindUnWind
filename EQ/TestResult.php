<?php
    if(isset($_GET['uni']))
        $score=$_GET['uni'];
    
?>

<!DOCTYPE html>

<html>
	<head>
		<title></title>	
        <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">



	</head>
	<body style="background:url('img/testRes4.jpg')">


    <div class="row" style="margin: 50px 1000px;">
    <div class="col-lg-4" >

        <a href="../index.html"><button type="button" class="btn btn-primary btn-lg" style="background:#e5bc42; color:black; padding:20px;"><b>Go to Dashboard</b></button>

    </div>
    </div>

    <div id="chartContainer" style="margin-left: 300px; margin-top: 100px;height: 600px; width: 800px;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



	<div class="row">	
		<div class="col-lg-4" style="margin:120px 200px;">
                    <div class="panel panel-yellow" style="height:relative; width:1000px;">
                        <div class="panel-heading" style="background:#368e1b;">
                            <h3 style="color:white; text-align:center;">Test Analysis</h3>
                        </div>
                        <?php 
                            if($score>=0&&$score<=10)
                            {
                                                echo"<div class='panel-body'>
                            <p style='font-style:bold; font-size: 25px; font-family: verdana'>&nbsp;&nbsp;Dear Student, the test analysis depicts that you possess very good psychological health.
                            You are doing great with your everyday life. The mild ups and downs in your behavior can be considered quite normal and understandable. 
                            If you are facing any problems, feel free to contact your parents, teachers or friends and surely you will be up with the easiest of all solutions. All the best!</p>
<br><p style='font-style:bold; font-size: 25px; font-family: verdana'>
We have some most desirable things for you. Please have a look and make most of this:

<ul style='font-style:bold; font-size: 22px; font-family: verdana'>
<li>Ally - A place where you can express whatever you feel and want to share. No one to interrupt you. Set yourself free.</li>
<li>Expert Connect- Connect with your admiring experts and get knowledge in the field in which you are interested.</li> 
          Get connected with health experts and successful personalities across the country.

<li>Success talks - Here you will find inspiring video lectures, podcasts, books,</li>
<li>Aadhar - Get scholarships and finance your education. Here you will find all govt./ngo scholarships.</li>
<li>Happy Corner - Stressed? Play some fascinating games and challenge your brain!</li>
<li>Umang - Contribute towards society, Spread your knowledge and exhibit your skills.</li>
 </ul>                      </p> </div>";
                        }
                        else if($score>=11&&$score<=16)
                            {
                                                echo"<div class='panel-body'>
                            <p style='font-style:bold; font-size: 25px; font-family: verdana'>&nbsp;&nbsp;Dear Student, the test analysis depicts that you possess good psychological health.You are doing great with 
your everyday life. The mild mood disturbances that you face are typical adolescent changes. If you get depressed,
self dissatisfied feel free to share your thoughts and views with your parents, teachers or friends and 
surely you will be up with the easiest of all solutions. All the best!

We have some most desirable things for you. Please have a look and make most of this 
</p>
<br><p style='font-style:bold; font-size: 25px; font-family: verdana'>
We have some most desirable things for you. Please have a look and make most of this:

<ul style='font-style:bold; font-size: 22px; font-family: verdana'>
<li>Ally - A place where you can express whatever you feel and want to share. No one to interrupt you. Set yourself free.</li>
<li>Expert Connect- Connect with your admiring experts and get knowledge in the field in which you are interested.</li> 
          Get connected with health experts and successful personalities across the country.

<li>Success talks - Here you will find inspiring video lectures, podcasts, books,</li>
<li>Aadhar - Get scholarships and finance your education. Here you will find all govt./ngo scholarships.</li>
<li>Happy Corner - Stressed? Play some fascinating games and challenge your brain!</li>
<li>Umang - Contribute towards society, Spread your knowledge and exhibit your skills.</li>
 </ul>                      </p> 
                        </div>";
                        }
                        else if($score>=17&&$score<=20)
                            {
                                                echo"<div class='panel-body'>
                            <p style='font-style:bold; font-size: 25px; font-family: verdana'>Dear Student, the test analysis depicts that you possess a mediocre psychological health. Your mood swings exhibit 
clinical depression. If you face any complications, open up your mind to your near and dear ones. By sharing and
discussing you will be surely up with one of the most easiest of solutions. By getting mentally disturbed and psychologically 
unstable, you would end up hurting yourself when you already have plenty of solutions to your problem. All the best!
                            </p>
<br><p style='font-style:bold; font-size: 25px; font-family: verdana'>
We have some most desirable things for you. Please have a look and make most of this:

<ul style='font-style:bold; font-size: 22px; font-family: verdana'>
<li>Ally - A place where you can express whatever you feel and want to share. No one to interrupt you. Set yourself free.</li>
<li>Expert Connect- Connect with your admiring experts and get knowledge in the field in which you are interested.</li> 
          Get connected with health experts and successful personalities across the country.

<li>Success talks - Here you will find inspiring video lectures, podcasts, books,</li>
<li>Aadhar - Get scholarships and finance your education. Here you will find all govt./ngo scholarships.</li>
<li>Happy Corner - Stressed? Play some fascinating games and challenge your brain!</li>
<li>Umang - Contribute towards society, Spread your knowledge and exhibit your skills.</li>
 </ul>                      </p> 
                        </div>";
                        }
                        else if($score>=21&&$score<=30)
                            {
                                                echo"<div class='panel-body'>
                            <p style='font-style:bold; font-size: 25px; font-family: verdana'>Dear Student, the test analysis depicts that you possess a below average psychological health. Your mood swings exhibit
moderate depression. By sharing and discussing the complications, you will be surely up with one of the most easiest of solutions.
By getting mentally disturbed and psychologically unstable, you would end up hurting yourself when you already have plenty of solutions to your problem. 
Dear Student, its quite important for you to set yourself free and have discussion with your teachers or parents. Don't end up
frustrated, you will be surely having great life ahead full of successes. All the best !</p>
<br><p style='font-style:bold; font-size: 25px; font-family: verdana'>
We have some most desirable things for you. Please have a look and make most of this:

<ul style='font-style:bold; font-size: 22px; font-family: verdana'>
<li>Ally - A place where you can express whatever you feel and want to share. No one to interrupt you. Set yourself free.</li>
<li>Expert Connect- Connect with your admiring experts and get knowledge in the field in which you are interested.</li> 
          Get connected with health experts and successful personalities across the country.

<li>Success talks - Here you will find inspiring video lectures, podcasts, books,</li>
<li>Aadhar - Get scholarships and finance your education. Here you will find all govt./ngo scholarships.</li>
<li>Happy Corner - Stressed? Play some fascinating games and challenge your brain!</li>
<li>Umang - Contribute towards society, Spread your knowledge and exhibit your skills.</li>
 </ul>                      </p> 
                        </div>";
                        }
                        else if($score>=31&&$score<=40)
                            {
                                                echo"<div class='panel-body'>
                            <p style='font-style:bold; font-size: 25px; font-family: verdana'>Dear Student, the test analysis depicts that you possess a critical psychological health. Your behavior changes exhibit
you are severely depressed by the way you are leading your life. Please feel free to have discussion and share your views with your
parents, teachers and friends. It's very important for you as far as your problem healing and mental stability is 
concerned. With this, you will surely be up with one of the easiest of solutions. Life is precious and your presence
means a lot to your near and dear ones. You will surely have great life ahead. Dear Student, before you leave this page,
make sure you contact any one of the following and share your problems with them. Feel free !
<br><br>
Hrishikesh Kulkarni - 1234567890<br>
Saurabh Sukhatankar - 9860442380<br>
Jeffy Thomas - 121324324<br>
</p>
<br><p style='font-style:bold; font-size: 25px; font-family: verdana'>
We have some most desirable things for you. Please have a look and make most of this:

<ul style='font-style:bold; font-size: 22px; font-family: verdana'>
<li>Ally - A place where you can express whatever you feel and want to share. No one to interrupt you. Set yourself free.</li>
<li>Expert Connect- Connect with your admiring experts and get knowledge in the field in which you are interested.</li> 
          Get connected with health experts and successful personalities across the country.

<li>Success talks - Here you will find inspiring video lectures, podcasts, books,</li>
<li>Aadhar - Get scholarships and finance your education. Here you will find all govt./ngo scholarships.</li>
<li>Happy Corner - Stressed? Play some fascinating games and challenge your brain!</li>
<li>Umang - Contribute towards society, Spread your knowledge and exhibit your skills.</li>
 </ul>                      </p> 
                        </div>";
                        }
                        else {
                                                echo"<div class='panel-body'>
                            <p style='font-style:bold; font-size: 25px; font-family: verdana'>Dear Student, the test analysis depicts that you possess a critical psychological health. Your behavior changes exhibit
you are severely depressed by the way you are leading your life. Dear Student, the phase you are going through is 
temporary and won't last even for few days. Please feel free to have discussion and share your views with your
parents, teachers and friends. It's very important for you as far as your problem healing and mental stability is 
concerned. With this, you will surely be up with one of the easiest of solutions. Life is precious and your presence
means a lot to your near and dear ones. You will surely have great life ahead with all successes.Be happy and optimistic.
<br><br>
Dear Student, before you leave this page,
make sure you contact any one of the following and share your problems with them. Feel free !
<br><br>
Hrishikesh Kulkarni - 1234567890<br>
Saurabh Sukhatankar - 9860442380<br>
Jeffy Thomas - 121324324<br>
</p>
<br><p style='font-style:bold; font-size: 25px; font-family: verdana'>
We have some most desirable things for you. Please have a look and make most of this:

<ul style='font-style:bold; font-size: 22px; font-family: verdana'>
<li>Ally - A place where you can express whatever you feel and want to share. No one to interrupt you. Set yourself free.</li>
<li>Expert Connect- Connect with your admiring experts and get knowledge in the field in which you are interested.</li> 
          Get connected with health experts and successful personalities across the country.

<li>Success talks - Here you will find inspiring video lectures, podcasts, books,</li>
<li>Aadhar - Get scholarships and finance your education. Here you will find all govt./ngo scholarships.</li>
<li>Happy Corner - Stressed? Play some fascinating games and challenge your brain!</li>
<li>Umang - Contribute towards society, Spread your knowledge and exhibit your skills.</li>
 </ul>                      </p> 
                        </div>";
                        }




                        ?>
                        
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
    </div>




	</body>
</html>


<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    title:{
        text: "Psychological Health User statistics"
    },
    axisY: {
        title: "Test Score(pt)"
    },
    data: [{        
        type: "column",  
        showInLegend: true, 
        legendMarkerColor: "grey",
        legendText: "pt = Points Scored",
        dataPoints: [      
            { y: 20, label: "January 2018" },
            { y: 32,  label: "February 2018" },
            { y: 12,  label: "March 2018" },
            { y: 34,  label: "April 2018" },
            { y: <?php echo $score?>,  label: "May 2018" },
            /*{ y: 101500, label: "June 2018" },
            { y: 97800,  label: "UAE" },
            { y: 80000,  label: "Russia" }*/
        ]
    }]
});
chart.render();

}
</script>
