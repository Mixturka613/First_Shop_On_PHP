function changePrice() {
  let filter = document.querySelector("#filter__price");
  let result = document.querySelector("#filter__result");
  result.innerHTML = filter.value + "€";
}

changePrice();
