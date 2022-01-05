<?php

include ('./product.php');
include ('./genres.php');
$maxValue;

?>

<form action="/index.php?price=" method="GET">
    <h2 class="filter__title">Цена</h2>

    <div class="range-container">
      <div class="multi-range-slider">
        <input
          name="priceMin"
          id="input-left" 
          value="<?= (!empty($_GET["priceMin"]) or $_GET["priceMin"] == 0) ? str_replace(["'", "<", ">"], "", $_GET["priceMin"]) : "" ?>" 
          type="range" 
          min="0" 
          max="<?= max(array_column($data, 'price'));?>" 
          pattern="[0-9]"
        />
        <input 
          name="priceMax" 
          id="input-right" 
          type="range" 
          min="0" 
          max="<?= max(array_column($data, 'price'));?>" 
          value="<?= (!empty($_GET["priceMax"])) ? str_replace(["'", "<", ">"], "", $_GET["priceMax"]) : "" ?>" 
          pattern="[0-9]"
        />

        <div class="slider">
          <div class="track"></div>
          <div class="range"></div>
          <div class="thumb left"></div>
          <div class="thumb right"></div>
        </div>
      </div>
   
      <div class="range_output">
        <input disabled type="text" id="min-price">
        <input disabled type="text" id="max-price">
      </div>

    </div>

    <h2 class="filter__title">Фильтр</h2>
    <hr class="filter__line line" />
    <!-- Genres -->
    <div class="filter__genres">
      <!-- ADD .... -->

      <?php foreach ($genres as $value) { ?>

            <div class="filter__gener"> 
                <input type="checkbox" name="genre[]" value="<?= $value["name"] ?>" id="<?= $value['id'] ?>" <?=(!empty($_GET['genre']) && array_search($value['name'], $_GET['genre']) !== false) ? 'checked' : ''?>>
                <label for="<?= $value['id'] ?>"><?= $value["name"]?></label>
            </div>

        <? }; ?>
    </div>
    <!-- Genres end -->

    <div class="filter__btn">
      <input type="submit" value="Aplly" />
    </div>
</form>