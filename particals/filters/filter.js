function changePrice() {
  let filter = document.querySelector("#filter__price");
  let result = document.querySelector("#filter__result");

  let filterValue = filter.value;
  result.textContent = String(filterValue) + "₽";
}

changePrice();
