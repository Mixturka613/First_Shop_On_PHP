<?php $changeVar = $_GET['change'];

?>

<?php if($changeVar === "edit") { ?>
    
<form method="POST" action="users/user__update.php" class="admin__forms">

    <input type="text" name="change" value="edit" style="display: none;">
    <input type="text" name="id" placeholder="id пользователя" require />

    <input type="text" name="username" placeholder="Имя пользователя">

    <select name="admin" id="">
        <option value="true">admin</option>
        <option value="false">user</option>
    </select>

    <input type="submit" value="edit">

</form>

<?php } elseif($changeVar === 'delete') { ?>

<form method="POST" action="users/user__update.php" class="admin__forms">

    <input type="text" name="change" value="delete" style="display: none;">
    <input type="text" name="id" placeholder="id пользователя" require>

    <input type="submit" value="delete">

</form>

<?php } ?>