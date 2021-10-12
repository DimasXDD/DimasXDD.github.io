let body = document.querySelector("body");
let navbar = document.querySelector("nav");
let button = document.querySelector("#btn-nightmode");
let i = document.querySelector("#i-nightmode");
let image = document.querySelector("#img-nightmode");

function NightModeToggle(){
    body.classList.add("bg-dark", "text-light");
    navbar.classList.add("navbar-dark", "bg-dark");

    i.innerText = " а теперь для дневной темы";
    button.classList.remove("btn-dark");
    button.classList.add("btn-light");
    image.src = "ico\\moon_black.png";

    button.setAttribute("onclick", "DayModeToggle()");
}

function DayModeToggle(){
    body.classList.remove("bg-dark", "text-light");
    navbar.classList.remove("navbar-dark", "bg-dark");

    i.innerText = " тыкни для тёмной темы";
    button.classList.remove("btn-light");
    button.classList.add("btn-dark");
    image.src = "ico\\moon_white.jpg";

    button.setAttribute("onclick", "NightModeToggle()");
}