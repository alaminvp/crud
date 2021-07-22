<?php
    
    require 'connection.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM practice WHERE id='$id'";

        if($con->query($sql)== true){
            header('location: show.php?del=success');
        }
    }


?>