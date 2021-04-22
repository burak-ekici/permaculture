const themeButton = document.querySelector(".toggle-btn");
const mainHTML = document.querySelector("main");
const divMenuBurger = document.querySelector(".menu-burger-JS");
const navHTML = document.querySelector("nav");
const headerHTML = document.querySelector("header");
const headerdiv1HTML = document.querySelector("header .header_div1");
const faBars = document.querySelector(".fa-bars"); 
const faTimes = document.querySelector(".fa-times");
const iconBurger = document.querySelector("nav .icon-burger");
const navBurger = document.querySelector(".nav-burger");
const headerIMG = document.querySelector("#header");
const LargeScreen = window.matchMedia("(min-width:770px)");
const SmallScreen = window.matchMedia("(max-width:770px)");
let burgerOpen = "no";



// function ////////////////////////////////////////////////////////

function resize() {
    if (LargeScreen.matches) {
      
      divMenuBurger.style.display = "none";
      navHTML.classList.remove("nav-burger");
    } else if (SmallScreen.matches) {
      headerHTML.style.background = "none";
      headerHTML.style.boxShadow = "0 0 0 0";
      themeButton.style.marginTop = "1rem";
      themeButton.style.marginRight = "0.8rem";
      divMenuBurger.style.display = "block";
      iconBurger.style.display = "block";
      navHTML.classList.add("nav-burger");
      headerdiv1HTML.style.justifyContent = "space-between";
      if(localStorage.getItem("theme") === "dark"){faBars.style.color="black"}
      else {faBars.style.color="gray"};
      // event click menu burger
  
      faBars.addEventListener("click", derouleMenuBurger);
      faTimes.addEventListener("click", derouleMenuBurger);
    }
  
    window.addEventListener("resize", function () {
      if (LargeScreen.matches) {

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

        if(localStorage.getItem("theme") === "dark"){faBars.style.color="black"}
        else {faBars.style.color="gray"};

        // event click menu burger
        faBars.addEventListener("click", derouleMenuBurger);
        faTimes.addEventListener("click", derouleMenuBurger);
      }
    });
};

function theme() {
    if (localStorage.getItem("theme") === "dark") {
      mainHTML.style.backgroundColor = "#7f7f7f";
      themeButton.classList.add("active");
      faBars.style.color = "#black";
      
    } else if (localStorage.getItem("theme") == null) {
      mainHTML.style.backgroundColor = "#fff";
      themeButton.classList.remove("active");
      faBars.style.color = "gray";
      
    }
  
    themeButton.addEventListener("click", function () {
      if (themeButton.classList.contains("active")) {
        themeButton.classList.remove("active");
        localStorage.removeItem("theme");
        mainHTML.style.backgroundColor = "#fff";
        if(localStorage.getItem("theme")==="dark")(faBars.style.color = "black")
        else{faBars.style.color = "gray"};
        if(burgerOpen ==="yes"){headerHTML.style.background = "linear-gradient(to right,#5e5d5d, #9e9e9e , #5e5d5d)"};
      } else if (!themeButton.classList.contains("active")) {
        themeButton.classList.add("active");
        localStorage.setItem("theme", "dark");
        mainHTML.style.backgroundColor = "#7f7f7f";
        if(localStorage.getItem("theme")==="dark")(faBars.style.color = "black")
        else{faBars.style.color = "gray"};
        if(burgerOpen ==="yes"){headerHTML.style.background = "black"};
      }
    });
};
  
function derouleMenuBurger(e) {
    if (burgerOpen === "no") {
      navBurger.style.display = "flex";
      headerHTML.style.height = "90vh";
      headerHTML.style.boxShadow = "0px 1px 2px 1px rgba(0, 0, 0, 0.5)";
      headerHTML.style.alignItems = "start";
      if(localStorage.getItem("theme") === "dark"){headerHTML.style.background = "black"}
      else{headerHTML.style.background = "linear-gradient(to right,#5e5d5d, #9e9e9e , #5e5d5d)";}
      
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
      if(localStorage.getItem("theme") === "dark"){faBars.style.color="black"}
      else {faBars.style.color="gray"};
      
      
      
    }
}

function scrollReaveal(){
    ScrollReveal().reveal("h3", {
        duration: 1000,
        origin: "top",
        distance: "50px",
        scale: "0.8",
        mobile: false,
        desktop: true,
    });
    ScrollReveal().reveal(".para1", {
        duration: 500,
        origin: "left",
        distance: "400px",
        scale: "1",
        mobile: false,
        desktop: true,
    });
    ScrollReveal().reveal(".para2", {
        duration: 500,
        origin: "right",
        distance: "400px",
        scale: "1",
        mobile: false,
        desktop: true,
    });
    ScrollReveal().reveal(".para3", {
        duration: 500,
        origin: "left",
        distance: "400px",
        scale: "1",
        mobile: false,
        desktop: true,
    });
    ScrollReveal().reveal(".presentation", {
        duration: 500,
        origin: "right",
        distance: "400px",
        scale: "1",
        mobile: false,
        desktop: true,
    });
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


//   execute //////////////////////////////////////////////////////////////////////

window.addEventListener("DOMContentLoaded", function () {
    theme();
    resize();
    scrollReaveal();
    connectUser();
    disconnect();
    window.addEventListener("scroll", function(){
        headerIMG.style.backgroundSize = 160 - +window.pageYOffset/12+"%";
        headerIMG.style.opacity= 1-window.pageYOffset/700+"";
    })
});
  