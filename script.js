function openForm() {
    document.getElementById("login-btn").style.display = "none";
    document.querySelector(".login-popup").style.display = "block";
    const body = document.querySelector('body');

    body.classList.add('overflow-hidden');
    
  }
  
  function closeForm() {
    document.querySelector(".login-popup").style.display = "none";
    document.getElementById("login-btn").style.display = "inline-block";

    const body = document.querySelector('body');
    body.classList.remove('overflow-hidden');

  }

  function hideLogin(){
    document.getElementById("login-btn").style.display = "none";
  }


  function enableOverflow(){
    document.querySelector(".overflow-hidden").style.overflow = "visible";
  }


  let menu = document.querySelector('#menu-btn');
  let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
} 

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

}

  var typed = new Typed(".auto-type", {
    strings: ["Attīsti IT jomu šodien!", "Uzsāc savas spējas darba tirgū!", "Iepazīsti IT pasauli!", "Izzini jaunākās tendences!", "IT speciālisti ir milzu pieprasīti!", "Sāc savu karjeras ceļu tagad!", "Galvenais ir sākt!"],
    typeSpeed: 50,
    backSpeed: 25,
    backDelay: 1000,
    loop: true
})