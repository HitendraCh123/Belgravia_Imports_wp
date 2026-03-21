<?php
// Template Name: Home Template

get_header(); ?>



  <!-- Company Info -->
  <section class="company-info">
    <div class="container">
      <div class="inner-box">
        <h1>Curating British and European excellence for North America's most discerning markets</h1>
        <p>For nearly four decades, we've recognized and honored prestigious yet innovative British and European food,
          beverage, and confectionery stars, connecting trusted producers with America's leading distributors,
          retailers, and consumers through quiet confidence and proven long-term relationships. We don’t want American
          consumers to have products that just taste good, we want them to have experiences they won’t soon forget.</p>
    
      </div>
    </div>
  </section>
  <!-- Company Info Closed -->

<!-- Brands section -->
<?php get_template_part('page-templates/brands', 'section'); ?>


  <!-- discover Brands -->
  <section class="discover-brands">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 first-box">
          <ul class="img-list">

            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/brands-jelly-1.webp" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tea-with-cup.webp" alt=""></li>
          </ul>
        </div>
        <div class="col-md-4 sec-box">
          <h2>Discover our brands</h2>
          <ul class="btn-list">
            <li><a href="<?php echo site_url('/brands'); ?>">Explore</a></li>
            <li><a href="<?php echo site_url('/contact'); ?>">Inquire</a></li>
          </ul>
        </div>
        <div class="col-md-4 third-box">
          <ul class="img-list">
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/the-drinks-biscuits.webp" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/snaks.webp" alt=""></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- discover Brands Closed -->

 <!-- slider -->
  <?php get_template_part('page-templates/home', 'slider'); ?>
<!-- slider closed -->




  <?php get_footer(); ?>

