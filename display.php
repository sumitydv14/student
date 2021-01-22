<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Student Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
</head>

<body>
       <section class="display" style="background-image:url('images/learning-4264032_1920.jpg'); width:100%; height:100%;">
           <div class="container">
               <div class="row mt-5">
                   <div class="col-md-12 text-center">
                       <h1>Show Student Record</h1>
                   </div>
               </div>
               <div class="row"> 
                   <div class="col-md-12">
                        <div class="home-btn d-flex justify-content-end align-items-center"> 
                            <a href="index.php" style="padding: 10px 20px; background-color:yellow; color:#000;">Add Record</a>
                        </div>
                   </div>
               </div>
               <div class="row mt-5">
                    <div class="col-md-12"> 
                        <div class="table-responsive">
                             <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Course</th>
                                    <th scop="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">State</th>
                                    <th scope="col">Oprator</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                   
                                    <?php
                                        
                                        include'cone.php';
                                        
                                        $selectquery="SELECT * FROM strecord";
                                        $runquery=mysqli_query($con,$selectquery);

                                        $num=mysqli_num_rows($runquery);
                                        
                                       while($result=mysqli_fetch_array($runquery)){

                                        ?>
                                        <tr>
                                        <th scope="row"><?php echo $result['id']; ?></th>
                                        <td><?php echo $result['firstname'];?></td>
                                        <td><?php echo $result['lastname'];?></td>
                                        <td><?php echo $result['course'];?></td>
                                        <td><?php echo $result['phone'];?></td>
                                        <td><?php echo $result['email'];?></td>
                                        <td><?php echo $result['state'];?></td>
                                        <td><a href="update.php?id=<?php echo $result['id'];?>" data-toggle="tooltip" data-placement="bottom" title="Update"><i class="fas fa-edit update"></i></a>
                                        <a href="delete.php?idth=<?php echo $result['id'];?>" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash delete ml-4"></i></a>
                                       </td>
                                                                                    
                              <?php

                                    }

                                    ?>
                                    </tr>
                                   
                                   
                                </tbody>
                                </table>
                    </div>
                    </div>
               </div>
           </div>
       </section>

       <script>
           $(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
      </script>
</body>
</html>