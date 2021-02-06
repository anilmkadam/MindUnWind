<?php
require_once('header1.php');
require_once('connect.php');
if(isset($_GET['key1']))
    $id=$_GET['key1'];

$sql="UPDATE `umang_submission` SET `stud_id`=$id,`status`='yes'";
if(mysqli_query($con,$sql))
{
    echo " <div class='alert alert-success'> Project Approved.<a href='validated.php'><--- Home</a></div>";
        exit();
}
else
    echo " <div class='alert alert-danger'> Something went wrong.<a href='validated.php'><--- Go Back</a></div>";
        


?>
