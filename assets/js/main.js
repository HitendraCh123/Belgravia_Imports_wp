





// HOME SLIDER
jQuery(document).ready(function ($) {

  $('.home-slide').owlCarousel({
    loop: true,
    margin: 0,
    dots: false,
    items: 1,
    nav: true,
    autoplay: true,
    navText: [
      "<i class='fa fa-long-arrow-left'></i>",
      "<i class='fa fa-long-arrow-right'></i>"
    ],
    responsive: {
      0: { items: 1 },
      768: { items: 3 },
      1024: { items: 3 }
    }
  });

});


// TOGGLE MENU
document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.querySelector(".toggle-bar");
  const menu = document.querySelector(".header-menu");

  if (toggle && menu) {
    toggle.addEventListener("click", function () {
      menu.classList.toggle("active");
    });
  }
});


// terms & conditions and privacy policy

 document.querySelectorAll('.tos-section h2').forEach(function(h2) {
      h2.addEventListener('click', function() {
        var item = this.closest('.tos-section');
        var isOpen = item.classList.contains('is-open');

        // Close all
        document.querySelectorAll('.tos-section').forEach(function(el) {
          el.classList.remove('is-open');
        });

        // Open clicked if it was closed
        if (!isOpen) {
          item.classList.add('is-open');
        }
      });
    });