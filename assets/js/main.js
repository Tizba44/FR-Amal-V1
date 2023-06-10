
// TRuc de Scroll =====================================================================================

// Obtenir la hauteur totale de la page
var totalHeight = document.body.scrollHeight - window.innerHeight;

// Écouter l'événement de défilement de la page
window.addEventListener("scroll", function(){
  // Calculer la distance défilée par rapport à la hauteur totale de la page
  var progress = (window.pageYOffset / totalHeight) * 100;
  
  // Mettre à jour la largeur de la barre de progression en fonction de la progression
  document.querySelector(".fill").style.width = progress + "%";
});


/* ......../btn elevator/.......... */

window.addEventListener("scroll", () => {
  if (window.scrollY < 650) {
    btnElevator.style.display = "none";
  } else {
    btnElevator.style.display = "block";
  }
});

const goToTop = () => {
  document.body.scrollIntoView({
    behavior: "smooth",
  });
};

btnElevator.addEventListener("click", goToTop);
// logo animation ========================================================================================

logoContainer.addEventListener("mouseover", () => {
  logoBot.classList.add("hidden");
  logoTop.classList.add("visible");
});

logoContainer.addEventListener("mouseout", () => {
  logoBot.classList.remove("hidden");
  logoTop.classList.remove("visible");
});

logoContainer.addEventListener("mouseover", () => {
  logoBotWhite.classList.add("hidden");
  logoTop.classList.add("visible");
});

logoContainer.addEventListener("mouseout", () => {
  logoBotWhite.classList.remove("hidden");
  logoTop.classList.remove("visible");
});

let currentUrl = window.location.href;

const links = document.querySelectorAll('.nav__link');
for (let i = 0; i < links.length; i++) {
  const link = links[i];
  const url = link.href;
  const constantName = `URL_${i + 1}`;
  window[constantName] = url;
}
  
const a = document.getElementById("a");
const b = document.getElementById("b");

const c = document.getElementById("c");
const d = document.getElementById("d");

const e = document.getElementById("e");
const f = document.getElementById("f");

const g = document.getElementById("g");
const h = document.getElementById("h");


if (currentUrl === URL_1) {
  a.style.display = "none";
  b.style.display = "block";
}

if (currentUrl === URL_2) {
  c.style.display = "none";
  d.style.display = "block";
}

if (currentUrl === URL_3) {
  e.style.display = "none";
  f.style.display = "block";

}

if (currentUrl === URL_4) {
  g.style.display = "none";
  h.style.display = "block";
}
 
