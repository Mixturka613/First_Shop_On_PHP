<?php

include ('./product.php');
include ('./genres.php');
$maxValue;

?>


<div class="filter__inner">
    <form action="/<?= $path ?>/index.php/?price=" method="GET">
        <h2 class="filter__header">Price</h2>
        <div class="filter__inner">
            <input id="filter__price" name="price" value="2" oninput="changePrice()" type="range" step="1"  min="<?= min(array_column($data, 'price')); ?>" max="<?= max(array_column($data, 'price'));?>" />
            <span id="filter__result"></span>
        </div>

        <h2 class="filter__header">Genres</h2>
        <?php foreach ($genres as $key => $value) {?>

            <div class="genre__block"> 
                <input type="checkbox" name="genre[]" value="<?= $value["name"] ?>" id="<?= $key ?>">
                <label for="<?= $key ?>"><?= $value["name"]?></label>
            </div>

        <? }; ?>
        

        <input class="filter__apply" type="submit" value="Apply" />

    </form>
</div>

