<?php
$i=0;
    if(isset($_POST['stud_id']))
        $i=$_POST['stud_id'];
include('connect.php');
$sql="SELECT * FROM account where id='$i'";
$result=mysqli_fetch_array(mysqli_query($connection,$sql));

?>
<html>
    <head>
        <title>
            Update Account
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
        <form action="update.php" method="GET">
        <div class="container" style="background-color:white; margin-top:20px; width:600px;">
            <div class="row">
                
                <div class="col-sm-12 col-md-6 col-lg-12">
                    <b><h3>Personal Information</h3></b>
                    <hr>
                 
                    <input type="hidden" name="id" value="<?php echo $i;?>">
              <div class="form-group">
               First Name:
                <input type="name" class="form-control" name="fname" value="<?php echo $result['fname']; ?>" required>
              </div>
              <div class="form-group">
                Middle name:
                <input type="text" class="form-control" name="mname" value="<?php echo $result['mname']; ?>">
             </div>
            <div class="form-group">
                Last name:
                <input type="text" class="form-control" name="lname" value="<?php echo $result['lname']; ?>" required>
             </div>
            <div class="form-group">
                Email:
                <input type="email" class="form-control" name="email" value="<?php echo $result['email']; ?>">
             </div>
                <div class="form-group">
                Password:
                <input type="password" class="form-control" name="password" >
             </div>
            <div class="form-group">
                Phone No:
                <input type="text" class="form-control" name="phone" value="<?php echo $result['phone']; ?>"required>
             </div>
            <div class="form-group">
                Date of Birth:
                <input type="text" class="form-control" name="dob" id="dob" value="<?php echo $result['dob']; ?>" required>
                <span id="note" style="color:red">Note: Enter Date of Birth in format DD/MM/YYYY eg:18/04/1997</span>
             </div>
            <div class="form-group">
               Age:
                <input type="text" class="form-control" name="age" id="age" value="<?php echo $result['age']; ?>" required>
<!--                <span id="age"></span>-->
                    
             </div>

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
                        <input type="name" class="form-control csname" name="csname" value="<?php echo $result['clgname']; ?>" required>
                        <div id="suggesstion-box"></div>
                      </div>
                    
                     <div class="form-group">
                       College/School code:
                        <input type="name" class="form-control cscode" name="cscode" value="<?php echo $result['clgcode']; ?>" required>
                        <div id="suggesstion-box1"></div>
                      </div>
                    
                      <div class="form-group">
                        Standard:
                        <input type="text" class="form-control" name="std" value="<?php echo $result['std']; ?>" required>
                     </div>
                    <div class="form-group">
                        School/College address:
                        <textarea name="addr" placeholder="write address here.." class="form-control" ></textarea>
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
                            <input type="name" class="form-control" name="contact" value="<?php echo $result['prntcontact']; ?>" required>
                          </div>
                        <div class="form-group">
                       Parent Email:
                        <input type="Email" class="form-control" name="prntemail" value="<?php echo $result['prntemail']; ?>">
                      </div>           

                      <div class="form-group">
                        Resident Address:
                        <textarea class="form-control" name="resaddr" placeholder="Enter your resident address here..."  required></textarea>
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
    if(isset($_GET['submit'])){
        $id=$_GET['id'];
        $fname=$_GET['fname'];
        $mname=$_GET['mname'];
        $lname=$_GET['lname'];
        $email=$_GET['email'];
        $password=md5($_GET['password']);
        $phone=$_GET['phone'];
        $age=$_GET['age'];
        $dob=$_GET['dob'];
        $gender=$_GET['gender'];
        $clgname=$_GET['csname'];
        $clgcode=$_GET['cscode'];
        $std=$_GET['std'];
        $addr=$_GET['addr'];
        $contact=$_GET['contact'];
        $prntemail=$_GET['prntemail'];
        $resaddr=$_GET['resaddr'];
        

  $sql="UPDATE `account` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`email`='$email',`password`='$password',`phone`='$phone',`dob`='$phone',`age`='$age',`gender`='$gender',`clgname`='$clgname',`clgcode`='$clgname',`std`='$std',`clgaddr`='$addr',`prntcontact`='$contact',`prntemail`='$prntemail',`resaddr`='$resaddr' WHERE id=$id";
//        $sql1="UPDATE account set fname='$fname',mname=$mname',lname='$lname',email ='$email', password ='$password', phone ='$phone', dob ='$dob', age ='$age', gender ='$gender', clgname ='$clgname', clgcode ='$clgcode', std ='$std', clgaddr ='$addr', prntcontact ='$contact', prntemail ='$prntemail', resaddr ='$resaddr' WHERE id=$id";
//        echo $fname." ".$mname." ".$lname." ".$email." ".$phone." ".$age." ".$gender." ".$dob." ".$clgname." ".$clgcode." ".$std." ".$addr." ".$contact." ".$resaddr;
        
        if(mysqli_query($connection,$sql))
        {
            echo"<script>$(function(e) {
                $('#messages').removeClass('hide').addClass('alert alert-success alert-dismissible').slideDown().show();
                $('#messages_content').html('<h4>updated Successfully.</h4>');
                $('#modal').modal('show');
                e.preventDefault();
            });
            window.location.href='updateStud_Account.html';
            </script>";
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