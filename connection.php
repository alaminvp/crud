
<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "crud";

    $con = new mysqli($host,$user,$password,$db);

    if($con-> connect_error){
        die('connect_error'.$con->connect_error);
    }
    
?>                                                          