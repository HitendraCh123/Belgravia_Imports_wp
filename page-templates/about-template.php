<?php
// Template Name: About Template

get_header(); ?>

    <!-- About Hero -->

    <?php 
$heading = get_field('hero_heading');
$desc = get_field('hero_description');
$bg = get_field('hero_background_image');
?>
    <section class="about-hero" 
       style="background-image: url('<?php echo $bg ? $bg['url'] : get_template_directory_uri().'/assets/images/WAREHOUSING_large.webp'; ?>');">
         <div class="container">
         <div class="inner">

           <h1><?php echo $heading; ?></h1>
   
            <p><?php echo $desc; ?></p>

         </div>
        </div>
        </div>
    </section>
    <!-- About Hero Closed -->


    <!-- Our Story -->
<section class="about-story">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-col">
        
                <h2><?php the_field('about_story_title'); ?></h2>

                <p><?php the_field('about_story_content'); ?></p>

            </div>

            <div class="col-md-6 img-col">
  
                <?php $img1 = get_field('story_main_image'); ?>
                <?php if($img1): ?>
                <img src="<?php echo $img1['url']; ?>" alt="">
                <?php endif; ?>
                <?php $img2 = get_field('story_assent_image'); ?>
                <?php if($img2): ?>
                <img class="accent-img" src="<?php echo $img2['url']; ?>" alt="">
                <?php endif; ?>

            </div>

        </div>
    </div>
</section>
    <!-- Our Story Closed -->

    <!-- Our Values -->
  <section class="about-values">
    <div class="container">

        <div class="section-header">
            <h2><?php the_field('values_heading'); ?></h2>
            <p><?php the_field('values_subheading'); ?></p>
        </div>

        <div class="row">

            <?php if(have_rows('values_items')): ?>
                <?php while(have_rows('values_items')): the_row(); ?>

                    <div class="col-md-3">
                        <div class="value-item">

                            <?php $icon = get_sub_field('icon'); ?>
                            <div class="icon">
                                <img src="<?php echo $icon['url']; ?>" alt="">
                            </div>

                            <h4><?php the_sub_field('title'); ?></h4>
                            <p><?php the_sub_field('description'); ?></p>

                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>

    </div>
</section>

    <!-- Our Values Closed -->

    <!-- Brands logo secion -->

       <?php get_template_part('page-templates/logos', 'section'); ?>

    <!-- Brands logo secion end -->

    <!-- Gallery -->
   <?php $heading = get_field('gallery_heading'); ?>
  <section class="about-gallery">
    <div class="container-fluid">

        <div class="container section-header">
            <?php if($heading): ?>
                <h2><?php echo $heading; ?></h2>
            <?php endif; ?>
        </div>

        <div class="gallery-grid">

            <?php if(have_rows('about_gallery')): ?>
                <?php while(have_rows('about_gallery')): the_row(); 

                    $img = get_sub_field('gallery_image');
                    $alt = get_sub_field('gallery_alt');

                ?>

                    <?php if($img): ?>
                        <div class="img-item">
                            <img src="<?php echo $img['url']; ?>" alt="<?php echo $alt ? $alt : ''; ?>">
                        </div>
                    <?php endif; ?>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>

    </div>
  </section>
    <!-- Gallery Closed -->


        <!-- CTA -->
  <?php 
$img = get_field('cta_image');
$heading = get_field('cta_heading');
$desc = get_field('cta_description');
$btn1 = get_field('cta_btn_1');
$btn2 = get_field('cta_btn_2');
?>

<section class="about-cta">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-5">

                <?php if($img): ?>
                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" 
                         style="width:100%;border-radius:12px;">
                <?php endif; ?>

            </div>

            <div class="col-md-7">

                <?php if($heading): ?>
                    <h2><?php echo $heading; ?></h2>
                <?php endif; ?>

                <?php if($desc): ?>
                    <?php echo $desc; ?>
                <?php endif; ?>

                <div class="btn-row">

                    <?php if($btn1): ?>
                        <a href="<?php echo $btn1['url']; ?>" class="cta-btn">
                            <?php echo $btn1['title']; ?>
                        </a>
                    <?php endif; ?>

                    <?php if($btn2): ?>
                        <a href="<?php echo $btn2['url']; ?>" class="cta-btn-outline">
                            <?php echo $btn2['title']; ?>
                        </a>
                    <?php endif; ?>

                </div>

            </div>

        </div>
    </div>
</section>
    <!-- CTA Closed -->


  <?php get_footer(); ?>
