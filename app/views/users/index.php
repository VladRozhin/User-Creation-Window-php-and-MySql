<?php

$title = 'User list';
ob_start(); 

$pag = $_GET['pagination'];
$count = 10;

$pag_count = ceil(count($users) / $count);

?>

<h1>User list</h1>
<a href="index.php?page=users&action=create" class="btn btn-success">Create user</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Login</th>
            <th scope="col">Admin</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php 
     for($i=$pag*$count; $i < ($pag+1)*$count; $i++): 
            if(count($users) <= $i){
                break;
            } else{
        ?>
        <tr>
            <th scope="row"><?php echo $users[$i]["id"]; ?></th>
            <td><?php echo $users[$i]["login"]; ?></td>
            <td><?php echo $users[$i]["is_admin"] ? "Yes" : "No"; ?></td>
            <td><?php echo $users[$i]["created_at"]; ?></td>
            <td>
                <a href="index.php?page=users&action=edit&pagination=0&id=<?php echo $users[$i]['id']; ?>" class="btn btn-primary">Edit</a>
                <a href="index.php?page=users&action=delete&pagination=0&id=<?php echo $users[$i]['id']; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php } endfor; ?>
    </tbody>
</table>

<div style="justify-content:center;display:flex;gap:50px;">
    <?php for($i=0;$i < $pag_count; $i++) : ?>
    <a href="index.php?page=users&pagination=<?php echo $i; ?>" style="border-radius: 10px;border:1px solid rgb(186, 186, 186);color: black;text-decoration:none;padding:10px 20px;" >
        <?php echo $i + 1; ?>
    </a>
    <?php endfor; ?>
</div>


<?php $content = ob_get_clean();
include 'app/views/layout.php';
?>
