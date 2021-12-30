<?php $changeVar = $_GET['change']; ?>

<?php if ($changeVar === "edit") { ?>

    <form method="POST" action="books/book__update.php" class="admin__forms">

        <input required type="text" name="change" value="edit" style="display: none;">

        <input required type="text" placeholder="id книги" name="id">
        <input required type="text" placeholder="url на картинку" name="imgUrl">

        <textarea required name="description" id="" cols="30" rows="10" placeholder="Описание..."></textarea>

        <input required type="number" name="price" >

        <input type="submit" value="Edit">

    </form>


<?php } elseif ($changeVar === "add") { ?>


    <form method="POST" action="books/book__update.php" class="admin__forms">

        <input required type="text" name="change" value="add" style="display: none">

        <input required type="text" name="book__name" placeholder="Название книги">

        <input required type="text" name="imgUrl" placeholder="Ссылка на картинку">

        <input required type="text" name="author" placeholder="Введите имя автора">

        <input required type="number" name="price" placeholder="price">

        <input type="text" name="genre" placeholder="Жанр">

        <textarea required placeholdeder="Описание..." name="description" id="" cols="30" rows="10"></textarea>

        <input type="submit" value="Add" >

    </form>


<?php } elseif($changeVar === "delete") { ?> 

    <form method="POST" action="books/book__update.php" class="admin__forms">

        <input required type="text" value="delete" name="change" style="display: none">
        <input required type="text" name="id" placeholder="id книги">

        <input type="submit" value="Delete">

    </form>


<?php } ?>