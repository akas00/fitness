<!-- Header -->
<?php get_header(); ?>

<!-- NAVBAR -->
<?php include("section/navbar.php"); ?>
<!-- SOCIAL SHARE-->
 
    <div class="social-share ">
      <ul> 

      <li>
      <a href="<?php echo get_theme_mod('facebook'); ?>">
      <i class="fi-cnsuxl-facebook-circle"></i>
      </a>
</li>
<a href="<?php echo get_theme_mod('instagram'); ?>">
        <i class="fi-xnsuxl-instagram"></i>
      </a>
<li>

</li>
<a href="<?php echo get_theme_mod('youtube'); ?>">
<i class="fi-xwsuxl-youtube"></i>
      </a>

</ul>
      
    
     
    </div>



<!-- LANDING -->
<section class="landing" id="landing" style="background-image: url(<?php echo get_theme_mod('Banner_image'); ?>)">
  <div class="motive">
  <?php echo get_theme_mod('banner_title'); ?>
  </div>

  <div class="button button-landing">
    <a href="#about">Get Started Now <i class="fi-xwlrxl-arrow-simple-wide"></i></a>
  </div>
</section>


<!-- ABOUT -->
<section class="section about" id="about" data-aos="zoom-in" data-aos-delay="300">
  <div class="row">
    <div class="col-md-6 col-sm-12 section-1">
      <div class="title"> <?php echo get_theme_mod('about_title'); ?></div>
      <div class="content"> <?php echo get_theme_mod('about_details'); ?>
      </div>
      <div class="button learn-more">
        <a href="#plan">Learn More
          <i class="fi-xwlrxl-arrow-simple-wide"></i></a>
      </div>
    </div>
    <div class="col-md-6 section-2">
      
      <img src="<?php echo get_theme_mod('About_image'); ?>" alt="">
    </div>
  </div>
</section>


<!-- VIDEO SECTION -->
<section class="video" id="video">
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source
      src="https://ak.picdn.net/shutterstock/videos/1010998511/preview/stock-footage-shot-of-a-fit-young-woman-exercising-with-pilates-ball-at-gym-female-athlete-doing-workout-using.webm"
      type="video/mp4">
  </video>
</section>


<!-- WHY US -->

<?php
    $args = array(
    'post_type'     => 'choose',
    'post_status'   => 'publish',
    
    'posts_per_page'=> 8,
    );
    $choose = new WP_Query( $args );
?>  
<section class="why-us" id="why-us">
  <div class="title">Why Choose Us?</div>

  <div class="why-us-content">
  <?php if( $choose->have_posts() ) :
                while( $choose->have_posts() ) :
                $choose->the_post();
                ?> 
    <div data-aos="zoom-in">
    <div><a href="#plan"><img src= <?php echo get_the_post_thumbnail_url();?>
            alt=""></a></div>
      
      <br><br>
      <?php the_title(); ?>
    </div>
   
    <?php endwhile; endif; ?> 
  </div>
</section>


<!-- TESTIMONIALS -->

<?php
    $args = array(
    'post_type'     => 'testimonial',
    'post_status'   => 'publish',
    
    'posts_per_page'=> 8,
    );
    $testimonial = new WP_Query( $args );
?>  


<section class="testimonials" style="background-image: url('https://images.pexels.com/photos/28080/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');"  id="testimonials" data-aos="zoom-in" data-aos-delay="300">
  <div class="slick-carousel">
  <?php if( $testimonial->have_posts() ) :
                while( $testimonial->have_posts() ) :
                $testimonial->the_post();
                ?> 
    
    
    <div>
      <div class="feedback-img">
          
          
          <img src="<?php echo get_the_post_thumbnail_url();?>" alt="image"></div>
      <div class="feedback"><?php the_title();?></div>
      <div class="feedbacker"><?php the_excerpt() ?></div>
    </div>
    <?php endwhile; endif; ?> 
  </div>

</section>




<!-- TEAM -->

<?php
    $args = array(
    'post_type'     => 'team',
    'post_status'   => 'publish',
    
    'posts_per_page'=> 8,
    );
    $team = new WP_Query( $args );
?>  
<section class="team" id="team">
  <div class="title">Team</div>

  <div class="row team-members">

  <?php if( $team->have_posts() ) :
                while( $team->have_posts() ) :
                $team->the_post();
                ?> 

    <div class="col-md-4 col-sm-6" data-aos="zoom-in">
      <div class="team-name-detail">
      <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
        <p class="animate__animated animate__fadeInUp"><?php the_excerpt() ?><br> <?php the_field('member_name') ?> </p>
      </div>
      <div class="team-name"><?php the_title();?>
      
      
      </div>
      
    </div>
    <!-- <p class="animate__animated animate__fadeInUp">exp</p>
      </div>
      <div class="team-name">name <br> title</div>
    </div> -->
    
    <?php endwhile; endif; ?> 


  </div>
</section>


<!-- PLAN -->

<section class="plan" id="plan">
  <div class="title"> Plans</div>

  <div class="plans">

    <div class="row">
      <div class="" data-aos="zoom-in" data-aos-delay="300">

        <div class="gym" style="background-image: linear-gradient(0deg, rgba(239, 14, 13, 0.3), rgba(239, 14, 13, 0.5)), url(<?php echo get_theme_mod('plan1_image'); ?>)">
          <h2><?php echo get_theme_mod('plan1_title'); ?></h2>
          <p class="animate__animated animate__fadeIn"><?php echo get_theme_mod('plan1_details'); ?></p>
        </div>

        <div class="zumba" style="background-image: linear-gradient(0deg, rgba(239, 14, 13, 0.3), rgba(239, 14, 13, 0.5)), url(<?php echo get_theme_mod('plan2_image'); ?>)">
          <h2><?php echo get_theme_mod('plan2_title'); ?></h2>
          <p class="animate__animated animate__fadeIn"><?php echo get_theme_mod('plan2_details'); ?></p>
        </div>

        <div class="aerobic" style="background-image:  linear-gradient(0deg, rgba(239, 14, 13, 0.3), rgba(239, 14, 13, 0.5)),url(<?php echo get_theme_mod('plan3_image'); ?>)">
          <h2><?php echo get_theme_mod('plan3_title'); ?></h2>
          <p class="animate__animated animate__fadeIn"><?php echo get_theme_mod('plan3_details'); ?></p>
        </div>

        <div class="cardio" style="background-image:  linear-gradient(0deg, rgba(239, 14, 13, 0.3), rgba(239, 14, 13, 0.5)),url(<?php echo get_theme_mod('plan4_image'); ?>)">
          <h2><?php echo get_theme_mod('plan4_title'); ?></h2>
          <p class="animate__animated animate__fadeIn"><?php echo get_theme_mod('plan4_details'); ?></p>
        </div>

        <div class="diet-program" style="background-image: linear-gradient(0deg, rgba(239, 14, 13, 0.3), rgba(239, 14, 13, 0.5)), url(<?php echo get_theme_mod('plan5_image'); ?>)">
          <h2><?php echo get_theme_mod('plan5_title'); ?></h2>
          <p class="animate__animated animate__fadeIn"><?php echo get_theme_mod('plan5_details'); ?></p>
        </div>
      </div>

      <div class="" >
        <div class="personal-training" style="background-image: linear-gradient(0deg, rgba(239, 14, 13, 0.3), rgba(239, 14, 13, 0.5)), url(<?php echo get_theme_mod('plan6_image'); ?>)">
          <h2><?php echo get_theme_mod('plan6_title'); ?> </h2>
          <p class="animate__animated animate__fadeIn"><?php echo get_theme_mod('plan6_details'); ?></p>
        </div>

        <div class="exercise-programming" style= "background-image: linear-gradient(0deg, rgba(239, 14, 13, 0.3), rgba(239, 14, 13, 0.5)), url(<?php echo get_theme_mod('plan7_image'); ?>)">
          <h2><?php echo get_theme_mod('plan7_title'); ?></h2>
          <p class="animate__animated animate__fadeIn"><?php echo get_theme_mod('plan7_details'); ?></p>
        </div>
      </div>

    </div>

  </div>
</section>




<!-- PRICING & OPENING Hours  -->
      

<section id="pricing" data-aos="zoom-in" data-aos-delay="300">
  <div class="title">OPening Hours & Pricing</div>
  <div class="content">
    <div class="opening-hrs"><b>Opening Hours :</b> 5:00 AM - 11:00 AM, 3:00PM - 8:00PM (Sun - Fri)</div>
    <br><br>
    <div class="pricing">
      <div>
        <b>Admission :</b> Rs 500
      </div>
      <br>

      <?php
    $args = array(
    'post_type'     => 'pricing',
    'post_status'   => 'publish',
    
    'posts_per_page'=> 8,
    );
    $pricing = new WP_Query( $args );
?> 
    
      <div class="price-detail">
        <!-- ONE MONTh -->

        
<?php if( $pricing->have_posts() ) :
                while( $pricing->have_posts() ) :
                $pricing->the_post();
                ?> 

                
        <div class="one-month">

          <b><?php the_title();?></b>
          <br>
          <div> <span class="type"><?php the_field('fitness_type1');?>&nbsp; &nbsp;:</span>
            <span class="price"><?php the_field('fitness_type1_price');?> </span>
          </div>

          <div> <span class="type"><?php the_field('fitness_type2');?>&nbsp; &nbsp;:</span>
            <span class="price"><?php the_field('fitness_type2_price');?> </span>
          </div>

          <!-- <div> <span class="type"><?php the_field('fitness_type3');?>&nbsp; &nbsp;:</span>
            <span class="price"><?php the_field('fitness_type3_price');?> </span>
          </div> -->
          
        </div>
        <br>

       
        <br>


        <?php endwhile; endif; ?> 

      </div>
      
    </div>
  </div>
</section>




<!-- FOOTER -->
<?php get_footer(); ?>