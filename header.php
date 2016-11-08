<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="<?php the_title(); ?>" />
  <meta property="og:site_name" content="<?php bloginfo('name') ?>">

  <?php
  /* Theme color for browsers that support it
  <meta name="theme-color" content="#000">
  */
  ?>

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>

  <?php if (is_search()) { ?>
   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>

  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
  
  		<link type="text/css" rel="stylesheet"  href="<?php bloginfo('template_url');?>/assets/css/ginger.min.css">
		<link type="text/css" rel="stylesheet"  href="<?php bloginfo('template_url');?>/assets/css/theme.css">
		<script src="https://use.fontawesome.com/71eb3125bb.js"></script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php // Header ?>
  
  
  <header class="container">
		<div class="row">
			<div class="col-7">
				<h1 class="branding"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
			<div class="col-5 social">
				<a href="https://www.facebook.com/hudsonhawkpta/" style="color:#fff;">
					<i class="fa fa-facebook-square" aria-hidden="true"></i></a>
					
				    <nav class="main-nav">
				      <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
				    </nav>

			</div>
		</div>
	</header>


  <?php // Main Content ?>
  <main>
