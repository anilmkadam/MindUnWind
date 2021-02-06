<html>
    <head>
        <title>
            Registration
        </title>    
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
         
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

        <!-- Material Kit CSS -->
        <link rel="stylesheet" href="assets/css/material-kit.css">
        
        <script>

            
            $(document).ready(function(){
                $(".csname").keyup(function(){
                    $.ajax({
                    type: "POST",
                    url: "readCountry.php",
                    data:'keyword='+$(this).val(),
                    beforeSend: function(){
                        $(".csname").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
                    },
                    success: function(data){
                        $("#suggesstion-box").show();
                        $("#suggesstion-box").html(data);
                        $(".csname").css("background","#FFF");
                    }
                    });
                });
            });

            function selectCountry(val) {
            $(".csname").val(val);
            $("#suggesstion-box").hide();
            }
        </script>
        
        <script>
                   $(document).ready(function(){
                $(".cscode").keyup(function(){
                    $.ajax({
                    type: "POST",
                    url: "readCountry.php",
                    data:'keyword='+$(this).val(),
                    beforeSend: function(){
                        $(".cscode").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
                    },
                    success: function(data){
                        $("#suggesstion-box1").show();
                        $("#suggesstion-box1").html(data);
                        $(".cscode").css("background","#FFF");
                    }
                    });
                });
            });

            function selectCountry1(val) {
            $(".cscode").val(val);
            $("#suggesstion-box1").hide();
            }
        </script>
                <script>
                    $(document).ready(function(){
                        $('#note').hide();
                    });
                    $(document).ready(function(){
                        $('#dob').keyup(function(){
                           $('#note').show(); 
                        });
                    });
                    
            $(document).ready(function () {
                  handleDOBChanged();
                });

                //listener on date of birth field
                function handleDOBChanged() {
                    $('#dob').on('change', function () {
                      if (isDate($('#dob').val())) {
                        var age = calculateAge(parseDate($('#dob').val()), new Date());
                          console.log(age);
                        $("#age").val(age);   
                    } else {
                        $("#age").text('');   
                      }      
                    });
                }

                //convert the date string in the format of dd/mm/yyyy into a JS date object
                function parseDate(dateStr) {
                  var dateParts = dateStr.split("/");
                  return new Date(dateParts[2], (dateParts[1] - 1), dateParts[0]);
                }

                //is valid date format
                function calculateAge (dateOfBirth, dateToCalculate) {
                    var calculateYear = dateToCalculate.getFullYear();
                    var calculateMonth = dateToCalculate.getMonth();
                    var calculateDay = dateToCalculate.getDate();

                    var birthYear = dateOfBirth.getFullYear();
                    var birthMonth = dateOfBirth.getMonth();
                    var birthDay = dateOfBirth.getDate();

                    var age = calculateYear - birthYear;
                    var ageMonth = calculateMonth - birthMonth;
                    var ageDay = calculateDay - birthDay;

                    if (ageMonth < 0 || (ageMonth == 0 && ageDay < 0)) {
                        age = parseInt(age) - 1;
                    }
                    return age;
                }

                function isDate(txtDate) {
                  var currVal = txtDate;
                  if (currVal == '')
                    return true;

                  //Declare Regex
                  var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
                  var dtArray = currVal.match(rxDatePattern); // is format OK?

                  if (dtArray == null)
                    return false;

                  //Checks for dd/mm/yyyy format.
                  var dtDay = dtArray[1];
                  var dtMonth = dtArray[3];
                  var dtYear = dtArray[5];

                  if (dtMonth < 1 || dtMonth > 12)
                    return false;
                  else if (dtDay < 1 || dtDay > 31)
                    return false;
                  else if ((dtMonth == 4 || dtMonth == 6 || dtMonth == 9 || dtMonth == 11) && dtDay == 31)
                    return false;
                  else if (dtMonth == 2) {
                    var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
                    if (dtDay > 29 || (dtDay == 29 && !isleap))
                      return false;
                  }

                  return true;
                }
        </script>
    </head>
    <body>
        <div id="messages" class="hide" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <div id="messages_content"></div>
    </div>
       <div class="info">
            <div class="icon icon-primary">
                <i class="material-icons">account_circle</i>
            </div>
            <h4 class="info-title">Student Account</h4>
            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
        </div>
        <form action="register.php" method="POST">
        <div class="container" style="background-color:white; margin-top:20px; width:600px;">
            <div class="row">
                
                <div class="col-sm-12 col-md-6 col-lg-12">
                    <b><h3>Personal Information</h3></b>
                    <hr>
                    
              <div class="form-group">
               First Name:
                <input type="name" class="form-control" name="fname" required>
              </div>
              <div class="form-group">
                Middle name:
                <input type="text" class="form-control" name="mname">
             </div>
            <div class="form-group">
                Last name:
                <input type="text" class="form-control" name="lname" required>
             </div>
            <div class="form-group">
                Email:
                <input type="email" class="form-control" name="email">
             </div>
                <div class="form-group">
                Password:
                <input type="password" class="form-control" name="password">
             </div>
            <div class="form-group">
                Phone No:
                <input type="text" class="form-control" name="phone" required>
             </div>
            <div class="form-group">
                Date of Birth:
                <input type="text" class="form-control" name="dob" id="dob" required>
                <span id="note" style="color:red">Note: Enter Date of Birth in format DD/MM/YYYY eg:18/04/1997</span>
             </div>
            <div class="form-group">
               Age:
                <input type="text" class="form-control" name="age" id="age" required>
<!--                <span id="age"></span>-->
                    
             </div>
<!--
            <div class="form-group">
               Gender:
                <br>
                <input type="radio" class="form-control" name="gender" value="male" required>Male<br>
                <input type="radio" class="form-control" name="gender" value="female" required>Female<br>
                <input type="radio" class="form-control" name="gender" value="other" required>Other
             </div>
-->
                    Gender
                <div class="form-check form-check-radio">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="male" checked>
                        Male
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                    </label>
                </div>
                    
                    <div class="form-check form-check-radio">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female">
                        Female
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                    </label>
                </div>
                    
                    <div class="form-check form-check-radio">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="other">
                        Other
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                    </label>
                </div>
              
                </div>
            </div>
        </div>
        
        <div class="container" style="background-color:white; margin-top:20px; width:600px;">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-12">
                    <b><h3>Acadamic Information</h3></b>
                    <hr>
                    <div class="form-group">
                       College/School Name:
                        <input type="name" class="form-control csname" name="csname" required>
                        <div id="suggesstion-box"></div>
                      </div>
                    
                     <div class="form-group">
                       College/School code:
                        <input type="name" class="form-control cscode" name="cscode" required>
                        <div id="suggesstion-box1"></div>
                      </div>
                    
                      <div class="form-group">
                        Standard:
                        <input type="text" class="form-control" name="std" required>
                     </div>
                    <div class="form-group">
                        School/College address:
                        <textarea name="addr" placeholder="write address here.." class="form-control"></textarea>
                     </div>
                </div>
            </div>
        </div>
        
        <div class="container" style="background-color:white; margin-top:20px; width:600px;">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-12">
                    <b><h3>Additional Information</h3></b>
                    <hr>
                        <div class="form-group">
                           Parent Contact no:
                            <input type="name" class="form-control" name="contact" required>
                          </div>
                        <div class="form-group">
                       Parent Email:
                        <input type="Email" class="form-control" name="prntemail">
                      </div>           

                      <div class="form-group">
                        Resident Address:
                        <textarea class="form-control" name="resaddr" placeholder="Enter your resident address here..." required></textarea>
                     </div>
 -                   <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    
                    <button type="reset" class="btn btn-danger" >Reset</button>
                
                </div>
            </div>
        </div>
    </form>
            <!--   Core JS Files   -->
    <script src="/assets/js/core/jquery.min.js"></script>
    <script src="/assets/js/core/popper.min.js"></script>
    <script src="/assets/js/bootstrap-material-design.js"></script>
      

    <!-- Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>

    <!-- Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="/assets/js/plugins/nouislider.min.js"></script>

    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="/assets/js/material-kit.js?v=2.0.0"></script>
    </body>
</html>
<?php
    require_once('connect.php');
    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $mname=$_POST['mname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $phone=$_POST['phone'];
        $age=$_POST['age'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $clgname=$_POST['csname'];
        $clgcode=$_POST['cscode'];
        $std=$_POST['std'];
        $addr=$_POST['addr'];
        $contact=$_POST['contact'];
        $prntemail=$_POST['prntemail'];
        $resaddr=$_POST['resaddr'];

  $sql="INSERT INTO account(`id`, `fname`, `mname`, `lname`, `email`,`password`, `phone`, `dob`, `age`, `gender`, `clgname`, `clgcode`, `std`, `clgaddr`, `prntcontact`,`prntemail`, `resaddr`) VALUES ('','".$fname."','".$mname."','".$lname."','".$email."','".$password."','".$phone."','".$dob."','".$age."','".$gender."','".$clgname."','".$clgcode."','".$std."','".$addr."','".$contact."','".$prntemail."','".$resaddr."')";
//        echo $fname." ".$mname." ".$lname." ".$email." ".$phone." ".$age." ".$gender." ".$dob." ".$clgname." ".$clgcode." ".$std." ".$addr." ".$contact." ".$resaddr;
        if(mysqli_query($connection,$sql))
        {
            echo"<script>$(function(e) {
                $('#messages').removeClass('hide').addClass('alert alert-success alert-dismissible').slideDown().show();
                $('#messages_content').html('<h4>Inserted Successfully.</h4>');
                $('#modal').modal('show');
                e.preventDefault();
            });</script>";
        }
        else{
            echo"<script>$(function(e) {
                $('#messages').removeClass('hide').addClass('alert alert-danger alert-dismissible').slideDown().show();
                $('#messages_content').html('<h4>Something went wrong.</h4>');
                $('#modal').modal('show');
                e.preventDefault();
            });</script>";
        }
    }
?>