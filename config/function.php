<?php
session_start();

include("dbcon.php");
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
function checkParamId($paramtype){
  if(isset($_GET[$paramtype])){
    if($_GET[$paramtype]!= null){
      return $_GET[$paramtype];
    }else{
      echo "no record found";
    }
  }else{
    echo"no record given";
  }
}    
function getById($tablename,$id){
  global $con;
  $table = mysqli_real_escape_string($con,$tablename);
  $id = mysqli_real_escape_string($con,$id);
  $sql="SELECT * from $table where id='$id' LIMIT 1 ";
  $result= mysqli_query($con,$sql);
  if($result){
    if(mysqli_num_rows($result)==1){
       $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $response =[
      'status'=>200,
       'data'=>$row
    ];
    return $response;
    }
    else{
       $response =[
      'status'=> 404,
       'message'=>"error not found"
    ];
    return $response;
    }
  }else{
    $response =[
      'status'=> 500,
       'message'=>"somthing went wrong"
    ];
    return $response;
  }
}
function deletequery($tablename,$id){
  global $con;
  $table=mysqli_real_escape_string($con,$tablename);
  $id=mysqli_real_escape_string($con,$id);
   
  $sql="DELETE FROM users where id=$id LIMIT 1";
  $result= mysqli_query($con,$sql);
  return $result;
}
?>