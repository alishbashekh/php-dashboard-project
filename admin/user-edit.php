<?php include("includes/header.php");
$id=$_GET['id'];
$sql="select * from `users` where id=$id";
$result=mysqli_query($con,$sql);

$row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $email=$row['email'];
    $phone=$row['phone'];
    $role=$row['role'];
    $isban=$row['is_ban'];
    $user=$row['userId'];


if(isset($_POST["update-user"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone=$_POST['phone'];
    $role=$_POST['role'];
    $isban=$_POST['is_ban'];
    $user=$_POST['userId'];
    

    $sql="update `users`set name='$name', email='$email' ,phone='$phone',role='$role',is_ban'$isban' where id=$user";
    if(mysqli_query($con,$sql)){
      echo "data updated succesfully";
    }
    else{
       echo "not inserted";
    }
    };





?>
<input type="hidden" name="userId" class="form-control" value=<?php echo $user ?>>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit user
                <a href="user-read.php" class="btn btn-danger float-end">back</a>
                </h4>
            </div>
            <div class="card-body">
                <?php alertmsg() ?>
                <form action="code.php" method="post">
                    <div class="row">
                    <div class="col-md-6">
                    <div class="mb-3">
                        <label>username:</label>
                        <input type="text" name="name" class="form-control" value=<?php echo $name ?>>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                        <label>phone-no:</label>
                        <input type="number" name="phone" class="form-control" value=<?php echo $phone ?>>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                        <label>email:</label>
                        <input type="email" name="email" class="form-control" value=<?php echo $email ?>>
                    </div>
                     </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                        <label>select role</label>
                        <select name="role" class="form-select">
                            <option value="">select role</option>
                            <option value="admin"<?php echo $role == admin ?'selected':'' ?>>Admin</option>
                            <option value="user" <?php echo $role == user ?'selected':'' ?>>User</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                        <label>Is Ban</label>
                        <br>
                        <input type="checkbox" name="is_ban" style="width:30px;height:30px" value= <?php echo $isban == true ?'checked':'' ?>>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="mb-3 text-end">
                        <br>
                        <button type="submit" name="update-user" class="btn btn-primary">update</button>
                    </div>
                    </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>



<?php include("includes/footer.php")?>