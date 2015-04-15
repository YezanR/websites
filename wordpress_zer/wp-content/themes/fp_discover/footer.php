<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package  WordPress
 * @file     footer.php
 * @author   FairPixels
 * @link 	 http://fairpixels.com
 */

?>

	</div><!-- /main -->
</div><!-- /container -->
<?php   if( !is_page_template('page-home.php') ) $cat = get_the_category();
        else $cat = array();?>
<footer id="footer" class="category-<?php echo $cat[0]->slug ;?>">

    <?php $cat = null; ?>
        
	<div class="footer-widgets main-color-bg">
		<div class="content-wrap">
		
			<div class="one-fourth footer-widget-wrap">			
				<?php 
					if ( ! dynamic_sidebar( 'footer-1' ) ) : 			
					endif;
				?>
			</div>
			
			<div class="one-fourth">	
				<?php 
					if ( ! dynamic_sidebar( 'footer-2' ) ) : 			
					endif;
				?>
			</div>
			
			<div class="one-fourth">	
				<?php 
					if ( ! dynamic_sidebar( 'footer-3' ) ) : 			
					endif;
				?>
			</div>
			
			<div class="one-fourth last">
				<?php 
					if ( ! dynamic_sidebar( 'footer-4' ) ) : 			
					endif;					
				?>
			</div>
		
		</div><!-- /inner-wrap -->			
		
	</div><!-- /footer-widgets -->
	
	<div class="footer-info ">
		<div class="content-wrap">
			<?php if (fp_get_settings( 'fp_footer_text_left' )){ ?> 
				<div class="footer-left">
					<?php echo fp_get_settings( 'fp_footer_text_left' ); ?>			
				</div>
			<?php } ?>
			
			<?php if ( fp_get_settings( 'fp_show_header_social' ) == 10 ){ ?>		
				
				<div class="footer-right">
					<ul class="list">
						<?php if (fp_get_settings( 'fp_twitter_url' )){ ?>
							<li class="twitter"><a href="<?php echo fp_get_settings( 'fp_twitter_url' ); ?>"><i class="icon-twitter"></i></a></li>
						<?php } ?>
						
						<?php if (fp_get_settings( 'fp_fb_url' )){ ?>
							<li class="fb"><a href="<?php echo fp_get_settings( 'fp_fb_url' ); ?>"><i class="icon-facebook"></i></a></li>
						<?php } ?>
						
						<?php if (fp_get_settings( 'fp_gplus_url' )){ ?>
							<li class="gplus"><a href="<?php echo fp_get_settings( 'fp_gplus_url' ); ?>"><i class="icon-google-plus"></i></a></li>
						<?php } ?>
						
						<?php if (fp_get_settings( 'fp_linkedin_url' )){ ?>
							<li class="linkedin"><a href="<?php echo fp_get_settings( 'fp_linkedin_url' ); ?>"><i class="icon-linkedin"></i></a></li>
						<?php } ?>
						
						<?php if (fp_get_settings( 'fp_pinterest_url' )){ ?>
							<li class="pinterest"><a href="<?php echo fp_get_settings( 'fp_pinterest_url' ); ?>"><i class="icon-pinterest"></i></a></li>
						<?php } ?>
						
						<?php if (fp_get_settings( 'fp_instagram_url' )){ ?>
							<li class="instagram"><a href="<?php echo fp_get_settings( 'fp_instagram_url' ); ?>"><i class="icon-instagram"></i></a></li>
						<?php } ?>
						
						<?php if (fp_get_settings( 'fp_dribbble_url' )){ ?>
							<li class="dribbble"><a href="<?php echo fp_get_settings( 'fp_dribbble_url' ); ?>"><i class="icon-dribbble"></i></a></li>
						<?php } ?>
						
						<?php if (fp_get_settings( 'fp_youtube_url' )){ ?>
							<li class="youtube"><a href="<?php echo fp_get_settings( 'fp_youtube_url' ); ?>"><i class="icon-youtube"></i></a></li>
						<?php } ?>
						
						<?php if (fp_get_settings( 'fp_rss_url' )){ ?>
							<li class="rss"><a href="<?php echo fp_get_settings( 'fp_rss_url' ); ?>"><i class="icon-rss"></i></a></li>
						<?php } ?>
						
					</ul>
				</div>
			
			<?php } ?>
			
                        <!-- display contact us link yezan edit -->
                        <?php $v = get_page_by_title("contact");?> 
                             <div class="contact-link"  >
                                 <a href="<?php echo $v->guid?>">اتصل بنا</a>
                             </div>
		</div><!-- /inner-wrap -->	
        
	</div> <!--/footer-info -->
	
       
       
       
        

</footer><!-- /footer -->

<?php  wp_footer(); ?>
    
</body>
</html>