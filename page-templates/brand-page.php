<?php
// Template Name: Brand Template

get_header(); ?>


<?php get_template_part('page-templates/brands', 'section'); ?>

      <!-- Our Values -->
  <section class="about-values">
  <div class="container">
    <div class="section-header">
      <h2>Why Choose Belgravia Brands</h2>
    </div>

    <div class="row">

      <div class="col-md-3">
        <div class="value-item">
          <div class="icon">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/premium.png'); ?>" alt="">
          </div>
          <h4>Premium</h4>
          <p>We travel the world to find the finest products, each chosen for exceptional taste, quality ingredients, and expert craftsmanship.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="value-item">
          <div class="icon">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/all-natural.png'); ?>" alt="">
          </div>
          <h4>All Natural</h4>
          <p>From gut-healthy apple cider vinegar to mineral-rich waters, we prioritize your wellbeing.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="value-item">
          <div class="icon">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Authentic.png'); ?>" alt="">
          </div>
          <h4>Authentic Stories</h4>
          <p>Each brand brings generations of tradition and innovation to your table.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="value-item">
          <div class="icon">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/crated.png'); ?>" alt="">
          </div>
          <h4>Curated Selection</h4>
          <p>We only select best in class foods, beverages, and confectionaries and we partner with one brand per category to ensure you get the very best.</p>
        </div>
      </div>

    </div>
  </div>
</section>
    <!-- Our Values Closed -->

 <!-- slider -->
  <?php get_template_part('page-templates/home', 'slider'); ?>
<!-- slider closed -->



<?php get_footer(); ?>
