window.onscroll = function() {myFunction()};

var menu = document.getElementById("menu");
var menumobi = document.getElementById("menu_mobile-li");
var sticky = menu.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    menumobi.classList.add("menumobi");
    menu.classList.add("sticky");
  } else {
    menumobi.classList.remove("menumobi");
    menu.classList.remove("sticky");
    
  }
}



// var slideIndex = 0;
// showSlides();

// function showSlides() {
//   var i;
//   var slides = document.getElementsByClassName("chuyenanh");
  
//   for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";  
//   }
//   slideIndex++;
//   if (slideIndex > slides.length) {slideIndex = 1}    
  
//   slides[slideIndex-1].style.display = "block";  
 
//   setTimeout(showSlides, 2000); 
// }

// var mql = window.matchMedia('screen and (max-width: 600px)');
//     if (mql === mql){
//     // window width is at least 500px
//     var slideIndex = 0;
//         showSlides();
//         function showSlides() {
//             var i;
//             var slides = document.getElementsByClassName("chuyenanh");
//         for (i = 0; i < slides.length; i++) {
//             slides[i].style.display = "none";  
//           }
//           slideIndex++;
//         if (slideIndex > slides.length) {slideIndex = 1}    
  
//         slides[slideIndex-1].style.display = "block"; 
//         setTimeout(showSlides, 2000); 
//         }
//   } else {
    
//   }



// var menumobi = document.getElementById("menu_mobile-li");
// var stick = menumobi.offsetTop;

// function myFunction() {
//   if (window.pageYOffset >= stick) {
//     menumobi.style.margin-top == "62px";
//   } else {
//     menumobi.style.margin-top == "167px";
//   }
// }


var acc = document.getElementsByClassName("button-submenu");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}





const mobile = document.querySelector(".mobile")


    mobile.addEventListener("click",function(){
        if(mobile){
            document.querySelector(".menu_mobile-li").classList.toggle("click")
        }else{
            // document.querySelector(".menu_mobile-li").classList.remove("click")
        }
        
        
    })








