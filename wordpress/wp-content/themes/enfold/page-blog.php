<?php 
  /* Template Name: Blog Michael */
?>

<?php get_header(); ?>

<main class="blog">
<div class="row center-xs middle-xs linear-gradient hero-text">
	<div class="col-sm-12">		
		<h1 class="hero-headline">Blog</h1>
	</div>
</div>

<?php 
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$the_query = new WP_Query( 'cat=1&paged=' . $paged );
?>

<?php if ( $the_query->have_posts() ) : ?> 
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  <?php
    $posts = get_posts( array('posts_per_page'=> 8));
    $post_id = get_the_ID();
  ?>

  <?php foreach ($posts as $post) : setup_postdata( $post ); 
    $title = the_title( $before , $after ,false);
		$postContent = $post->post_content;
  ?>
  
    <section class="blog-post" id=" " value="">
      <div class="row center-xs">
        <div class="col-sm-7">
          <img src="<?php echo the_post_thumbnail_url(); ?>" /> 
          <h2><?php echo $title; ?></h2>      
					<h4><?php echo the_date('l, F j, Y'); ?>
          <p class=""><?php echo wp_trim_words( $postContent, 25, NULL ); ?></p> 
					<a href="<?php echo get_permalink( $post, false ); ?>">read more >></a>
        </div>
      </div>
    </section>

  <?php
  endforeach;
  ?>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>



<?php get_footer(); ?>
