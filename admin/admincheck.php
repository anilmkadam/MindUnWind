<?php
   $con=mysqli_connect("localhost","root","","mindunwind");

 if(isset($_POST['submit']))
 { 
    
     $user=$_POST['email'];
     $password=$_POST['pass'];
     $sql="select * from admin where uname='$user' and password='$password'";
     $res=mysqli_query($con,$sql);
     
      $cnt=mysqli_num_rows($res);
     if($cnt>0)
     {
         header('location:updateweb.html');
     }
     else
     {
         echo "<script>window.alert('Invalid username or password')";
         echo "</script>";
        header('location:index.html');
     }
     

 }

?>
