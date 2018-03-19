<?php
/**
 * Template Name: Services
 *
 */

get_header(); ?>

	<div class="wrapper">
    <div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header><!-- .entry-header -->
                
                <div class="entry-content">
                	
                	

                	<?php if(is_page('services')) : ?>
                		<section class="service-blocks">
                		<div class="service">
                            <a href="<?php bloginfo('url'); ?>/services/website-design-development/#strategy">
                            <div class="icon"><i class="far fa-crosshairs fa-2x wow rubberBand" data-wow-delay="1.5s"></i></div>
                                <span class="stitle">Custom Strategies</span>
                            </a>
                		</div>
                		<div class="service">
                			<a href="<?php bloginfo('url'); ?>/services/website-design-development/#next-level">
                                <div class="icon"><i class="fal fa-desktop-alt fa-2x wow rubberBand" data-wow-delay="1.5s"></i></div>
                                <span class="stitle">New Sites, Redesigns</span>
                            </a>
                		</div>
                		<div class="service">
                			<a href="<?php bloginfo('url'); ?>/services/digital-marketing/#social-media">
                                <div class="icon"><i class="fal fa-share-alt fa-2x wow rubberBand" data-wow-delay="1.5s"></i></div>
                                <span class="stitle">Social Media Integration</span>
                            </a>
                		</div>
                		<div class="service">
                            <a href="<?php bloginfo('url'); ?>/services/digital-marketing/#social-media">
                                <div class="icon"></div>
                                <span class="stitle">Social Media Integration</span>
                            </a>
                		</div>
                		<!-- <div class="service">
                            <div class="icon"></div>
                			<a href="<?php bloginfo('url'); ?>/services/grow-your-business/#sell">Sell Online</a>
                		</div> -->
                		<div class="service">
                            <a href="<?php bloginfo('url'); ?>/services/grow-your-business/#crm">
                                <div class="icon"></div>
                                <span class="stitle">Integrate with a CRM</span>
                            </a>
                		</div>
                		<div class="service">
                            <a href="<?php bloginfo('url'); ?>/services/grow-your-business/#contact-forms">
                                <div class="icon"><i class="fal fa-magic fa-2x wow rubberBand" data-wow-delay="1.5s"></i></div>
                                <span class="stitle">Automate and Integrate</span>
                            </a>
                		</div>
                		</section>
                	<?php endif; ?>
                    
                 <?php the_content(); ?>
                    
                    <?php if(is_page(7)) : get_template_part('inc/process'); endif; ?>
                    
                </div><!-- entry content -->
                
			<?php endwhile; // end of the loop. ?>
            
            
            
            
<?php
if(is_page(104)) : // Responsive Websites page. Feed in portfolio tagged, "Responsive". (by ID)

	// Too many things tagged responsive. 
	// Want to put in animation of desktop to mobile...
	//get_template_part('tagged-responsive');

endif; // end if is page ?>
            
            
            

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar('services'); ?>
</div><!-- wrapper -->
<?php get_footer(); ?>