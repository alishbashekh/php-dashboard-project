<?php
session_start();

include("dbcon.php");

function validate($input){

    return mysqli_real_escape_string($con,$input);
}

function redirect($url,$status){
        $_SESSION ['status'] = $status;
        header("location:".$url);
        exit(0);
    }

function alertmsg(){
    if(isset($_SESSION['status'])){
      echo '<div class="alert alert-success">
             <h4>'.$_SESSION['status']. '</h4> </div>';
      unset($_SESSION['status']);      
    }
}    
?>