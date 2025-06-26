<?php include("includes/header.php")?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>add user
                <a href="user.php" class="btn btn-danger float-end">back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="row">
                    <div class="col-md-6">
                    <div class="mb-3">
                        <label>username:</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                        <label>phone-no:</label>
                        <input type="number" name="phone" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                        <label>email:</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                        <label>password:</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                        <label>select Role:</label>
                        <select name="role" class="form-select">
                            <option value="">select role</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                        <label>check-box:</label>
                        <br>
                        <input type="checkbox" name="is_ban" style="width:30px;height:30px">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="mb-3 text-end">
                        <br>
                        <button type="submit" name="save-user" class="btn btn-primary">SUBMIT</button>
                    </div>
                    </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>



<?php include("includes/footer.php")?>