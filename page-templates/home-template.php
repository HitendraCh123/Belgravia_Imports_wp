<?php
// Template Name: Home Template

get_header(); ?>



  <!-- Company Info -->
<?php 
$heading = get_field('hero_heading');
$desc = get_field('hero_description');
$bg = get_field('hero_background_image');
?>

  <section class="company-info" 
       style="background-image: url('<?php echo $bg ? $bg['url'] : get_template_directory_uri().'/assets/images/team-from-above.jpg'; ?>');">

      <div class="container">
         <div class="inner-box">

           <h1><?php echo $heading; ?></h1>
   
            <p><?php echo $desc; ?></p>

         </div>
        </div>

  </section>
  <!-- Company Info Closed -->

<!-- Brands section -->
<?php get_template_part('page-templates/brands', 'section'); ?>
<!-- Brands section end -->


  <!-- discover Brands -->
<?php 
$heading = get_field('discover_heading');

$img1 = get_field('discover_img1');
$img2 = get_field('discover_img2');
$img3 = get_field('discover_img3');
$img4 = get_field('discover_img4');

$btn1 = get_field('discover_btn1');
$btn2 = get_field('discover_btn2');
?>

<section class="discover-brands">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-4 first-box">
        <ul class="img-list">

          <?php if($img1): ?>
            <li><img src="<?php echo $img1['url']; ?>" alt=""></li>
          <?php endif; ?>

          <?php if($img2): ?>
            <li><img src="<?php echo $img2['url']; ?>" alt=""></li>
          <?php endif; ?>

        </ul>
      </div>

      <div class="col-md-4 sec-box">

        <h2><?php echo $heading; ?></h2>

        <ul class="btn-list">

          <?php if($btn1): ?>
            <li>
              <a href="<?php echo $btn1['url']; ?>">
                <?php echo $btn1['title']; ?>
              </a>
            </li>
          <?php endif; ?>

          <?php if($btn2): ?>
            <li>
              <a href="<?php echo $btn2['url']; ?>">
                <?php echo $btn2['title']; ?>
              </a>
            </li>
          <?php endif; ?>

        </ul>

      </div>

      <div class="col-md-4 third-box">
        <ul class="img-list">

          <?php if($img3): ?>
            <li><img src="<?php echo $img3['url']; ?>" alt=""></li>
          <?php endif; ?>

          <?php if($img4): ?>
            <li><img src="<?php echo $img4['url']; ?>" alt=""></li>
          <?php endif; ?>

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

