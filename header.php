<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Nunito" />

		<?php wp_head(); ?>

	</head>
    <body>
	<div class="fluid-container header-container">
<nav class="navbar navbar-expand-lg px-0">
<a class="navbar-brand" href="#">
    <img src="<?php echo get_stylesheet_directory_uri()."/images/logo.png"?>" alt="">
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <div class="col col-md-2 ge-div">
  <div><span class="ge">General enquiries</span>
  <br>
     <span class="number">0800 304 7399</span></div>
    
  </div>
  <div class="col col-md-3 " style="padding-left: 25px;">
        <button class="btn btn-cb">Request a callback</button>
  </div>
  <?php wp_nav_menu( array(
    'theme_location'  => 'primary',
    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse main-menu',
    'container_id'    => 'main-menu',
    'menu_class'      => 'navbar-nav mr-auto',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
) );?>
  </div>
</nav>
  </div>
        
	
