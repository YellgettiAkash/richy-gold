<?php 
/*
Template Name: Left Side Bar layout
Template Post Type: post, page, event
*/
// Page code here...

get_header(); ?>
	<div class="container">
<div class="col-sm-9">
	

	<?php
	if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<?php 
		$id = ['child_of' =>$post->ID];
		wp_list_pages($id);
	?>

	<article class="post">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>
	</article>
	
	<?php endwhile;
	
	else :
		echo '<p>No content found</p>';
	
	endif;
	?>

	<?php the_posts_pagination( array(
    'mid_size' => 2,
    'prev_text' => __( 'previous', 'textdomain' ),
    'next_text' => __( 'next', 'textdomain' ),
) ); ?>
</div>
<div class="col-sm-3">
	<?php get_sidebar(); ?>	
</div>

	</div>
	<?php get_footer(); ?>