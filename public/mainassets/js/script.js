//Sticky Header 
window.addEventListener('scroll', function() {
    const header = document.getElementById('header');
  
    // When the page is scrolled beyond 50px, add a background color
    if (window.scrollY > 50) {
      header.classList.add('sticky');
    } else {
      header.classList.remove('sticky');
    }
  }); 

//Menu Hamburger for mobile and tab
const menuHamburger = document.querySelector(".menu-hamburger")
const navbar = document.querySelector(".navbar")

menuHamburger.addEventListener('click',()=>{
    navbar.classList.toggle('mobile-menu')
    menuHamburger.style.color = '#000';
})

//Focus input Contact form 
const inputs = document.querySelectorAll(".contact-input");

inputs.forEach((ipt) => {
    ipt.addEventListener("focus", () => {
        ipt.parentNode.classList.add("focus");
        ipt.parentNode.classList.add("not-empty");

    });
    ipt.addEventListener("blur", () => {
        if (ipt.value === "") {
            ipt.parentNode.classList.remove("not-empty");
        }
            ipt.parentNode.classList.remove("focus");
    });
});

//Full Image Gallery About
var fullImgBox =document.getElementById("fullImgBox");
var fullImg =document.getElementById("fullImg");
function openFullImg(pic){
  fullImgBox.style.display="flex";
  fullImg.src=pic;
}
function closeFullImg(){
  fullImgBox.style.display="none";
}