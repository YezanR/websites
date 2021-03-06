<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package  WordPress
 * @file     content-single.php
 * @author   FairPixels
 * @link 	 http://fairpixels.com
 */
?>

    <?php
            /*  change color of theme according to the category slug ( yezan edit ) 
                BEGIN EDIT             */  
                $postID = get_the_ID();
                //change_color_by_category_js($postID);
              /* END EDIT */ ?>

<div class="post-wrap">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	
	<header class="entry-header">
		<h1><?php the_title(); ?></h1>
		
		<?php if ( fp_get_settings( 'fp_show_post_meta' ) == 1 ){ ?>
			<div class="entry-meta">
				
				<div class="left">
					<span class="date">
						<i class="icon-calendar"></i>
						<?php echo get_the_date(); ?>
					</span>
					
					<?php if ( comments_open() ) : ?>
						<span class="comments">
							<i class="icon-comments"></i>
							<?php comments_popup_link( __('no comments', 'fairpixels'), __( '1 comment', 'fairpixels'), __('% comments', 'fairpixels')); ?>
						</span>		
					<?php endif; ?>	
					
					<span class="views">
						<i class="icon-eye-open"></i>								
						<?php echo getPostViews(get_the_ID()); ?>
					</span> 
					
					<span class="category">
						<i class="icon-folder-close-alt"></i>									
						<?php the_category(', ' ); ?>
					</span>
											
					<?php the_tags('<span class="tags"><i class="icon-tags"></i>',' , ','</span>'); ?>
				</div>
				
				<?php if ( fp_get_settings( 'fp_show_post_social' ) == 2 ){ ?>
					<div class="social">
						<span class="fb">
							<a href="http://facebook.com/share.php?u=<?php the_permalink() ?>&amp;t=<?php the_title(); ?>" target="_blank"><i class=" icon-facebook-sign"></i></a>
						</span>				
						
						<span class="twitter">
							<a href="http://twitter.com/home?status=<?php the_title(); ?> <?php the_permalink();?>" target="_blank"><i class="icon-twitter"></i></a>				
						</span>
						
						<span class="gplus">
							<a href="https://plus.google.com/share?url=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" target="_blank"><i class="icon-google-plus-sign"></i></a>			
						</span>
						
						<span class="pinterest">
							<?php
								$thumbnail = "";
								if (has_post_thumbnail() ){
									 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
									 $thumbnail = $image[0];
								}
							?>
							<a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&amp;media=<?php echo $thumbnail; ?>&amp;description=<?php the_title() ?>" target="_blank">		
							<i class="icon-pinterest"></i>					
							</a>					
						</span>				
					</div>
				<?php } ?>
			</div>
		<?php } ?>
	</header>
	
	
	<div class="entry-content-wrap">		
				
		
		<?php $saved_img_ids = get_post_meta($post->ID, 'fp_meta_gallery_img_ids', true); ?>
		
		<?php if (!empty($saved_img_ids)) { ?>
				
			<script>
				jQuery(document).ready(function($) {
					
					$('.entry-slider').show();
					$('.entry-slider-nav').flexslider({
						animation: "slide",
						controlNav: false,
						animationLoop: true,
						slideshow: false,
						itemWidth: 190,
						itemMargin: 0,
						asNavFor: '.entry-slider-main'
					});
					  
					$('.entry-slider-main').flexslider({
						animation: "slide",
						controlNav: false,
						animationLoop: true,
						slideshow: true,
						sync: ".entry-slider-nav"
					});
				});
			</script>

			<div class="entry-slider">
				<div class="entry-slider-main flexslider">
					<ul class="slides">
						<?php $img_ids = explode(',',$saved_img_ids);
							foreach($img_ids as $img_id) { 
								if (is_numeric($img_id)) {
									$image_attributes = wp_get_attachment_image_src( $img_id, 'fp780_400');?>
									<li><img class="attachment-fp780_400" src="<?php echo $image_attributes[0]; ?>"></li>
									<?php									
								}
							}
						?>
					</ul>
				</div>
				<div class="entry-slider-nav main-color-bg flexslider">
					<ul class="slides">
						<?php 
							foreach($img_ids as $img_id) { 
									if (is_numeric($img_id)) {
										$image_attributes = wp_get_attachment_image_src( $img_id, 'fp239_130');?>
										<li><img src="<?php echo $image_attributes[0]; ?>"></li>
										<?php									
									}
								}
						?>
					</ul>
				</div>
			</div>
		<?php } ?>
	
			<?php				
				$show_video = get_post_meta($post->ID, 'fp_meta_post_add_video', true); 				
				
				if ($show_video == 1){
					$video_code = get_post_meta($post->ID, 'fp_meta_post_video_code', true); ?>
					
					<div class="entry-video">
						<?php echo $video_code; ?>
					</div>					
			<?php					
				}
				?>
				
				<?php 
				$show_feat_img = get_post_meta($post->ID, 'fp_meta_post_add_featimg', true); 
		
				if ($show_feat_img == 1){ ?>
					<div class="entry-image">
						<?php the_post_thumbnail( 'fp780_400' ); ?>
					</div>					
				<?php 
				}
			?>
		
		<div class="entry-content">			
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'fairpixels' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- /entry-content -->
		
	</div><!-- /entry-content-wrap -->
		
	<?php setPostViews(get_the_ID()); ?>
</article><!-- /post-<?php the_ID(); ?> -->

<?php if ( fp_get_settings( 'fp_show_post_author' ) == 1 ) { ?>
	<div class="entry-author">				
		<div class="author-avatar">
			<?php echo get_avatar( get_the_author_meta( 'user_email' ), 68 ); ?>
		</div>		
		<div class="author-description">
			<h4><?php printf( __( 'A propos de %s', 'fairpixels' ), get_the_author() ); ?></h4>
			<?php the_author_meta( 'déscription' ); ?>
			<div id="author-link">
				<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
					<?php printf( __( 'Voir tout les articles de %s <span class="meta-nav">&rarr;</span>', 'fairpixels' ), get_the_author() ); ?>
				</a>
			</div><!-- /author-link	-->
		</div><!-- /author-description -->
	</div><!-- /author-info -->
	
	<?php } //endif; 
	
	 if ( fp_get_settings( 'fp_show_post_nav' ) == 1 ) { ?>
		<div class="entry-nav main-color-bg">
			<?php previous_post_link( '<div class="prev"><i class="icon-chevron-left"></i><div class="link">%link</div></div>', __( 'Article précédent', 'fairpixels' ) ); ?>
			<?php next_post_link( '<div class="next"><div class="link">%link</div><i class="icon-chevron-right"></i></div>', __( 'Article suivant', 'fairpixels' ) ); ?>
		</div>
	<?php } 
		
	if ( fp_get_settings( 'fp_show_related_posts' ) == 1 ){
		get_template_part( 'includes/related-posts' );
	}
?>
</div><!-- /post-wrap -->
