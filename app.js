//Web Sites credits: @Ermes_Resell Coder: @manzi_giuliano
const menu = document.querySelector('#mobile-menu')
const menuLinks = document.querySelector('.navigazione_menu')
const navLogo = document.querySelector('#navigazione_logo')

//mostra menù mobile
const mobileMenu = () => {
    menu.classList.toggle('is-active')
    menuLinks.classList.toggle('active')
}

menu.addEventListener('click', mobileMenu);

//Mostra menù attivo quando si scorre
const highlightMenu = () => {
    const elem = document.querySelector('.highlight')
    const homeMenu = document.querySelector('#home-page')
    const aboutMenu = document.querySelector('#about-page')
    const servicesMenu = document.querySelector('#prodotti-page')
    let scrollPos = window.scrollY
    console.log(scrollPos)

    //aggiunge la classe 'highlight' al menù degli elementi
    if(window.innerWidth > 960 && scrollPos < 400) {
        homeMenu.classList.add('highlight')
        aboutMenu.classList.remove('highlight')
        servicesMenu.classList.remove('highlight')
        return
    } else if (window.innerWidth > 960 && scrollPos < 1200) {
        servicesMenu.classList.add('highlight')
        aboutMenu.classList.remove('highlight')
        homeMenu.classList.remove('highlight')
        return
    } else if (window.innerWidth > 960 && scrollPos < 1900) {
        aboutMenu.classList.add('highlight')
        homeMenu.classList.remove('highlight')
        servicesMenu.classList.remove('highlight')
        return
    } else if (window.innerWidth > 960 && scrollPos < 2345) {
        aboutMenu.classList.remove('highlight')
        homeMenu.classList.remove('highlight')
        servicesMenu.classList.remove('highlight')
    }

    if((elem && window.innerWidth < 960 && scrollPos < 600) || elem) {
        elem.classList.remove('highlight')
    }
}

window.addEventListener('scroll', highlightMenu)
window.addEventListener('click', highlightMenu)

//Chiudi il menù a tendina mobile al click
const hideMobileMenu = () => {
    const menuBars = document.querySelector('.is-active')
    if(window.innerWidth <= 768 && menuBars) {
        menu.classList.toggle('is-active')
        menuLinks.classList.remove('active')
    }
}

menuLinks.addEventListener('click', hideMobileMenu)
navLogo.addEventListener('click', hideMobileMenu)

//Mostra bottone newsletter
function myFunction() {
    var x = document.getElementById("input");
    var y = document.getElementById("labelInput");
    var z = document.getElementById("btnInput");
    if (x.style.display === "none" && y.style.display === "none") {
      x.style.display = "inline-block";
      y.style.display = "inline-block";
      z.style.display = "inline-block";
    } else {
      x.style.display = "none";
      y.style.display = "none";
      z.style.display = "none";
    }
  }