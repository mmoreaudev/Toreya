
$(document).ready(() => {
  $(window).scroll(() => {
    if (this.scrollY > 20) {
      $(".navbar").addClass("sticky");
    } else {
      $(".navbar").removeClass("sticky");
    }
  });
  //----> toggle menu <----
  $(".menu-btn").click(() => {
    $(".navbar .menu").toggleClass("active");
    $(".menu-btn i").toggleClass("active");
  });
  $(".navbar .nav-link").click(() => {
    $(".navbar .menu").removeClass("active");
    $(".menu-btn i").removeClass("active");
  });

  //----> owl carousel <----
  $(".carousel").owlCarousel({
    margin: 20,
    loop: true,
    autoplay:true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
      0:{
        items: 1,
        nav: false,
      },
      600: {
        items: 2,
        nav: false,
      },
      1000: {
        items: 3,
        nav: false,
      },
    },
  });


  //----> slick slider <----
  $(".slider").slick({
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
    infinite: true,
    speed: 400,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2,
          infinite: true,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
        },
      },
      {
        breakpoint: 425,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
        },
      },
      {
        breakpoint: 300,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 2,
          infinite: true,
        },
      },
    ],
  });
});


//----> search-btn <----
let searchBtn = document.getElementById("search-btn");
let searchBar = document.querySelector(".search-bar-box");
//----> login btn - loginclose-btn <----
let loginBtn = document.getElementById("login-btn");
let formFill = document.querySelector(".form");
let signIn = document.getElementById("signin");
let signUp = document.getElementById("signup");
let loginCloseBtn = document.getElementById("login-close-btn");
//----> menu-bar <----
let menuBar = document.getElementById("menu-bar");
let navbar = document.querySelector(".navbar");
let navLink = document.querySelectorAll(".nav-link");
// video-btn
let videoBtn = document.querySelectorAll(".vid-btn");



//----> search-btn <----
searchBtn.addEventListener("click", () => {
  searchBtn.classList.toggle("fa-times");
  searchBar.classList.toggle("active");
});

//----> login btn <----
loginBtn.addEventListener("click", () => {
  formFill.classList.add("active");
});
loginCloseBtn.addEventListener("click", () => {
  formFill.classList.remove("active");
});

//---> home section videos btn <----
videoBtn.forEach((btn) => {
  btn.addEventListener("click", () => {
    document.querySelector(".controls .active").classList.remove("active");
    btn.classList.add("active");
    let vidSrc = btn.getAttribute("data-src");
    document.querySelector("#video-slider").src = vidSrc;
  });
});



//---> signin-signup form
let tabHeader = document.getElementsByClassName("tab-header")[0].getElementsByTagName("div");

for(let i=0;i<tabHeader.length;i++){
  tabHeader[i].addEventListener("click",()=>{
    document.getElementsByClassName("tab-header")[0].getElementsByClassName("active")[0].classList.remove("active");
    tabHeader[i].classList.add("active");

    document.getElementsByClassName("tab-content")[0].getElementsByClassName("active")[0].classList.remove("active");
    document.getElementsByClassName("tab-content")[0].getElementsByClassName("tab-body")[i].classList.add("active");

  })

  signIn.addEventListener("click",()=>{
    document.getElementsByClassName("tab-header")[0].getElementsByClassName("active")[0].classList.remove("active");
    tabHeader[i].classList.add("active");
    document.getElementsByClassName("tab-content")[0].getElementsByClassName("active")[0].classList.remove("active");
    document.getElementsByClassName("tab-content")[0].getElementsByClassName("tab-body")[i].classList.add("active");
  })
  signUp.addEventListener("click",()=>{
    // document.getElementsByClassName("tab-header")[0].getElementsByClassName("active")[i].classList.remove("active");
    document.getElementsByClassName("tab-header")[0].getElementsByClassName("active")[0].classList.remove("active");
    tabHeader[0].classList.add("active");
    // document.getElementsByClassName("tab-content")[i].getElementsByClassName("active")[0].classList.remove("active");
    document.getElementsByClassName("tab-content")[0].getElementsByClassName("active")[0].classList.remove("active");
    // document.getElementsByClassName("tab-content")[0].getElementsByClassName("tab-body")[i].classList.add("active");
    document.getElementsByClassName("tab-content")[0].getElementsByClassName("tab-body")[0].classList.add("active");
  })
}
//----> onscroll <----
window.onscroll = () => {
  searchBtn.classList.remove("fa-times");
  searchBar.classList.remove("active");
  // formFill.classList.remove("active");
  navbar.classList.remove("active");
};
//----> top cursor <----
topbtn = document.getElementById("top-btn");
window.onscroll=function(){scrollFunction()};
function scrollFunction(){
    if(document.body.scrollTop >100 || document.documentElement.scrollTop>100){
        topbtn.style.display="block";
    }else{
        topbtn.style.display="none";
    }
}

function topFunction(){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop=0;
}


