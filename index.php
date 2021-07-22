<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h2 class="text-center text-capitalize mb-3">Data Submit <a class="btn btn-primary btn-sm" href="show.php">Show</a></h2>

                <?php
                    if(isset($_GET['valid']) && $_GET['valid']== 'error'){
                        ?>
                        <div class="alert alert-danger">
                            All Field Are Required
                        </div>

                        <?php 
                    }
                ?>

                <?php
                    if(isset($_GET['insert']) && $_GET['insert']== 'success'){
                        ?>
                        <div class="alert alert-success">
                            Succesfully Data Submit
                        </div>

                        <?php
                    }
                ?>
            
                <form action="insert.php" method="POST">
                    <div class="row mb-2">
                        <div class="col">
                            <label for="name">Enter Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="col">
                            <label for="email">Enter Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="phone">Phone</label>
                            <input type="number" name="phone" id="phone" class="form-control">
                        </div>
                        <div class="col">
                            <label for="division">Division</label>
                            <select name="division" id="division" class="form-control">
                                <option value="" selected>One Select</option>
                                <option value="dhaka">Dhaka</option>
                                <option value="rangpur">Rangpur</option>
                                <option value="rajshahi">Rajshahi</option>
                                <option value="sylet">Sylet</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="" class="mt-2">Gender</label> <br>

                            <input type="radio" value="male" name="gender" id="male">
                            <label for="male">Male</label>
                           
                            <input type="radio" value="female" name="gender" id="female">
                            <label for="female">Female</label>
                        </div>
                        <div class="col">
                            <label for="" class="mt-2">Hobby</label> <br>

                            <input type="checkbox" value="cricket" id="cricket" name="hobby[]">
                            <label for="cricket">Cricket</label>

                            <input type="checkbox" value="football" id="football" name="hobby[]">
                            <label for="football">Football</label>

                            <input type="checkbox" value="badminton" id="badminton" name="hobby[]">
                            <label for="badminton">Badminton</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                        <label for="message">Message</label>
                            <textarea name="message" id="message" class="form-control" cols="10" rows="5" placeholder="Write something"></textarea>
                        </div>
                    </div>

                    <input type="submit" value="Submit" class="btn btn-success mt-2" name="submit">
                    <input type="reset" value="Reset" class="btn btn-danger mt-2 ml-3">

                </form>
            </div>
        </div>
    </div>
</body>
</html> 