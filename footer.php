<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Belgravia
 */

?>

  <!-- Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="inner-box">
        <div class="row">
          <div class="col-md-5">
            <h5>Curators of the world’s most special food products.</h5>
          </div>
          <div class="col-md-3">
            <ul class="social-list">
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></i></a></li>
            </ul>
            <ul class="nav-list">
              <li><a href="terms-of-service.html">Terms & Conditions</a></li>
              <li><a href="privacy-policy.html">Privacy Policy</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <p>401.683.3323 <br>belgravia@belgraviaimports.com</p>
          </div>
        </div>
        <div class="copy-right">© 2025 Belgravia Imports</div>
      </div>
    </div>
  </footer>
  <!-- Footer Closed -->

<?php wp_footer(); ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script>


    // Home Slide
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
        0: {
          items: 1
        },
        768: {
          items: 3
        },
        1024: {
          items: 3
        }
      }
    });

  </script>

  <script>

    document.querySelector(".toggle-bar").onclick = function () {
      document.querySelector(".header-menu").classList.toggle("active");
    }

  </script>


</body>
</html>
