<?php include("includes/header.php")?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>users
                <a href="user-create.php" class="btn btn-primary float-end">add users</a>
                </h4>
            </div>
            <div class="card-body">
                <?php alertmsg() ?>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Phone</th>
                     <th>Role</th>
                     <th>Status</th>
                     <th>Action</th>
                     </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql="SELECT * FROM users";
                        $result=mysqli_query($con,$sql); 
                        if($result){
                           foreach($result as $row){?>
                      <tr>
                      <td><?php echo $row['id']?></td>
                      <td><?php echo $row['name'] ?></td>
                      <td><?php echo $row['email']?></td>
                      <td><?php echo $row['phone']?></td>
                      <td><?php echo $row['role']?></td>
                      <td><?php echo $row['is_ban']==1 ?'offline':'online' ?></td>
                      <td>
                        <a href="user-edit.php?id=<?php echo $row['id']?>" class="btn btn-success">update</a>
                        <a href="user-delete.php?id=<?php echo $row['id']?>" class="btn btn-danger"
                        onclick="return confirm('you sure you want to del this data')"
                        >
                        delete</a>
                      </td>
                    </tr>
                          <?php }
                        }
                        else{ ?>
                             <tr>
                                <td colspan 2>no record found</td>
                             </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>



<?php include("includes/footer.php")?>