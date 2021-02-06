<?php
define ('DBSERVER', 'localhost');
define ('DBUSER', 'root');
define ('DBPASS','');
define ('DBNAME','sih');
$connection = mysqli_connect(DBSERVER, DBUSER, DBPASS,DBNAME) or die("Can't connect to server. Please check credentials and try again");

if($connection)
    echo "success";
else
    echo "fail";

if(isset($_REQUEST['query'])){
    $query = $_REQUEST['query'];
    $sql = mysqli_query ($connection,"SELECT name FROM clgnames WHERE name LIKE '%{$query}%'");
//    $row = mysqli_fetch_array($sql);
//    echo $row['name'];
    $array = array();
     while ($row = mysqli_fetch_array($sql)) {
        $array[] = array (
            'value' => $row['name'],
        );
    }
     echo json_encode ($array);
}
?>
