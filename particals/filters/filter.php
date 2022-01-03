<?php

include ('./product.php');
include ('./genres.php');
$maxValue;

?>

<form action="/index.php?price=" method="GET">
    <h2 class="filter__title">Цена</h2>

    <div class="range-container">
      <div class="multi-range-slider">
        <input id="input-left" type="range" min="<?= min(array_column($data, 'price')); ?>" max="<?= max(array_column($data, 'price'));?>" value="25" />
        <input id="input-right" type="range" min="<?= min(array_column($data, 'price')); ?>" max="<?= max(array_column($data, 'price'));?>" value="80" />

        <div class="slider">
          <div class="track"></div>
          <div class="range"></div>
          <div class="thumb left"></div>
          <div class="thumb right"></div>
        </div>
      </div>
   
      <div class="range_output">
        <input type="text" value="" id="min-price">
        <input type="text" value="" id="max-price">
      </div>

    </div>

    <!-- <input  id="filter__price" name="price" 
      value="<?= (!empty($_GET["price"])) ? str_replace(["'", "<", ">"], "", $_GET["price"]) : "" ?>"
      oninput="changePrice()"
      type="range"
      step="1"
      pattern=[0-9]
      min="<?= min(array_column($data, 'price')); ?>"
      max="<?= max(array_column($data, 'price'));?>" 
      /> -->

    <!-- <span id="filter__result"></span> -->

    <h2 class="filter__title">Фильтр</h2>
    <hr class="filter__line line" />
    <!-- Genres -->
    <div class="filter__genres">
      <!-- ADD .... -->

      <?php foreach ($genres as $key => $value) {?>

            <div class="filter__gener"> 
                <input type="checkbox" name="genre[]" value="<?= $value["name"] ?>" id="<?= $key ?>" <?=(!empty($_GET['genre']) && array_search($value['name'], $_GET['genre']) !== false) ? 'checked' : ''?>>
                <label for="<?= $key ?>"><?= $value["name"]?></label>
            </div>

        <? }; ?>
    </div>
    <!-- Genres end -->

    <div class="filter__btn">
      <input type="submit" value="Aplly" />
    </div>
</form>