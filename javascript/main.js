const titre = document.querySelector("#titre-principal");
const carteEte = document.querySelector(".card-ete");
const carteHiver = document.querySelector(".card-hiver");
const cartePrintemp = document.querySelector(".card-printemp");
const carteAutomne = document.querySelector(".card-automne");
const cloudAnim = document.querySelectorAll(".clouds img");
const themeButton = document.querySelector(".toggle-btn");
const mainHTML = document.querySelector("main");
const divMenuBurger = document.querySelector(".menu-burger-JS");
const navHTML = document.querySelector("nav");
const headerHTML = document.querySelector("header");
const headerdiv1HTML = document.querySelector("header .header_div1");
const faBars = document.querySelector(".fa-bars"); 
const faTimes = document.querySelector(".fa-times");  
const cards = document.querySelectorAll(".card-ete, .card-automne, .card-hiver, .card-printemp");
const iconBurger = document.querySelector("nav .icon-burger");
const navBurger = document.querySelector(".nav-burger");
const LargeScreen = window.matchMedia("(min-width:770px)");
const SmallScreen = window.matchMedia("(max-width:770px)");
let burgerOpen = "no";



// fonction -------------------------------------------------
// fonction qui permet d'ajouter de supprimer ou conserver des elements lors du resizing
function resize() {
  // lorsque l'on arrive sur une page de plus de 770px de largeur :
  if (LargeScreen.matches) {
    //on ajoute un effet flou et scale sur les carte  lors du passage de la souris sur celui ci
    carteEte.addEventListener("mouseover", mouseOnEte);
    carteEte.addEventListener("mouseout", mouseOutEte);
    carteHiver.addEventListener("mouseover", mouseOnHiver);
    carteHiver.addEventListener("mouseout", mouseOutHiver);
    cartePrintemp.addEventListener("mouseover", mouseOnPrintemp);
    cartePrintemp.addEventListener("mouseout", mouseOutPrintemp);
    carteAutomne.addEventListener("mouseover", mouseOnAutomne);
    carteAutomne.addEventListener("mouseout", mouseOutAutomne);

    //on retire le menu burger sur grand ecran

    divMenuBurger.style.display = "none";
    navHTML.classList.remove("nav-burger");
    // si l'ecran est en dessous de 770 px de largeur lors de l'arrivé sur la page :
  } else if (SmallScreen.matches) {
    // on retire la couleur de fond et l'ombre du header
    headerHTML.style.background = "none";
    headerHTML.style.boxShadow = "0 0 0 0";
    // on ajuste la position du bouton de theme
    themeButton.style.marginTop = "1rem";
    themeButton.style.marginRight = "0.8rem";
    // on ajoute l'icone burger et sont evenement lors du clique sur celui ci qui deroule le menu
    divMenuBurger.style.display = "block";
    iconBurger.style.display = "block";
    navHTML.classList.add("nav-burger");
    headerdiv1HTML.style.justifyContent = "space-between";

    // event click menu burger

    faBars.addEventListener("click", derouleMenuBurger);
    faTimes.addEventListener("click", derouleMenuBurger);
  }

  window.addEventListener("resize", function () {
      // on fait la même chose que plus haut pour conserver les element lors du resize et passage entre petit et grand ecran
    if (LargeScreen.matches) {
      carteEte.addEventListener("mouseover", mouseOnEte);
      carteEte.addEventListener("mouseout", mouseOutEte);
      carteHiver.addEventListener("mouseover", mouseOnHiver);
      carteHiver.addEventListener("mouseout", mouseOutHiver);
      cartePrintemp.addEventListener("mouseover", mouseOnPrintemp);
      cartePrintemp.addEventListener("mouseout", mouseOutPrintemp);
      carteAutomne.addEventListener("mouseover", mouseOnAutomne);
      carteAutomne.addEventListener("mouseout", mouseOutAutomne);

      headerHTML.style.background =
        "linear-gradient(to right,#5e5d5d, #9e9e9e , #5e5d5d)";
      headerHTML.style.boxShadow = "0px 1px 2px 1px rgba(0, 0, 0, 0.5)";
      themeButton.style.marginTop = "";
      themeButton.style.marginRight = "";
      navHTML.style.width = "";
      navHTML.style.display = "";
      navHTML.classList.remove("nav-burger");
      headerdiv1HTML.style.justifyContent = "flex-end";
      divMenuBurger.style.display = "none";
      iconBurger.style.display = "none";
      headerHTML.style.height = "";
      headerHTML.style.borderBottomLeftRadius="0%";
      headerHTML.style.borderBottomRightRadius="0%";
      

      //retire event click menu burger

      faBars.removeEventListener("click", derouleMenuBurger);
      faTimes.removeEventListener("click", derouleMenuBurger);

      burgerOpen = "no";
    } else if (SmallScreen.matches) {

      carteEte.removeEventListener("mouseover", mouseOnEte);
      carteHiver.removeEventListener("mouseover", mouseOnHiver);
      carteAutomne.removeEventListener("mouseover", mouseOnAutomne);
      cartePrintemp.removeEventListener("mouseover", mouseOnPrintemp);
      carteEte.style.transform = "scale(1)";
      carteHiver.style.transform = "scale(1)";
      carteAutomne.style.transform = "scale(1)";
      cartePrintemp.style.transform = "scale(1)";
      carteEte.classList.remove("blured");
      carteHiver.classList.remove("blured");
      carteAutomne.classList.remove("blured");
      cartePrintemp.classList.remove("blured");
      
      headerHTML.style.boxShadow = "0 0 0 0";
      themeButton.style.marginTop = "1rem";
      themeButton.style.marginRight = "0.8rem";
      divMenuBurger.style.display = "block";
      headerHTML.style.background="0";
      iconBurger.style.display = "block";
      navHTML.classList.add("nav-burger");
      headerdiv1HTML.style.justifyContent = "space-between";
      faBars.classList.remove("displayNone");
      faTimes.classList.add("displayNone");
      if(localStorage.getItem("theme") === "dark" && burgerOpen==="yes"){
        headerHTML.style.background="black";
        
      }
      
      if (burgerOpen === "yes") {
        navBurger.style.display = "flex";
        headerHTML.style.height = "90vh";
        headerHTML.style.boxShadow = "0px 1px 2px 1px rgba(0, 0, 0, 0.5)";
        headerHTML.style.alignItems = "start";
        headerHTML.style.background = "linear-gradient(to right,#5e5d5d, #9e9e9e , #5e5d5d)";
        navBurger.style.background = "0";
        faBars.classList.add("displayNone");
        faTimes.classList.remove("displayNone");
        if(localStorage.getItem("theme") === "dark"){
            headerHTML.style.background="black";
        }
      }
      // event click menu burger
      faBars.addEventListener("click", derouleMenuBurger);
      faTimes.addEventListener("click", derouleMenuBurger);
    }
  });
}

function mouseOnEte() {
  carteHiver.classList.add("blured");
  carteAutomne.classList.add("blured");
  cartePrintemp.classList.add("blured");
  carteEte.style.transform = "scale(1.2)";
}

function mouseOutEte() {
  carteHiver.classList.remove("blured");
  carteAutomne.classList.remove("blured");
  cartePrintemp.classList.remove("blured");
  carteEte.style.transform = "scale(1)";
}

function mouseOnHiver() {
  carteEte.classList.add("blured");
  carteAutomne.classList.add("blured");
  cartePrintemp.classList.add("blured");
  carteHiver.style.transform = "scale(1.2)";
}

function mouseOutHiver() {
  carteEte.classList.remove("blured");
  carteAutomne.classList.remove("blured");
  cartePrintemp.classList.remove("blured");
  carteHiver.style.transform = "scale(1)";
}

function mouseOnPrintemp() {
  carteHiver.classList.add("blured");
  carteAutomne.classList.add("blured");
  carteEte.classList.add("blured");
  cartePrintemp.style.transform = "scale(1.2)";
}

function mouseOutPrintemp() {
  carteHiver.classList.remove("blured");
  carteAutomne.classList.remove("blured");
  carteEte.classList.remove("blured");
  cartePrintemp.style.transform = "scale(1)";
}

function mouseOnAutomne() {
  carteHiver.classList.add("blured");
  carteEte.classList.add("blured");
  cartePrintemp.classList.add("blured");
  carteAutomne.style.transform = "scale(1.2)";
}

function mouseOutAutomne() {
  carteHiver.classList.remove("blured");
  carteEte.classList.remove("blured");
  cartePrintemp.classList.remove("blured");
  carteAutomne.style.transform = "scale(1)";
}

// utilisation de la bibliotheque scrollReveal pour des effets d'apparition de block lors du scroll
function scrollEvents() {
  ScrollReveal().reveal("#titre-principal", {
    duration: 2000,
    origin: "top",
    distance: "50px",
    scale: "0.8",
    mobile: false,
    desktop: true,
  });

  ScrollReveal().reveal(".definition", {
    duration: 1000,
    origin: "left",
    distance: "400px",
    reset: false,
    scale: "0.8",
    mobile: false,
    desktop: true,
  });

  ScrollReveal().reveal(".natureDuSol", {
    duration: 1000,
    origin: "right",
    distance: "400px",
    reset: false,
    scale: "0.8",
    mobile: false,
    desktop: true,
  });

  ScrollReveal().reveal(".card-ete", {
    duration: 500,
    origin: "left",
    delay: 0,
    reset: false,
    rotate: { y: 45 },
    mobile: false,
    desktop: true,
    
  });

  ScrollReveal().reveal(".card-automne", {
    duration: 500,
    origin: "left",
    delay: 0,
    reset: false,
    rotate: { y: 45 },
    mobile: false,
    desktop: true,
    
  });
  ScrollReveal().reveal(".card-hiver", {
    duration: 500,
    origin: "left",
    delay: 0,
    reset: false,
    rotate: { y: 45 },
    mobile: false,
    desktop: true,
    
  });
  ScrollReveal().reveal(".card-printemp", {
    duration: 500,
    origin: "left",
    delay: 0,
    reset: false,
    rotate: { y: 45 },
    mobile: false,
    desktop: true,
    
  });

  ScrollReveal().reveal(".titre3", {
    origin: "top",
    distance: "50px",
    reset: false,
    scale: 0.8,
    duration: 500,
    mobile: false,
    desktop: true,
  });

  ScrollReveal().reveal(".fas", {
    origin: "bottom",
    distance: "100px",
    reset: false,
    duration: 500,
    mobile: false,
    desktop: true,
  });

  ScrollReveal().reveal(".fab", {
    origin: "bottom",
    distance: "100px",
    reset: false,
    duration: 500,
    mobile: false,
    desktop: true,
  });

  ScrollReveal().reveal("iframe", {
    duration: 300,
    origin: "left",
    reset: false,
    distance: "400px",
    mobile: false,
    desktop: true,
  });

  ScrollReveal().reveal(".paragraphe", {
    duration: 300,
    origin: "right",
    reset: false,
    distance: "400px",
    mobile: false,
    desktop: true,
  });
}

// on definie tous les elements qui change de couleur lors du passage au theme dark
function theme() {
  if (localStorage.getItem("theme") === "dark") {
    mainHTML.style.backgroundColor = "#7f7f7f";
    themeButton.classList.add("active");
    cloudAnim.forEach((element) => (element.style.filter = "contrast(0%)"));
    faBars.style.color = "#3b3b3b";
    cards.forEach(card => card.style.filter = "brightness(75%)");
  } else{
    mainHTML.style.backgroundColor = "#fff";
    themeButton.classList.remove("active");
    cloudAnim.forEach((element) => (element.style.filter = "none"));
    faBars.style.color = "#fff";
    cards.forEach(card => card.style.filter = "brightness(100%)");
  }

  themeButton.addEventListener("click", function () {
    if (themeButton.classList.contains("active")) {
      themeButton.classList.remove("active");
      localStorage.removeItem("theme");
      mainHTML.style.backgroundColor = "#fff";
      cloudAnim.forEach((element) => (element.style.filter = "none"));
      faBars.style.color = "#fff";
      cards.forEach(card => card.style.filter = "brightness(100%)");
      if(burgerOpen ==="yes"){headerHTML.style.background = "linear-gradient(to right,#5e5d5d, #9e9e9e , #5e5d5d)"};
    } else {
      themeButton.classList.add("active");
      localStorage.setItem("theme", "dark");
      cloudAnim.forEach((element) => (element.style.filter = "contrast(0%)"));
      mainHTML.style.backgroundColor = "#7f7f7f";
      faBars.style.color = "#3b3b3b";
      cards.forEach((card) => (card.style.filter = "brightness(75%)"));
      if(burgerOpen ==="yes"){headerHTML.style.background = "black"};
    }
  });
}
// effet paralax sur le titre principal de la page principal
function parallax() {
  window.addEventListener("scroll", function () {
    let parallax = window.scrollY;
    titre.style.marginBottom = parallax * 2 + "px";
  });
}
// function qui definie les parametre pour passage en menu burger lorsque l'ecran fait moin de 770px
function derouleMenuBurger(e) {
  if (burgerOpen === "no") {
    navBurger.style.display = "flex";
    headerHTML.style.height = "90vh";
    headerHTML.style.boxShadow = "0px 1px 2px 1px rgba(0, 0, 0, 0.5)";
    headerHTML.style.alignItems = "start";
    if(localStorage.getItem("theme") === "dark"){headerHTML.style.background = "black"}
    else{headerHTML.style.background = "linear-gradient(to right,#5e5d5d, #9e9e9e , #5e5d5d)"}
    faTimes.classList.remove("displayNone")
    navBurger.style.background = "0";
    faTimes.classList.remove("displayNone");
    faBars.classList.add("displayNone");
    headerdiv1HTML.style.animation="0.5s baniere";


    burgerOpen = "yes";
    

    
  } else if (burgerOpen === "yes") {
    
    navBurger.style.display = "none";
    headerHTML.style.height = "4rem";
    headerHTML.style.boxShadow = "0 0 0 0";
    headerHTML.style.alignItems = "";
    headerdiv1HTML.style.alignItems = "";
    headerHTML.style.background = "0";
    navBurger.style.background = "";
    faBars.classList.remove("displayNone");
    faTimes.classList.add("displayNone");
    burgerOpen = "no";
    headerdiv1HTML.style.animation="0.5 reverse";
    
    
    
  }
}
function closeModal(){
  let modal = document.querySelector('.modal');
  modal.classList.add("fade")
}

function openModal(){
  if (localStorage.getItem('fromVideo') == "true"){
    let modal = document.querySelector('.modal');
    modal.classList.remove("fade");
    localStorage.removeItem('fromVideo');
  }
}

function connectUser(){
  let buttonConnectUser = document.querySelector(".connectUser")
  buttonConnectUser.addEventListener("click",()=>{
    document.location.href="login.php"
  })
}

function disconnect(){
  let disconnectButton = document.querySelector(".disconnectUser")
    disconnectButton.addEventListener("click", ()=>{
    document.cookie = 'PHPSESSID=; path=/; expires=Thu, 01 Jan 1970 00:00:00 UTC';
    document.location.href="login.php";
  })
}




// execute ---------------------------------------------------
// on attend que le DOM soit chargé avant d'executer le JS
window.addEventListener("DOMContentLoaded", function () {
  theme();
  openModal();
  resize();
  scrollEvents();
  parallax();
  connectUser();
  disconnect()
});
