



   <!-- home Slider -->
<section class="home-slider">
  <div class="owl-carousel owl-theme home-slide">

    <?php if(have_rows('home_slider')): ?>
      <?php while(have_rows('home_slider')): the_row(); 

        $img = get_sub_field('slide_image');

      ?>

        <?php if($img): ?>
          <div class="item">
            <div class="slide-content">
              <img src="<?php echo $img['url']; ?>" alt="">
            </div>
          </div>
        <?php endif; ?>

      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</section>
  <!-- Home Slider Closed -->