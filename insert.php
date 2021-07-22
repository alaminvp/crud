<?php
    require 'connection.php';

    if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']== "POST"){
        function test($data){
                $data = trim($data);
                $data = stripcslashes($data);
                $data = htmlspecialchars($data);
                return $data;
        }

        $create_at = $_POST['create_at'];
        $name = test($_POST['name']);
        $email = test($_POST['email']);
        $phone = test($_POST['phone']);
        $division = $_POST['division'];
        $gender = $_POST['gender'];
        $hobby = ($_POST['hobby'])?implode(',',$_POST['hobby']):'';
        $message = test($_POST['message']);

        if($name != '' && $email != '' && $phone != '' && $division != '' && $gender != '' && $hobby != '' && $message !=''){

            $sql = "INSERT INTO `practice`(`name`, `email`, `phone`, `division`, `gender`, `hobby`, `message`) VALUES ('$name','$email','$phone','$division','$gender','$hobby','$message')";

            if($con->query($sql)==true){
                header('location: index.php?insert=success');
            }
            else{
                echo 'something went wrong';
            }

        }
        else{
            header('location: index.php?valid=error');
        }   
    }
    else{
        header('location: index.php');
    }



?>