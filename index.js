burger = document.querySelector(".burger");
navbar = document.querySelector(".navbar");
navList = document.querySelector(".nav-list");
rightNav = document.querySelector(".right-nav");

burger.addEventListener("click",()=>{
    navbar.classList.toggle("h-nav");
    navList.classList.toggle("v-class");
    rightNav.classList.toggle("v-class");
})

