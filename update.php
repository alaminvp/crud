<?php
    require 'connection.php';

    if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST"){
        function test($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $id = $_POST['id'];
        $name = test($_POST['name']);
        $email = test($_POST['email']);
        $phone = test($_POST['phone']);
        $division = $_POST['division'];
        $gender = $_POST['gender'];
        $hobby = ($_POST['hobby'])?implode(',',$_POST['hobby']):'';
        $message = test($_POST['message']);

        if($name != '' && $email != '' && $phone != '' && $division != '' && $gender != '' && $hobby != '' && $message != ''){

            $sql = "UPDATE practice SET `name`='$name',`email`='$email',`phone`='$phone',`division`='$division',`gender`='$gender',`hobby`='$hobby',`message`='$message' WHERE id = '$id'";

            if($con->query($sql) == true){
                header('location:edit.php?id='.$id.'&update=success');
            }else{
                echo 'something went worng';
            }



        }else{
            header('location:edit.php?id='.$id.'&valid=error');
        }

    }else{
        header('location:edit.php');
    }





?> 