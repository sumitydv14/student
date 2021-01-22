<?php

include'cone.php';

 if(isset( $_POST['submit'])){

   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $course= $_POST['course'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $state = $_POST['state'];

 $sql= "INSERT INTO strecord(firstname, lastname, course, phone, email, state) VALUES ('$fname','$lname','$course','$phone','$email','$state')";

 $query=mysqli_query($con, $sql);

 if($query>=0){

     echo"record insert";
 }
 else{
     echo"record not insert";
 }

  header("location:http://localhost/student_Record/index.php");
 }
 
?>