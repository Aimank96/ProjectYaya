<?php
include 'DBconfig.php';
session_start();
 $username=mysqli_real_escape_string($con,$_POST["username"]);
     $Email=mysqli_real_escape_string($con,$_POST["email"]);
     $password=mysqli_real_escape_string($con,$_POST["password"]);
     $password_confirm= mysqli_real_escape_string($con,$_POST["password_confirm"]);
     if($password==$password_confirm){
         $password=md5($password);

       $sql  = "INSERT INTO Users (username,password,email,type) VALUES ('$username','$password','$Email','nurse')";
          if(mysqli_query($con,$sql)){
         $_SESSION["massage"] = "Sucess register";
           header("Location:index.php");
     }
 else {
         echo  mysqli_error($con);
}
     }
     else{
         header("Location:RegisterPDNM.");
     }

?>
