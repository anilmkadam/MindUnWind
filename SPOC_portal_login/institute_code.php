<?php
require_once("connect.php");

if(!empty($_POST["keyword"])) 
{
    $temp=$_POST['keyword'];
    echo $temp;
    $query ="SELECT * FROM clgnames WHERE name = '$temp'";
    $result =mysqli_fetch_array(mysqli_query($connection,$query));
    if($result)
    {
        
echo '<input type="text" class="form-control" value='.$result["clgcode"].' placeholder="institute code" name="code">';

    }
} 
?>