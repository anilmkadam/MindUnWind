<?php
    define ('DBSERVER', 'localhost');
    define ('DBUSER', 'root');
    define ('DBPASS','');
    define ('DBNAME','mindunwind');
    $connection = mysqli_connect(DBSERVER, DBUSER, DBPASS,DBNAME) or die("Can't connect to server. Please check credentials and try again");

//    if($connection)
//        echo "success";
//    else
//        echo "fail";
    ?>