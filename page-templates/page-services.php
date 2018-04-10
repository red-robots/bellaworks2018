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
                		<section class="service-intro">
                		  <div class="sservice">
                              <h2>Custom Design, Build, and Maintain Your Website</h2>
                              <h3>Build smart websites that are strategically designed to achieve our your goals</h3>
                              <ul>
                                    <li>Custom build a new site</li>
                                   <li>Redesign or update your current site</li>
                                    <li>Create or refresh branding, logos, content, and collaterals</li>
                                    <li>Host your site with us</li>

                              </ul>
                              <div class="btn pillblue">
                                  <a href="<?php bloginfo('url'); ?>/services/website-design-development">
                                  Build Now <i class="fas fa-angle-double-right"></i>
                                  </a>
                              </div> 
                          </div>
                          <div class="sservice">
                              <h2>Implement Digital Marketing</h2>
                              <h3>Boost your web presence with targeted digital marketing techniques.</h3>
                              <ul>
                                <li>Increase your search engine optimization</li>
                                <li>Utilize social media</li>
                                <li>Run digital paid campaigns</li>
                                <li>Establish your Google business presence</li>

                              </ul>
                               <div class="btn pillblue">
                                  <a href="<?php bloginfo('url'); ?>/services/digital-marketing">
                                  Start Boosting <i class="fas fa-angle-double-right"></i>
                                  </a>
                              </div> 
                          </div>
                          <div class="sservice">
                              <h2>Grow Your Business</h2>
                              <h3>Reach your organization’s goals with smart, high performing solutions. </h3>
                              <ul>
                                <li>Implement e-commerce platforms</li>
                                <li>Integrate Customer Relationship Management </li>
                                <li>Connect with clients or members through interactive forms and calendars</li>

                              </ul>
                               <div class="btn pillblue">
                                  <a href="<?php bloginfo('url'); ?>/services/grow-your-business">
                                  Grow Now <i class="fas fa-angle-double-right"></i>
                                  </a>
                              </div> 
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