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
              <h1>Studnent Ragistration Form</h1>
             </div> 
          </div> 
          <div class="row mt-5">
            <div class="col-md-6 p-0">
               <figure class="m-0">
                 <img src="images/girl-with-book-1028840_1280.png" class="w-100" alt="">
               </figure>
            </div>
            <div class="col-md-6 pr-0"> 
               <form method="POST" action="insert.php">
                 <div class="row">
                  <div class="col-md-6">
                   <div class="form-group">
                     <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" name="fname">
                   </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                     <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name" name="lname">
                   </div>
                  </div>
                 </div>

                 <div class="row mt-4">
                  <div class="col-md-6">
                   <div class="form-group">
                     <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Course" name="course">
                   </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                     <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone" name="phone">
                   </div>
                  </div>
                 </div>

                 <div class="row mt-4">
                  <div class="col-md-6">
                   <div class="form-group">
                     <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email id" name="email">
                   </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                     <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="State" name="state">
                   </div>
                  </div>
                 </div>
                 <div class="row mt-4">
                   <div class="col-md-3">
                      <input type="submit" class="form-control bg-success text-white"  name="submit">
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