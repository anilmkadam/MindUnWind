<?php
include('connect.php');
$sql="select * from clgnames";
$res=mysqli_query($connection,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="./assets/img/apple-icon.png">
    <link rel="icon" href="assets/img/favicon.png">
    <title>
        Moderator Signup
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./assets/css/material-kit.css?v=2.0.0">
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/assets-for-demo/demo.css" rel="stylesheet" />
    <link href="./assets/assets-for-demo/vertical-nav.css" rel="stylesheet" />
    
     <script>
         function check(){
                   $(document).ready(function(){
                
                    $.ajax({
                    type: "POST",
                    url: "institute_code.php",
                    data:'keyword='+$('#institute_name').val(),
                    beforeSend: function(){
//                        $("#code").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
                    },
                    success: function(data){
//                        $("#suggesstion-box1").show();
//                        $("#suggesstion-box1").html(data);
//                        $(".cscode").css("background","#FFF");
                        $('#code').html(data);
                        }
                        });
                    });
//                });
//              $('#code').val('hiii');
         }

//                function selectCountry1(val) {
//                $(".cscode").val(val);
//                $("#suggesstion-box1").hide();
//                }
        </script>
    
</head>

<body class="index-page ">
    <div id="messages" class="hide" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <div id="messages_content"></div>
    </div>
   
    <div class="info">
            <div class="icon icon-primary">
                <i class="material-icons">account_circle</i>
            </div>
            <h4 class="info-title">Moderator Account</h4>
            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
        </div>
        <div class="section section-signup">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="card card-signup">
                            <form class="form" method="post" action="#" enctype="multipart/form-data">
                                <div class="card-header card-header-primary text-center">
                                    <h4>Sign UP</h4>
                                  
                                </div>
                                <p class="text-divider"> </p>
                                <div class="card-body">                            
                                    <div class="input-group">
                                        
                                        <span class="input-group-addon">
                                            <i class="material-icons">account_circle</i>
                                        </span>
                                        
                                        <input type="text" class="form-control" placeholder="Full Name" name="name" required>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">school</i>
                                        </span>
                                        <select class="form-control" id="institute_name" onclick="check()" name="institute" required>
                                            <option value="">Choose Institute</option>
                                            <?php
                                            while($row=mysqli_fetch_array($res))
                                            {?>
                                            <option name="institute" value="<?php echo $row['name'];?>" class="institute_name1">
                                            <?php echo $row['name'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    
                                    <div class="input-group" >
                                        <span class="input-group-addon">
                                            <i class="material-icons">account_balance</i>
                                        </span>
                                            <div id="code" class="input-group"></div>
<!--                                        <input type="text" class="form-control" id="code">-->
                                    </div>
                                    
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <input type="email" class="form-control" placeholder="Your Email" name="email" required>
                                    </div>
                                    
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <input type="email" class="form-control" placeholder="Institute Email" name="institute_email" required>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">attach_file</i>
                                        </span>
                                       
                                        <input type="file" name="file" id="file" />
                                       </div>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <button class="btn btn-primary btn-round" type="submit" name="get_in">Create Account</button>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <a href="index.php" style="color:none; text-decoration:underline;"> Sign in</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
    <!-- OTP Verifier modal ---->
    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link">Nice Button</button>
                    <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
                <div class="sharing-area text-center">
                    <div class="row justify-content-center">
                        <h3>Thank you for supporting us!</h3>
                    </div>
                    <button id="twitter" class="btn btn-raised btn-twitter sharrre">
                        <i class="fa fa-twitter"></i> Tweet
                    </button>
                    <button id="facebook" class="btn btn-raised btn-facebook sharrre">
                        <i class="fa fa-facebook-square"></i> Share
                    </button>
                    <button id="googlePlus" class="btn btn-raised btn-google-plus sharrre">
                        <i class="fa fa-google-plus"></i> Share
                    </button>
                    <a id="github" href="https://github.com/timcreative/material-kit" target="_blank" class="btn btn-raised btn-github">
                        <i class="fa fa-github"></i> Star
                    </a>
                </div>

      <!--  End Modal -->
    <footer class="footer ">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="https://www.creative-tim.com">
                            Creative Tim
                        </a>
                    </li>
                    <li>
                        <a href="http://presentation.creative-tim.com">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="http://blog.creative-tim.com">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/license">
                            Licenses
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright pull-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>, made with <i class="material-icons">favorite</i> by
                <a href="https://www.creative-tim.com" target="_blank">Pheonix</a> for a better web.
            </div>
        </div>
    </footer>
    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/bootstrap-material-design.js"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
    <script src="./assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="./assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./assets/js/plugins/nouislider.min.js"></script>
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="./assets/js/material-kit.js?v=2.0.0"></script>
    <!-- Fixed Sidebar Nav - js With initialisations For Demo Purpose, Don't Include it in your project -->
    <script src="./assets/assets-for-demo/js/material-kit-demo.js"></script>
    <script>
        $(document).ready(function() {
            materialKitDemo.initFormExtendedDatetimepickers();
            // Sliders for demo purpose in refine cards section
            var slider = document.getElementById('sliderRegular');

            noUiSlider.create(slider, {
                start: 40,
                connect: [true, false],
                range: {
                    min: 0,
                    max: 100
                }
            });

            var slider2 = document.getElementById('sliderDouble');

            noUiSlider.create(slider2, {
                start: [20, 60],
                connect: true,
                range: {
                    min: 0,
                    max: 100
                }
            });
        });
    </script>
    
    <!--Firebase Script--->

</body>

</html>


<?php
if (isset($_POST['get_in'])) {
//    require_once('connect.php');
    $name=$_POST['name'];
    $password=md5($_POST['password']);
    $institute_name=$_POST['institute'];
    $institute_code=$_POST['code'];
    $email=$_POST['email'];
    $institute_email=$_POST['institute_email'];
    
    

        
//    echo "'".$email."','".$password."','".$name."','".$institute_name."','".$institute_code."','".$institute_email."'";
    
             $targetfolder = "./application/";

         $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

         $ok=1;


            $file_name=$_FILES['file']['name'];
            $file_type=$_FILES['file']['type'];

        if ($file_type=="application/pdf") {

         if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

         {

//         echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

         }

         else {

//         echo "Problem uploading file";

         }

        }

        else {

//         echo "You may only upload PDFs files.<br>";

        }
    
        $result1=mysqli_query($connection,"select * from moderator_account where institute_code='$institute_code'");
    $count=mysqli_num_rows($result1);
    echo $count;
    if($count>0)
    {
        echo"<script>$(function(e) {
                        $('#messages').removeClass('hide').addClass('alert alert-danger alert-dismissible').slideDown().show();
                        $('#messages_content').html('<h4>Moderator Already Exists.</h4>');
                        $('#modal').modal('show');
                        e.preventDefault();
                    });</script>";
    }
    else{
    
        
                     $query=mysqli_query($connection,"INSERT INTO moderator_account VALUES('$email','$password','$name','$institute_name','$institute_code','$institute_email','$file_name')");
            if($query){
                echo"<script>$(function(e) {
                        $('#messages').removeClass('hide').addClass('alert alert-success alert-dismissible').slideDown().show();
                        $('#messages_content').html('<h4>Successfully Inserted.</h4>');
                        $('#modal').modal('show');
                        e.preventDefault();
                    });</script>";
            }
            else
            {
                echo"<script>$(function(e) {
                        $('#messages').removeClass('hide').addClass('alert alert-danger alert-dismissible').slideDown().show();
                        $('#messages_content').html('<h4>Something Went Wrong.</h4>');
                        $('#modal').modal('show');
                        e.preventDefault();
                    });</script>";

            }
        }
}
?>