'use strict';


// slider stages
jQuery(document).ready(function() { 
    jQuery('.stages-slider').slick(
      {
        variableWidth: true,
        infinite: false,
        autoplay: true,
        autoplaySpeed: 2000,
        pauseOnHover:true,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 769,
            settings: {
              slidesToScroll: 1,
            }
          }
        ]
      }
    );
  })
  
  // slider team
jQuery(document).ready(function() { 
    jQuery('.team-slider').slick(
      {
        variableWidth: true,
        infinite: false,
        responsive: [
          {
            breakpoint: 769,
            settings: {
            
            }
          }
        ]
      }
    );
  })

  // report slider
  jQuery(document).ready(function() { 
    jQuery('.reports-slider').slick(
      {
        variableWidth: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 769,
            settings: {
            
            }
          }
        ]
      }
    );
  })


  // media slider
  jQuery(document).ready(function() { 
    jQuery('.media-slider').slick(
      {
        variableWidth: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: false,
        speed: 500,
        responsive: [
          {
            breakpoint: 769,
            settings: {
              slidesToShow: 1,            
            }
          }
        ]
      }
    );
  })

    // slider in single page

    jQuery(document).ready(function() { 
      jQuery('.images-slider').slick(
        {
          variableWidth: true,
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 769,
              settings: {
              
              }
            }
          ]
        }
      );
    })
// // accordion
// let accItem = document.getElementsByClassName('accordion-item');
// let accHD = document.getElementsByClassName('accordion-heading');
// for (i = 0; i < accHD.length; i++) {
//     accHD[i].addEventListener('click', toggleItem, false);
// }
// function toggleItem() {
//     var itemClass = this.parentNode.className;
//     for (i = 0; i < accItem.length; i++) {
//         accItem[i].className = 'accordion-item hidden';
//     }
//     if (itemClass == 'accordion-item hidden') {
//         this.parentNode.className = 'accordion-item visible';
//     }
// }



// mobile menu 
window.addEventListener("DOMContentLoaded", () =>  {
  let openMenu = document.querySelector('.open-menu');
  let mobileMenu = document.querySelector('.mobile-menu');
  let navLinks = document.querySelectorAll(".nav").children;
  let innerHeader = document.querySelector(".header .inner");
  
      openMenu.addEventListener('click', function (event) {
          event.preventDefault();
          document.body.classList.toggle("_lock");
          openMenu.classList.toggle("active");
          mobileMenu.classList.toggle("open");
          innerHeader.classList.toggle("open");  
      });

      navLinks.forEach((navLink) => {
        navLink.addEventListener("click", function (event) {
            event.preventDefault();
            document.body.classList.remove("_lock");
            openMenu.classList.remove("active");
            mobileMenu.classList.remove("open");
            innerHeader.classList.remove("open");
        });
      });
});





  