<?php
/**
 * Template Name: Request Form
 *
 */

 ?>
 
 <?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

<div class="wrapper">
	<header id="masthead" class="site-header" role="banner">
    
		<?php if(is_home()) { ?>
            <h1 class="logo"></h1>
        <?php } else { ?>
            <div class="logo"></div>
        <?php } ?>
        
		<div class="header-right">
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
               <!-- <a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>">
						<?php //_e( 'Skip to content', 'twentytwelve' ); ?>
                </a>-->
                <?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
            </nav><!-- #site-navigation -->
            
            	<div class="phone"><?php the_field('phone_number','option'); ?></div><!-- phone -->
            
        </div><!-- header right -->

	</header><!-- #masthead -->
   </div><!-- wrapper -->

	
    <?php if ( is_page('news') ) {
		$pageClass = 'bgcolor-beige';
	} else {
		$pageClass = 'bgcolor-grey';
	}
	?>
    <div id="main" class="<?php echo $pageClass; ?>">

	<div class="wrapper">
    <div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header><!-- .entry-header -->
                
                <div class="entry-content">
                	
                	<?php the_content(); ?>
                </div><!-- entry content -->
                
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
</div><!-- wrapper -->
<?php get_footer(); ?>