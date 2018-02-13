<?php 
/* 
 Template Name: Home Page 
*/
?>

<?php get_header(); ?>


  <main class='template-page'>

    <div class="hero">
        <?php $image = get_field('hero_image'); ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    </div>

    <div class="linear-gradient hero-text">
        <div class="text-block">
          <?php $text = get_field('hero_headline'); ?>
          <h1 class="hero-headline"><?php echo $text; ?></h1>

          <?php $ptext = get_field('hero_subheading'); ?>
          <p class="hero-subheading"><?php echo $ptext; ?></p>
        </div>
    </div>

    <div class="services">
      <div class="row center-xs">
        <div class="col-sm-12">
        </div>
      </div>

      <!-- Service 1 -->
      <div class="row center-xs middle-xs">
        <div class="col-sm-3 service-image">
          <?php $serviceImage = get_field('service_1_image'); ?>
          <img src="<?php echo $serviceImage['url']; ?>" alt="<?php echo $serviceImage['alt']; ?>" />
        </div> 

        <div class="col-sm-6 service-copy">
          <?php $text = get_field('service_1_heading'); ?>
          <h1 class="service-heading"><?php echo $text; ?></h1>
          
          <?php $text = get_field('service_1_text'); ?>
          <p class="service-copy"><?php echo $text; ?></p>
          
          <?php $text = get_field('service_1_link'); ?>
          <a href="<?php echo $text; ?>">Learn More >></a>
        </div>
      </div>
      <!-- end Service 1 -->

      <!-- Service 2 -->
      <div class="row center-xs middle-xs">
        <div class="col-sm-3 service-image">
          <?php $serviceImage = get_field('service_2_image'); ?>
          <img src="<?php echo $serviceImage['url']; ?>" alt="<?php echo $serviceImage['alt']; ?>" />
        </div> 

        <div class="col-sm-6 service-copy">
          <?php $text = get_field('service_2_heading'); ?>
          <h1 class="service-heading"><?php echo $text; ?></h1>
          
          <?php $text = get_field('service_2_text'); ?>
          <p class="service-copy"><?php echo $text; ?></p>
          
          <?php $text = get_field('service_2_link'); ?>
          <a href="<?php echo $text; ?>">Learn More >></a>
        </div>
      </div>
      <!-- end Service 2 -->
      
    </div>

    <div class="our-values linear-gradient">
        <div class="row center-xs">
          <div class="col-sm-12">
            <h1>Our Values</h1>
            <div class="values-list">
              <p>Accountability - We will provide services and products that will hold each dreamer to the highest of standards.</p>
              <p>Commitment - We recognize the needs of the community and will aim to serve and deliver key experiences that result in life changing opportunities.</p>
              <p>Leadership - We value the art of collaboration and delegation.</p>
            </div>
            <img class="values-circle" src="/wp-content/uploads/2017/11/values-circles.svg">
          </div>
        </div>
    </div>

    <div class="quote">
      <div class="row center-xs">
				<div class="col-sm-6">
					<h2>“Success is peace of mind attained only through self-satisfaction in knowing you made the effort to do the best of which you’re capable.”</h2>
      	</div>
				<div class="col-xs-offset-5 col-xs-3">
					<p>John Wooden<br/>
					American Basketball Player and Coach</p> 
				</div>
			</div>	
		</div>

    <div class='instagram'>
        <h1>Instagram</h1>
        <?php
        global $wp_query;
        $postid = $wp_query->post->ID;
        $postShortcode = get_post_meta($postid, 'instagram', true);
        echo do_shortcode( $postShortcode );
        wp_reset_query();
        ?>
    </div>

  </main>
<?php get_footer(); ?>
