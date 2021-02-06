<?php

// if(isset($_POST['submit'])){

$key="591880d7475e9";	// key assigned for your crazydevelopers bulk sms account which is unique.
//$mobile=$_POST['your_mobile']; // mobile number textbox
     $mobile='9970053448';
$senderid="DEMOTR";	// senderid which is assigned to you
$type="text"; 
$n1="Hello, Welcome to Crazydevelopers Bulk SMS Services. Contact Us On: 9822067374,9404543441,8698678684";	// actual message content
$n = str_replace(' ', '%20', $n1);	// new string to accept space also


$ch=curl_init('http://sms.crazydevelopers.in/app/smsapi/index.php?key='.$key.'&type='.$type.'&contacts='.$mobile.'&senderid='.$senderid.'&msg='.$n.'');	// url to visit for sending message through api
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_POSTFIELDS,"");
 curl_setopt($ch, CURLOPT_RETURNTRANSFER,2);
 $data = curl_exec($ch);
 
 

 echo"<script>";
                        echo "alert('Thank you for trying our service. We are always happy to help you!!!!');";
                        echo 'window.location.href="index.html";';
                        echo"</script>";
//}
 ?>