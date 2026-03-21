<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Belgravia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


  <!-- Header -->
  <header class="site-header">
    <div class="container">
      <div class="row">

        <div class="col-md-3 site-brand">
         <a href="<?php echo home_url(); ?>">
               <img src="<?php echo esc_url(wp_get_upload_dir()['baseurl'] . '/2026/03/Logo_Belgravia.webp'); ?>" alt="">
            </a>
          <!-- Toggle Bar -->
          <div class="toggle-bar">
            <i class="fa fa-bars"></i>
          </div>
        </div>

        <div class="col-md-6 header-menu">
          <ul class="main-menu">
            <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
            <li><a href="<?php echo site_url('/services'); ?>">Services</a></li>
            <li><a href="<?php echo site_url('/brands'); ?>">Brands</a></li>
            <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
          </ul>
        </div>

        <div class="col-md-3 header-right">
          <ul class="social-list">
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          </ul>
          <div class="custom-btn"><a href="<?php echo site_url('/brands'); ?>">Shop Products</a></div>
        </div>

      </div>
    </div>
  </header>
  <!-- Header Closed -->