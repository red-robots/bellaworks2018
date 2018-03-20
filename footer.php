<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	
	<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
	<meta itemprop="streetAddress" content="220 East Blvd Suite 200A">
	<meta itemprop="addressLocality" content="Charlotte">
	<meta itemprop="addressRegion" content="North Carolina">
	<meta itemprop="addressCountry" content="United States">
	<meta itemprop="postalCode" content="28203"></span>
	<meta itemprop="name" content="Bellaworks">
	<meta itemprop="url" content="https://bellaworksweb.com/">
	<meta itemprop="email" content="info@bellaworksweb.com">

</div><!-- #page -->

<footer id="colophon" role="contentinfo">
		<div class="site-info">
		
         	
             <?php 
			 		$address = get_field('address','option'); 
			 		$city = get_field('city','option');
					$state = get_field('state','option');
					$zip = get_field('zip','option');
					$year = date('Y');
					$phone = get_field('phone_number','option');
					$fax = get_field('fax','option');

					$facebook = get_field('facebook_link','option');
					$linkedin = get_field('linkedin_link','option');
					$pinterest = get_field('pintrest_link','option');
					$instagram = get_field('instagram_link','option');
					$twitter = get_field('twitter_link','option');
			 ?>
             
			  	<?php //acc_social_links(); ?>
			  	<div class="social ">
					<ul>
						<?php if($facebook != '') { ?>
							<li class="facebook">
								
									<a target="_blank" href="<?php echo $facebook; ?>"><i class="fab fa-facebook-f fa-3x"></i></a>
								
							</li>
						<?php } ?>
						<?php if($pinterest != '') { ?>
							<li class="pinterest">
								
									<a target="_blank" href="<?php echo $pinterest; ?>"><i class="fab fa-pinterest-p fa-3x"></i></a>
								
							</li>
						<?php } ?>
						<?php if($instagram != '') { ?>
							<li class="instagram">
								
									<a target="_blank" href="<?php echo $instagram; ?>"><i class="fab fa-instagram fa-3x"></i></a>
								
							</li>
						<?php } ?>
						<?php if($twitter != '') { ?>
							<li class="twitter">
								
									<a target="_blank" href="<?php echo $twitter; ?>"><i class="fab fa-twitter fa-3x"></i></a>
								

							</li>
						<?php } ?>
						<?php if($linkedin != '') { ?>
							<li class="linkedin">
								
									<a target="_blank" href="<?php echo $linkedin; ?>"><i class="fab fa-linkedin-in fa-3x"></i></a>
								
							</li>
						<?php } ?>
					</ul>
				</div>


				<div class="footer-text">
				  <?php echo '&copy; ' . $year . ' Bellaworks Web | ' . $address . ' | ' . $city . ' , ' . $state . ' ' . $zip; ?>
	            </div><!-- footer text -->
            
             
            
		</div><!-- .site-info -->
        
       
        
	</footer><!-- #colophon -->
<?php the_field('google_analtyics','option'); ?>
<?php wp_footer(); ?>

<!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/3838522.js"></script>
  <script type="text/javascript">
  	$(window).load(function() {
	  $("body").removeClass("preload");
	});
  </script>
<!-- End of HubSpot Embed Code -->
</body>
</html>