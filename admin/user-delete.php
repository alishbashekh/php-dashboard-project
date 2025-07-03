<?php
include("../config/function.php");

$paramResult= checkParamId('id');
    if(is_numeric($paramResult)){
     $userId= mysqli_real_escape_string($con,$paramResult);
     $user=getById('users',$userId);
     if($user['status'] == 200){
      $userDelete = deletequery('users',$userId);
      if($userDelete){
        header("location:http://localhost/php-dashboard-project/admin/user.php?msg=data deletd!");
      }else{
        header("location:http://localhost/php-dashboard-project/admin/user.php?msg=somthing went wrong");
        }
     }else{
         echo"noooo";
     }
    }else
    { echo"no data found";
    }
?>