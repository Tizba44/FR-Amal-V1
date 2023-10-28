const lightBot = document.querySelector(".lightBot");

const darkTop = document.querySelector(".darkTop");

const body = document.querySelector("body");

const txt = document.querySelectorAll("h1,h2,h3,h4,a,cite,li,p,figcaption,hr");
const about  = document.querySelectorAll(".inner-container,.about-section");

const ligne = document.querySelector(".ligne");

const zig = document.querySelectorAll(".zig");

const pagi = document.querySelector(".pagination");

const imagelight = document.querySelector(".showcase-area");

const logoContainer = document.querySelector("#logo-container");

const navphone = document.querySelector(".nav__menu");

/* ......../logo/.......... */

const logoBot = document.querySelector(".logoBot");
const logoTop = document.querySelector(".logoTop");
const logoBotWhite = document.querySelector(".logoBotWhite");

/* ......../scroll event/.......... */
const btnElevator = document.querySelector(".btnElevator");

const navbar = document.querySelector(".navbar");
const navbarboxshadow = document.querySelector(".navbarboxshadow");

const prefersDark = window.matchMedia('(prefers-color-scheme: dark)')

let x =1;




const toggleDarkMode = () => {
  lightBot.classList.toggle("hidden");
  darkTop.classList.toggle("visible");

  ligne.classList.toggle("darkligne");
  if (about) {
    about.forEach((e) => (e.classList.toggle("about")));
    }

  zig.forEach((e) => (e.classList.toggle("back")));

  if (pagi) {
    pagi.classList.toggle("darktext");
    }
  logoBot.classList.toggle("none");
  logoBotWhite.classList.toggle("block");

  body.classList.toggle("darkbody");

  txt.forEach((e) => (e.classList.toggle("darktext")));

  navphone.classList.toggle("darknavphone");

  if (imagelight) {
    imagelight.classList.toggle("darkimage");
    }
};

const test = () => {
    localStorage.setItem("y", 1);
};

const testo = () => {
    localStorage.setItem("y", 0);
};

var y = localStorage.getItem("y");
const gra = () => {
    var y = localStorage.getItem("y");
    toggleDarkMode();
   
    if (y == 1) {
        x = 2;
        if (window.scrollY > 1) {
            navbar.style.boxShadow = "48px 0 96px 0px rgb(0, 0, 0 ,0.600)";
            navbar.style.background = "#35363A";
        }
    } 
    else if (y == 0)  {
        x = 1;
        if (window.scrollY > 1) {
            navbar.style.boxShadow = "48px 0 96px 0px rgb(0, 0, 0 ,0.200)";
            navbar.style.background = "white";
        }
    }
};


if (y == 1) {
    if (x == 1) {
        toggleDarkMode();
      x = 2;
      if (window.scrollY > 1) {
        navbar.style.boxShadow = "48px 0 96px 0px rgb(0, 0, 0 ,0.600)";
        navbar.style.background = "#35363A";
      }
    } 
  } 
  else if (y == 0)  {
    if (x == 2) {
        toggleDarkMode();
      x = 1;
      if (window.scrollY > 1) {
        navbar.style.boxShadow = "48px 0 96px 0px rgb(0, 0, 0 ,0.200)";
        navbar.style.background = "white";
      }
    } 
}
  


if (prefersDark.matches) {
    if (y != 0) {
        if (y != 1) {
            test();
            gra();
            } 
    } 
}

lightBot.addEventListener("click", function() {
    test();
    gra();
});
    
  
darkTop.addEventListener("click", function() {
    testo();
    gra();
});

window.addEventListener("scroll", () => {
    if (window.scrollY < 1) {
      navbar.style.boxShadow = "none";
      navbar.style.background = "#2a2a2d00";
    }
});
  
window.addEventListener("scroll", () => {
    if (window.scrollY > 1) {
      if (x === 1) {
        navbar.style.boxShadow = "48px 0 96px 0px rgb(0, 0, 0 ,0.200)";
        navbar.style.background = "white";
      }
      if (x === 2) {
        navbar.style.boxShadow = "48px 0 96px 0px rgb(0, 0, 0 ,0.600)";
        navbar.style.background = "#35363A";
      }
    }
});