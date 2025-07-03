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

if(isset($_POST['updateUser'])){
    $name= trim($_POST['name']);
    $phone=trim($_POST['phone']);
    $email=trim($_POST['email']);
    $password=trim($_POST['password']);
    $hash_pass=trim(password_hash($password,PASSWORD_DEFAULT));
    $role=trim($_POST['role']);
    $is_ban=trim($_POST['is_ban']== true ? 1:0);
  
   $userId=$_POST['id'];
   $user= getById('users',$userId);
   if($user['status']!= 200){
     redirect("user-edit.php?id=".$userId,"no reocrd added");

   }

    if($name !=""|| $email !="" || $phone != ""|| $password != "" ){
      
        $sql="UPDATE users SET
         name='$name',
        phone='$phone',
        email='$email',
        password='$password',
        is_ban='$is_ban',
        role='$role' 
        where id='$userId'";
        $result=mysqli_query($con,$sql);
        if($result){
            redirect("user.php","updated successfully");
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