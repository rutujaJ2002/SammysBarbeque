
let navbar = document.querySelector('.header .navbar');
let menuBtn = document.querySelector('#menu-btn');

menuBtn.onclick = () =>{
   menuBtn.classList.toggle('fa-bars');
   navbar.classList.toggle('active');
};

window.onscroll = () =>{
   menuBtn.classList.remove('fa-bars');
   navbar.classList.remove('active');
};


//home slider
var swiper = new Swiper(".home-slider", {
   grabCursor:true,
   loop:true,
   centeredSlides:true,
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
 });


 //food slider
 var swiper = new Swiper(".food-slider", {
   grabCursor:true,
   loop:true,
   centeredSlides:true,
   pagination:{
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints:{
      0:{
         slidesPerView:1,
      },
      700:{
         slidesPerView:2
      },
      1000:{
         slidesPerView:3,
      },
   }
 });


 //food-preview
 let previewContainer = document.querySelector('.food-preview-container');
 let previewBox = previewContainer.querySelectorAll('.food-preview');
 
 document.querySelectorAll('.food .slide').forEach(food =>{
    food.onclick = () =>{
       previewContainer.style.display = 'flex';
       let name = food.getAttribute('data-name');
       previewBox.forEach(previews =>{
          let target = previews.getAttribute('data-target');
          if(name == target){
             previews.classList.add('active');
          }
       });
    };
 });
 
 previewContainer.querySelector('#close-preview').onclick = () =>{
    previewContainer.style.display = 'none';
    previewBox.forEach(close =>{
       close.classList.remove('active');
    });
 };

 //light gallery
 lightGallery(document.querySelector('.gallery .gallery-container'));
 

  //menu slider
  var swiper = new Swiper(".menu-slider", {
   grabCursor:true,
   loop:true,
   centeredSlides:true,
   pagination:{
      el: ".swiper-pagination",
      clickable:true,
   },
 });
