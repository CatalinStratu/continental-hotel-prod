//pre loader all pages
window.addEventListener('load', ()=> {
    const preloader = document.querySelector('#preloader');
    preloader.classList.add('preloaderfinish');
})

//active tab
var currentLocation = window.location.pathname;
if((currentLocation === "/index.html")||(currentLocation === "/hotel-continental/index.html")){
    const home = document.querySelectorAll('.home');
    home[0].style.color = "#c19b76";
    home[1].style.color ="#c19b76";
    home[2].style.color ="#c19b76";

}
else if((currentLocation === "/rentroom.html")||(currentLocation === "/hotel-continental/rentroom.html")){
    const rooms = document.querySelectorAll('.rooms');
    rooms[0].style.color = "#c19b76";
    rooms[1].style.color ="#c19b76";
    rooms[2].style.color ="#c19b76";
}
else if((currentLocation === "/services.html")||(currentLocation === "/hotel-continental/services.html")){
    const services = document.querySelectorAll('.services');
    services[0].style.color = "#c19b76";
    services[1].style.color ="#c19b76";
    services[2].style.color ="#c19b76";
}
else if((currentLocation === "/about.html")||(currentLocation === "/hotel-continental/about.html")){
    const about = document.querySelectorAll('.about');
    about[0].style.color = "#c19b76";
    about[1].style.color ="#c19b76";
    about[2].style.color ="#c19b76";
}
else if((currentLocation === "/contact.html")||(currentLocation === "/hotel-continental/contact.html")){
    const contact = document.querySelectorAll('.contact');
    contact[0].style.color = "#c19b76";
    contact[1].style.color ="#c19b76";
    contact[2].style.color ="#c19b76";
}
// rentroom

const nightInput = document.querySelector('input[type=number][name=nights]');
const guestInput = document.querySelector('input[type=number][name=guests]');
const nights = document.querySelectorAll('.nightsevent');
const guests = document.querySelectorAll('.guestevent');
const nightHeadline5 = document.querySelector('.night_rentroom');
const guestHeadline5 = document.querySelector('.guest_rentroom');
var guestVal , nightVal;
if((currentLocation === "/rentroom.html")) {
    guests[0].addEventListener("click",function(){
        guestInput.stepUp();
        guestVal = guestInput.value;
        if((guestVal > 1) && (currentLocation === "/rentroom.html")){
            guestHeadline5.innerText = "Guests";
        }
    });
    guests[1].addEventListener("click",function(){
        guestInput.stepDown();
        guestVal = guestInput.value;
        if((guestVal <= 1) && (currentLocation === "/rentroom.html")){
          guestHeadline5.innerText = "Guest";
      }
    });
    nights[0].addEventListener("click",function(){ 
      nightInput.stepUp();   
      nightVal = nightInput.value;  
      if((nightVal > 1) && (currentLocation === "/rentroom.html")){
      nightHeadline5.innerText = "Nights";
    } 
    });
    nights[1].addEventListener("click",function(){
      nightInput.stepDown();
      nightVal = nightInput.value;
      if((nightVal <= 1) && (currentLocation === "/rentroom.html")){
        nightHeadline5.innerText = "Night";
    } 
    });
}
// expanding text contact
var question = document.querySelectorAll(".collaps");
var i, lastContent,styleLastContent,displayLastContent;
for (i = 0; i < question.length; i++) {
  question[i].addEventListener("click", function() {
   // this.classList.toggle('fa-minus-square');
    var content = this.nextElementSibling;
    var styleContent = window.getComputedStyle(content);
    var displayContent = styleContent.display;
    if (displayContent === "block") {
      content.style.display = "none";
    } 
    else if(displayContent === "none") {
      content.style.display = "block";
    }
    if(displayLastContent ==="block"){
        lastContent.style.display = "none";
      }
    lastContent = content;
      styleLastContent = window.getComputedStyle(lastContent);
      displayLastContent = styleLastContent.display;
  });
}

//rent room preview
function imageGallery() {
    const highlight = document.querySelector(".gallery-hightlight");
    const previews = document.querySelectorAll(".room-preview img");
  
    previews.forEach(preview => {
      preview.addEventListener("click", function() {
        const smallSrc = this.src;
        const bigSrc = smallSrc.replace("small", "big");
        previews.forEach(preview => preview.classList.remove("room-active"));
        highlight.src = bigSrc;
        preview.classList.add("room-active");
      });
    });
  }
  imageGallery();
  
//smooth scrolling
$('a[href*="#"]').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top},2000,'easeInOutExpo');
  });


//availability  rooms and booking
$("#room_availability").submit(function(event){
    const checkAvailabilityParagraph = document.querySelector('.availability_message_paragraph');
    function HideOut(){
      checkAvailabilityParagraph.style.display = "none";
    }
    checkAvailabilityParagraph.innerText = "This room is: ";
    setTimeout(HideOut,30000);
});
$("#book_now_form").submit(function(event){
    const bookNowConfirm = document.querySelector('.on_submit_booking_message');
    function HideOut(){
      bookNowConfirm.style.display = "none";
    }
    bookNowConfirm.style.display = "flex";
    setTimeout(HideOut,30000);
});

//HAMBURGER NAVIGATION
const hamburger = document.querySelector('.hamburger');
const hamburgerMenu = document.querySelector('.hamburger-menu')
var clickable = 1,state=0;
function toggleMenu() {
    function popout() {
        hamburgerMenu.style.display ="none";
        clickable  = 1;
    }
    function popin(){
        clickable = 1;
    }
    var hamburgerProp = getComputedStyle(hamburgerMenu);
    var hamburgerDisplay = hamburgerProp.display;
    if(hamburgerDisplay === "none" && clickable  === 1){
        hamburgerMenu.style.display ="flex";
        hamburgerMenu.style.animation = "menu 1.1s ease-in-out";
        hamburger.classList.toggle("change");
        clickable =0;
        if(state===0){
            state=1;
        }
        setTimeout(popin,1100);//1500 = 1.5s (animation time)
    }
    else if(hamburgerDisplay === "flex" && clickable  === 1){
        hamburgerMenu.style.animation = "menu_x 1.1s ease-in-out";
        hamburger.classList.toggle("change");
        clickable =0;
        if(state===1){
            state=0;
        }
        setTimeout(popout,1100);//1500 = 1.5s (animation time)
    }
   
}