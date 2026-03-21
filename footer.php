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
              <li><a href="<?php echo site_url('/terms-and-conditions'); ?>">
                     Terms & Conditions
                   </a></li>
              <li><a href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a></li>
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
