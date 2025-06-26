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
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                     <th>id</th>
                     <th>name</th>
                     <th>email</th>
                     <th>phone</th>
                     </tr>
                    </thead>
                    <tbody>
                     <tr>
                      <td>1</td>
                      <td>name</td>
                      <td>email</td>
                      <td>phone</td>
                      <td>
                        <a href="user-edit.php" class="btn btn-success">update</a>
                        <a href="user-delete.php" class="btn btn-danger">delete</a>
                      </td>
                    </tr>

                    </tbody>
                    
                </table>

            </div>
        </div>
    </div>
</div>



<?php include("includes/footer.php")?>