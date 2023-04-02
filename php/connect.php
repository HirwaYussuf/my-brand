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
    $password = $_POST['password'];
    $select = "SELECT* FROM sign_up WHERE username = '".$username."' AND password = '".$password."' LIMIT 1";
    $runselectuser = mysqli_query($connection,$select);
    if(mysqli_num_rows($runselectuser)==1){
        echo"<script>alert('Login successfully')</script>";
        echo"<meta http-equiv='refresh'content= '0.5; url=http:index.php'>"; 
    } 
    else{
        die("<script>alert('Incorrect USERNAME and PASSWORD try again')</script>".mysqli_error($connection)); 
        echo"<meta http-equiv='refresh'content= '0.5; url=http:login.php'>";  
    }
}




?>