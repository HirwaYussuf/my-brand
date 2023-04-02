<?php
 
 $connection = mysqli_connect("localhost","root","","ATLAS_DB");
 if($connection){
     // echo"connection successfully";
 }
 else{
     die("connection error" . mysqli_connect_error());
 }
 if(isset($_POST['save'])){
    $username = $_POST['username'];
    $email= $_POST['email'];
    $password = $_POST['password'];
    
        $insert = "INSERT INTO `sign_up`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
        $runinsert = mysqli_query($connection,$insert);
        if($runinsert){
             echo"<script>alert('Sign Up successfully')</script>";
           echo"<meta http-equiv='refresh'content= '0.5; url=http:login.php'>";
        }
        else{
            die("insert error" . mysqli_error($connection));
        }

}





?>