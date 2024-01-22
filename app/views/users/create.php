<?php

$title = 'Create list';
ob_start(); 

?>

<h1>Create list</h1>

<form action="index.php?page=users&action=store" method="POST">
    <div class="from-group">
        <label for="login">Login</label>
        <input type="text" class="form-control" id="login" name="login" required>
    </div>
    <div class="from-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="from-group">
        <label for="confirm_password">Confirm password</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
    </div>
    <div class="from-group">
        <label for="admin">Admin</label>
        <select class="form-control" name="admin" id="admin">
            <option value="0">No</option>
            <option value="1">Yes</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>



<?php $content = ob_get_clean();

include 'app/views/layout.php';

?>
