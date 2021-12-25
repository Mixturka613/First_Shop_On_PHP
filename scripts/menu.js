let btn = document.querySelector(".header__user__link");

let i = false;

btn.addEventListener("click", (e) => {
  changePositionMenu();
});

function changePositionMenu() {
  if (i === false) {
    i = true;
    document.querySelector(".menu").style.right = "0";
  } else {
    i = false;
    document.querySelector(".menu").style.right = "-350px";
  }
}

function changeForm(form) {
  switch (form) {
    case "Authorisation":
      document.querySelector(".form__register").style.display = "none";
      document.querySelector(".form__login").style.display = "block";
      break;

    case "Registration":
      document.querySelector(".form__login").style.display = "none";
      document.querySelector(".form__register").style.display = "block";
      break;
  }
}

document.querySelector(".close").addEventListener("click", (e) => {
  changePositionMenu();
});
