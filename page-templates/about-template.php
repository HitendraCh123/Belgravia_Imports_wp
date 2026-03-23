<?php
// Template Name: About Template

get_header(); ?>

    <!-- About Hero -->
    <section class="about-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/WAREHOUSING_large.webp">
        <div class="container">
            <div class="inner">
                <h1>At Belgravia Imports, we don't just bring products to market—we architect culinary revolutions</h1>
                <p>As visionary curators of the world's most extraordinary food, beverage, and confectionery brands, we
                    identify and elevate exceptional products that redefine buyer's expectations and set new industry
                    standards.</p>
            </div>
        </div>
    </section>
    <!-- About Hero Closed -->


    <!-- Our Story -->
    <section class="about-story">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-col">
                    <h2>Our Story</h2>
                    <p>Belgravia Imports is committed to all-natural and small, artisan producers that surprise and
                        delight even the most sophisticated American consumer. Each of our brand partners has a
                        compelling story behind their products, and we make sure those get out.</p>
                    <p>Our sophisticated approach to brand building transforms promising international partners into
                        market leaders, leveraging cutting-edge distribution strategies, data-driven insights, and our
                        prestigious network of premium retail, e-commerce, and food/beverage service channels.</p>
                    <p>With an unwavering commitment to innovation and excellence, we serve as the definitive gateway
                        for discerning brands seeking to captivate the world's most influential market, establishing
                        ourselves as the trusted authority where culinary artistry meets commercial success.</p>
                </div>
                <div class="col-md-6 img-col">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/restaurantes-romanticos-en-nueva-york-190108105239001.jpg" alt="Our Story">
                    <img class="accent-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Belgravia+1.png" alt="Belgravia Detail">
                </div>
            </div>
        </div>
    </section>
    <!-- Our Story Closed -->

<!-- Brands logo secion -->
<?php get_template_part('page-templates/logos', 'section'); ?>
<!-- Brands logo secion end -->

    <!-- Gallery -->
    <section class="about-gallery">
        <div class="container-fluid">
            <div class="container section-header">
                <h2>Since 1987, Curating the Best</h2>
            </div>
            <div class="gallery-grid">
                <div class="img-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Image1_Belgravia.webp" alt="">
                </div>
                <div class="img-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/savoursmith-product-1.webp"
                        alt="Savoursmiths">
                </div>
                <div class="img-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dirnks-bakery-product-1.webp"
                        alt="The Drinks Bakery">
                </div>
                <div class="img-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tick-tock-product-1.webp"
                        alt="Tick Tock Tea">
                </div>
                <div class="img-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/healsi-water-product.webp"
                        alt="Healsi Water">
                </div>
                <div class="img-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rose-bud-product-1.webp"
                        alt="Rosebud Preserves">
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Closed -->


        <!-- CTA -->
    <section class="about-cta">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Belgravia+1.png" alt="Ronnie and Lilly Dick"
                        style="width:100%;border-radius:12px;">
                </div>
                <div class="col-md-7">
                    <h2>Founded by Ronnie and Lilly Dick</h2>
                    <p>Our family business began with a simple belief: American consumers deserved access to the world's
                        finest
                        specialty foods. What started as a passion for quality has grown into a trusted partnership with
                        producers who share our commitment to premium, healthy, and authentic products.</p>
                    <div class="btn-row">
                 <a href="<?php echo site_url('/brands'); ?>" class="cta-btn">Explore Our Brands</a>
              <a href="<?php echo site_url('/contact'); ?>" class="cta-btn-outline">Get In Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Closed -->


  <?php get_footer(); ?>
