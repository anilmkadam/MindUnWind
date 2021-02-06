<?php  
  
$conn = new mysqli('localhost', 'root', '');  
mysqli_select_db($conn, 'sih');  
  
$setSql = "SELECT `stud_id`,`stud_name`,`descr`,`status` FROM `umang_submission`";  
$setRec = mysqli_query($conn, $setSql); 
if(!$setRec)
    echo "fail";
    
  
$columnHeader = '';  
$columnHeader = "Student NO" . "\t" . "student Name" . "\t" . "Description" . "\t"."Status";  
  
$setData = '';  
  
while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail_Reoprt.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?> 