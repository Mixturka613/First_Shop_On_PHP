<?php $changeVar = $_GET['change'];


if ($changeVar === "edit") { ?>

<form action="authors/author__update.php" method="POST" class="admin__forms">

    <input type="text" name="change" value="edit" style="display: none;">
    <input required type="text" placeholder="id автора" name="id">

    <input required type="text" placeholder="Имя автора" name="name">
    <input required type="text" placeholder="profession" name="profession">

    <textarea required name="biography" placeholder="Биография"></textarea>

    <textarea required name="description" placeholder="Описание"></textarea>

    <input type="submit" value="edit">

</form>


<?php } elseif ($changeVar === "add") { ?>

<form action="authors/author__update.php" method="POST" class="admin__forms">

    <input type="text" name="change" value="add" style="display: none;">

    <input required type="text" name="name" placeholder="Имя автора">
    <input required type="text" name="birthdate" placeholder="Дата рождения">
    <input  requiredtype="text" name="diedate" placeholder="дата смерти">
    <input required type="text" name="place_of_birth" placeholder="место рождения">
    <input required type="text" name="proffesion" placeholder="Професии">
    <textarea required name="description" placeholder="Краткое описание"></textarea>
    <textarea required name="biography" placeholder="Биография"></textarea>

    <input type="submit" value="Add">
</form>

<?php } elseif($changeVar === "delete") { ?>

<form action="authors/author__update.php" method="POST" class="admin__forms">
    <input type="text" name="change" value="delete" style="display: none;">
    <input required type="text" placeholder="id автора" name="id">

    <input type="submit" value="Delete">
</form>

<?php } else {

    header("Location: http://coolbook/admin/admin.php");

}
?>