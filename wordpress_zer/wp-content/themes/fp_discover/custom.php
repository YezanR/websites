



<?php if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?>
		<div class="post" >
		<h1><a href="<?php the_permalink() ?>" ><?php the_title() ?></a> </h1>
		<div class="entry-content">
		<?php 
		the_content();
?>
		</div>
				

		endwhile;
	endif;
?>


