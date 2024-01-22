<?php

$title = 'Edit list';
ob_start(); 

?>

<h1>Edit list</h1>

<form action="index.php?page=users&action=update&id=<?php echo $user['id']; ?>" method="POST">
    <div class="from-group">
        <label for="login">Login</label>
        <input type="text" class="form-control" id="login" name="login" value="<?php echo $user['login']; ?>" required>
    </div>
    <div class="from-group">
        <label for="admin">Admin</label>
        <select class="form-control" name="admin" id="admin">
            <option value="0" <?php if(!$user['is_admin']) { echo 'selected';}?> >No</option>
            <option value="1" <?php if($user['is_admin']) { echo 'selected';}?>>Yes</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">update</button>
</form>



<?php $content = ob_get_clean();

include 'app/views/layout.php';

?>
