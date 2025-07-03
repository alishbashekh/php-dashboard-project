<?php include("includes/header.php")?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>edit user
                <a href="user.php" class="btn btn-danger float-end">back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="code.php" method="POST">
                  <?php
$param = checkParamId('id');
if (!is_numeric($param)) {
    echo '<h5>' . htmlspecialchars($param) . '</h5>';
    return;
}

$user = getById('users', $param);
if ($user['status'] !== 200) {
    echo '<h5>' . htmlspecialchars($user['message']) . '</h5>';
    return;
}
?>
<form action="code.php" method="POST">
  <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['data']['id']);?>"required>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label>Username:</label>
      <input type="text" name="name"
             value="<?php echo htmlspecialchars($user['data']['name']); ?>"
             required class="form-control">
    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                        <label>phone-no:</label>
                        <input type="number" name="phone"  value="<?php echo htmlspecialchars($user['data']['phone']); ?>" required class="form-control">
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                        <label>email:</label>
                        <input type="email" name="email"  value="<?php echo htmlspecialchars($user['data']['email']); ?>" required class="form-control">
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                        <label>password:</label>
                        <input type="password" name="password"  value="<?php echo htmlspecialchars($user['data']['password']); ?>" required class="form-control">
                    </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                        <label>select role</label>
                        <select name="role" required class="form-select">
                            <option value="">select role</option>
                            <option value="admin"<?php echo htmlspecialchars($user['data']['role'])== 'admin' ? 'selectable':''; ?>>Admin</option>
                            <option value="user"<?php echo htmlspecialchars($user['data']['role'])== 'user' ? 'selectable':''; ?>>User</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                        <label>Is Ban</label>
                        <br>
                        <input type="checkbox" name="is_ban" value="<?php echo htmlspecialchars($user['data']['is_ban'])== true ? 'checked':''; ?>" style="width:30px;height:30px">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="mb-3 text-end">
                        <br>
                        <button type="submit" name="updateUser" class="btn btn-primary">update</button>
                    </div>
                    </div>
                   </div>

                        <?php

                     
                    ?>
                </form>
                
            </div>
        </div>
    </div>
</div>



<?php include("includes/footer.php")?>