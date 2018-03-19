<?php 
$phone = get_field('phone_number', 'option');

 ?>
<div id="secondary" class="widget-area" role="complementary">
<div class="callus wow fadeInUp" data-wow-delay=".<?php echo $i; ?>s" >
<h2>Contact Us Today</h2>

<!-- <h3>Call Us Today</h3> -->
<div class="cta-phone"><?php echo $phone; ?></div>

<h3>Or Submit a Request</h3>
<?php echo do_shortcode('[gravityform id="6" title="false" description="false"]'); ?>
</div>
	
</div><!-- #secondary -->
