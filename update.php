<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <section class="mt-5">
        <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
            <h1>Update Student Record</h1>
            </div> 
        </div> 
        <div class="row mt-5">
            <div class="col-md-6 p-0">
            <figure class="m-0">
                <img src="images/girl-with-book-1028840_1280.png" class="w-100" alt="">
            </figure>
            </div>
            <div class="col-md-6 pr-0"> 
            <form method="POST" action="">
                <div class="row">

                      <?php

                            include'cone.php';


                             $ids= $_GET['id'];
                            $showquery="select * from strecord where  id={$ids}";
                            $showdata= mysqli_query($con, $showquery);
                            $arrdata= mysqli_fetch_array($showdata);

                        
                                 
           
                            if(isset($_POST['submit'])){

                             $idupdate= $_GET['id'];

                            $fname = $_POST['fname'];
                            $lname = $_POST['lname'];
                            $course= $_POST['course'];
                            $phone = $_POST['phone'];
                            $email = $_POST['email'];
                            $state = $_POST['state'];

                     $updatequery="UPDATE strecord SET   firstname='$fname',  lastname='$lname', course='$course', phone='$phone', email='$email', state='$state' WHERE id= $idupdate ";

                         $query= mysqli_query($con, $updatequery);

                          if($query){
                              echo"data  update successfully";
                          }
                          else{
                              echo"data not update";
                          }
                            
                         header('location:display.php');
                        }
                            ?>


                <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" name="fname" value="<?php echo $arrdata['firstname'];?>">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name" name="lname" value="<?php echo $arrdata['lastname'];?>">
                </div>
                </div>
                </div>

                <div class="row mt-4">
                <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Course" name="course" value="<?php echo $arrdata['course'];?>">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone" name="phone" value="<?php echo $arrdata['phone'];?>">
                </div>
                </div>
                </div>

                <div class="row mt-4">
                <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email id" name="email" value="<?php echo $arrdata['email'];?>">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="State" name="state" value="<?php echo $arrdata['state'];?>">
                </div>
                </div>
                </div>
                <div class="row mt-4">
                <div class="col-md-3">
                    <input type="submit" class="form-control bg-success text-white"  name="submit" value="Update">
                </div>
                <div class="col-md-3 d-flex justfiy-content-center align-items-center">
                <div class="show-btn">
                <a href="display.php">Show Record</a>
                </div>
                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </section>
</body>
</html>