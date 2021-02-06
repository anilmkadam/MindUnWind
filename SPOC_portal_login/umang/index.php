<?php /*session_start();
if(isset($_SESSION['uname']))
{*/
?>
<?php include "header1.php"; ?>
<?/*php include "menu/amenu3.php"; */?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Project</h1>
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
<?php
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $prjname = $_POST['prjname'];
    $prjdesc = $_POST['prjdesc'];
    $date = date('Y-m-d H:i:s');
    $status='no';
    $rd=rand(1,500);
    $file_name =$_FILES['upload']['name'];
    $store_file=$rd.$file_name;
    $file_type=$_FILES['upload']['type'];
    $file_size=$_FILES['upload']['size'];
    $file_tmp_loc=$_FILES['upload']['tmp_name'];




if (empty($prjname)||empty($id))
{
 echo " <div class='alert alert-danger'><strong>ERROR</strong> - Empty fields are not allowed !</div>"; 
 }
else
{
include "connect.php";
    
    $res=mysqli_fetch_array(mysqli_query($con,"select * from account where id='".$id."'"));
    if(!$res){
        echo " <div class='alert alert-danger'> Not Valid ID. Please Check!, or contact to moderator.<a href='addproject.php'><--- Go Back</a></div>";
        exit();
    }
    $stud_name=$res['fname']." ".$res['mname']." ".$res['lname'];
    $institute_code=$res['clgcode'];
    

$query="INSERT INTO umang_submission(stud_id,stud_name,id,institute_id,descr,file_name,status,date) VALUES ('$id','$stud_name','','$institute_code','$prjdesc','$store_file','$status','$date')";
if(mysqli_query($con,$query))
    {
echo " <div class='alert alert-success'> Successfully Added. <a href='viewcs.php'>Home</a></div>";
    }
    else
    {
        echo "error";
        print mysqli_error();
    }

// echo "<script>location.href='addevent.php </script";
   }
    $file_store='./project/'.$store_file;
    $move=move_uploaded_file($file_tmp_loc,$file_store);
    if(!$move)
    {
        //die('File did not upload');
        echo " <div class='alert alert-danger'> Something Went Wrong.</div>";
    }
}  
    
?>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            fill the details of project(upload pdf files only)
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="#" method="post" enctype="multipart/form-data" name="upload">
                                       
                                        <div class="form-group">
                                            <label>Your ID</label>
                                            <input class="form-control" placeholder="Enter Your ID" name="id">
                                                
                                        
                                        </div>
                                        <div class="form-group">
                                            <label>Project Title</label>
                                            <input class="form-control" placeholder="Enter Project Title" name="prjname">
                                                <p class="help-block">Example "Social Works"</p>
                                        
                                        </div>
                                        <div class="form-group">
                                        
                                            <label>Project Description</label>
                                             <p class="help-block" style="font-weight:bold">Max 1000 Character Allow </p>
                                             <textarea class="form-control" rows="3" placeholder="Enter Description" name="prjdesc" maxlength="1000"></textarea>
                                            
                                               
                                        
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Project file </label>
                                            <input type="file" name="upload"  id="upload" />
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary" name="submit">Submit Button</button>
                                        <button type="reset" class="btn btn-danger">Reset Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
<?php


?>

