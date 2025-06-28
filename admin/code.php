<?php
include("../config/function.php");

if(isset($_POST['save-user'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $hash_pass=password_hash($password,PASSWORD_DEFAULT);
    $role=$_POST['role'];
    $is_ban=$_POST['is_ban']== true ? 1:0;

    if($name !=""|| $email !="" || $password != "" ){
      
        $sql="INSERT INTO users(name,phone,email,password,is_ban,role) VALUES('$name','$phone','$email','$hash_pass','$is_ban','$role')";
        $result=mysqli_query($con,$sql);
        if($result){
            redirect("user.php","added successfully");
        }
        else{
            redirect("user-create.php","something went wrong");
        }

    }
    else{
       redirect("user-create.php","please input all fields");
    }
   
}


?>