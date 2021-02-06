<?php
  if(isset($_POST['submit']))
  {
      $value=$_POST['select'];
      if($value==1)
      {
        header('location:../student/index.php');

      }
      else if($value==2)
      {
        header('location:../SPOC_portal_login/index.php');
      }
      else if($value==3)
      {
        header('location:../trending/register.php');
      }
      else if($value==4)
      {
        header('location:../admin/index.html');
      } 
  }
?>



<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>MindUnwind</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,700'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body style="background:url('img/accountimg2.jpg'); background-repeat:no-repeat; width: 100%; height: 100%; background-size: cover; ">

    <center><h1><b>Choose the user account</b></h1></center>
<section>
    <form method="post" action="index.php">
<div class="container">
    
    <div class="col-lg-12" style="margin-left:70px;">
        <div class="row" style="margin-top:50px;">
            <div class="col-lg-5">
                
                  <input type="radio" id="control_01" name="select" value="1" checked>
                  <label for="control_01">
                    <h2 style="font-family: verdana; font-style: bold; color:black;">Student</h2>
                    <p>Student Account Login</p>
                  </label>
                

            
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5">
            
                
                  <input type="radio" id="control_02" name="select" value="2">
                  <label for="control_02">
                    <h2 style="font-family: verdana; font-style: bold; color:black;">Moderator</h2>
                    <p>Moderator Account Login</p>
                  </label>
                

            </div>

    
        </div>
        
        <div class="row" style="margin-top:50px;">
            <div class="col-lg-5">
                                
                  <input type="radio" id="control_03" name="select" value="3">
                  <label for="control_03">
                    <h2 style="font-family: verdana; font-style: bold; color:black;">Expert</h2>
                    <p>Expert Account Registration/Login</p>
                  </label>
                

                                
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5">
                                    
                  <input type="radio" id="control_05" name="select" value="4">
                  <label for="control_05">
                    <h2 style="font-family: verdana; font-style: bold; color:black;">Admin</h2>
                    <p>Admin Login</p>
                  </label>
                

                
            </div>

    
        </div>

        <div class="row" style="margin-top:50px;">
          <div class="col-lg-5"></div>

          <div class="col-lg-1">
               <input type="submit" style="background:#e5bc37; border:2px solid black; padding:15px 20px;border-radius:30%;font-style: bold; font-size:20px; font-family:comic-sans;color:red" class="btn btn-info" name="submit" value="Submit">
          </div>
          <div class="col-lg-6"></div>

        
        
    </div>

    
</div>
        <!--<input type="submit" style="; padding:15px 20px;border-radius:10%;font-style: bold; font-size:20px; font-family:comic-sans;color:red" class="btn btn-info" name="submit" value="Submit">-->
                  
    </form>

  
</section>
    
    
    
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

  
</body>
</html>
