

    <!-- Heritage Banner -->
<?php 
$heading = get_field('logos_heading');
$desc = get_field('logos_descriptions');
?>

<section class="about-heritage">
    <div class="container">
        <div class="inner-box">

            <?php if($heading): ?>
                <h2><?php echo $heading; ?></h2>
            <?php endif; ?>

            <?php if($desc): ?>
                <p><?php echo $desc; ?></p>
            <?php endif; ?>

            <div class="stats-row">

                <?php if(have_rows('logo_images')): ?>
                    <?php while(have_rows('logo_images')): the_row(); 

                        $logo = get_sub_field('logo_img');

                    ?>

                        <?php if($logo): ?>
                            <img src="<?php echo $logo['url']; ?>" alt="">
                        <?php endif; ?>

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>

        </div>
    </div>
</section>
    <!-- Heritage Banner Closed -->