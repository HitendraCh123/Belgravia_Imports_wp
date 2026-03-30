


  <!-- home Product -->

<section class="brands-product">
  <div class="container">

    <h1><?php the_field('brand_tagline_heading'); ?></h1>
    <h2><?php the_field('brand_main_heading'); ?></h2>

    <div class="row">
      <ul class="product-list">

        <?php if(have_rows('brands_list')): ?>
          <?php while(have_rows('brands_list')): the_row(); ?>

            <li>
              <div class="img-box">

                <?php $img = get_sub_field('brand_image'); ?>
                <?php $link = get_sub_field('brand_link'); ?>

                <a href="<?php echo $link['url']; ?>">
                  <img src="<?php echo $img['url']; ?>" alt="">
                </a>

              </div>

              <div class="content-box">

                <div class="title">
                  <span>
                    <a href="<?php echo $link['url']; ?>">
                      <?php the_sub_field('brand_title'); ?>
                    </a>
                  </span>
                </div>

                <p><?php the_sub_field('brand_description'); ?></p>

                <div class="brand-btn-row">
                  <div class="custom-btn">
                    <a href="<?php echo $link['url']; ?>">
                      <?php echo $link['title']; ?> 
                      <i class="fa fa-arrow-right"></i>
                    </a>
                  </div>
                </div>

              </div>
            </li>

          <?php endwhile; ?>
        <?php endif; ?>

      </ul>
    </div>

  </div>
</section>

  <!-- home Product closed -->