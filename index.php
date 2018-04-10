<?php
/**
 * The main template file
 *
 * 
 */

get_header(); 

// $banner = get_bloginfo('template_url') . '/images/banner-5.gif?' . date("Ymdgis");

$banner = get_bloginfo('template_url') . '/images/bg.png?';
?>

<div class="banner-home" >
    <img src="<?php echo $banner; ?>">
    <div class="banner-text">
        <h2 class="homeintro wow fadeIn" data-wow-duration="2s">
           
            <span itemprop="priceRange">Creative Digital Strategies.</span> 
        </h2>
        <h3 class="wwd wow fadeIn" data-wow-duration="3s" data-wow-delay=".3s">
          

We design a custom online presence branded to align with your company, engage with your customers, and strategically drive results.        </h3>
        

        <div class="btn pillwhite">
            <a href="" class="wow pulse startnow"   data-wow-iteration="2">
                Start Now
            </a>
        </div>

     </div>

     

</div>

 <!-- 

        Learn More with New Links



  -->
<div class="home-projects ">
    <div class="wrapper">
        <section class="home-projects-container home-section">
            <h2 class="center header">What We Do</h2>
           
            
            <div class="homeboxes">
                <div class="homebox wow fadeInUp">
                    <div class="icon wow rubberBand" data-wow-delay="1.5s">
                        <i class="far fa-code fa-5x"></i>
                    </div>
                    <h2>Custom Design, Build, and Maintain your Website</h2>
                    <ul class="homelist">
                        <li>Custom Strategies</li>
                        <li>New Sites, Redesigns</li>
                        <li>Our Process</li>
                    </ul>
                    <div class="btn pillwhite">
                        <a href="<?php bloginfo('url'); ?>/services/website-design-development">
                            Start Now
                        </a>
                    </div>
                </div>
                <div class="homebox wow fadeInUp">
                     <div class="icon wow rubberBand" data-wow-delay="1.5s">
                        <i class="fal fa-comments fa-5x" ></i>
                    </div>
                    <h2>Digital Marketing</h2>
                    <ul class="homelist">
                        <li>Search Engine Optimization</li>
                        <li>Social Media Integration</li>
                        
                    </ul>
                    <div class="btn pillwhite">
                        <a href="<?php bloginfo('url'); ?>/services/digital-marketing">
                            Start Now
                        </a>
                    </div>
                </div>
                <div class="homebox wow fadeInUp">
                    <div class="icon wow rubberBand" data-wow-delay="1.5s">
                        <i class="far fa-chart-line fa-5x"></i>
                    </div>
                    <h2>Grow your business</h2>
                    <ul class="homelist">
                        <li>Sell Online</li>
                        <li>Integrate with a CRM</li>
                       <li>Automate and Integrate</li>
                    </ul>
                    <div class="btn pillwhite">
                        <a href="<?php bloginfo('url'); ?>/services/grow-your-business">
                            Start Now
                        </a>
                    </div>
                </div>
            </div>


       
        </section><!-- home projects container -->
    </div><!-- wrapper -->
</div><!-- home projects -->



<div class="home-projects ">
    <div class="wrapper">
        <section class="home-projects-container home-section ">
        <h2 class="center header">Why Us</h2>
            <section class="home-text">
                
                <p>Bellaworks has been doing web design and development work for clients in the Charlotte area and beyond for over a decade. If you consider that internet years are kind of, well, like dog years, this is a long time! We are a full scale firm and we welcome projects of all sizes, whether it be a simple website to get you started or a more complex endeavor. We can provide various levels of support both in the strategic development of your site and in its ongoing maintenance.</p>

                <h3 class="center">We believe that</h3>
   <p> - the partnership we develop with our clients in the earliest stages of projects and our ongoing relationships with them (or other description) is what sets Bellaworks apart.</p>

    <p>We invite you to learn more about working with us.</p>

    <h3 class="center">A Quick Video of Some of Our Work</h3>
        <div class="embed-container">
            <?php 



// specific post ID you want to pull
$post = get_post(36); 
setup_postdata( $post );
 
    
 

            the_field('our_work_video'); 
            wp_reset_postdata();
            ?>
        </div>

            </section>
        </section><!-- home projects container -->
    </div><!-- wrapper -->
</div><!-- home projects -->




  
    

 


<?php get_footer(); ?>