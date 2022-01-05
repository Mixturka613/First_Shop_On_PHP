const inputLeft = document.querySelector("#input-left");
const inputRight = document.querySelector("#input-right");

const thumbLeft = document.querySelector(".thumb.left");
const thumbRight = document.querySelector(".thumb.right");

const range = document.querySelector(".range");

const minPrice = document.querySelector("#min-price");
const maxPrice = document.querySelector("#max-price");

function setLeftValue() {
  let input = inputLeft;
  let min = inputLeft.min;
  let max = inputLeft.max;

  let distance = (max / 100) * 20;

  inputLeft.value = Math.min(input.value, inputRight.value - distance);

  let porcent = input.value / (max/100) * 0.85;

  minPrice.value = input.value + "₽";
  thumbLeft.style.left = porcent + "%";
  range.style.left = porcent + "%";
}
setLeftValue();

function setRightValue() {
  let input = inputRight;
  let max = input.max;
  let min = input.min;

  let distance = (max / 100) * 20;

  inputRight.value = Math.max(input.value, Number(inputLeft.value) + distance);

  let porcent = (max - input.value) / (max/100) * 0.85;

  maxPrice.value = input.value + "₽";
  thumbRight.style.right = porcent + "%";
  range.style.right = porcent + "%";
}
setRightValue();

inputRight.addEventListener("input", (e) => {
  setRightValue();
});

inputLeft.addEventListener("input", (e) => {
  setLeftValue();
});
