let btn = document.querySelector(".menu__btn");
let menu = document.querySelector(".menu");

let i = false;

document.querySelector(".header__user").addEventListener("click", (e) => {
  console.log(e);
  changePositionMenu();
});

btn.addEventListener("click", (e) => {
  changePositionMenu();
});

function changePositionMenu() {
  let hiddenPostion = 350;

  if (document.body.clientWidth <= 600) {
    hiddenPostion = document.body.clientWidth;
  }

  if (i === false) {
    i = true;

    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });

    document.body.style.overflowY = "hidden";
    menu.style.width = `${hiddenPostion}px`;
    menu.style.display = "block";
  } else {
    i = false;
    document.body.style.overflowY = "scroll";
    menu.style.display = `none`;
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

console.log();
