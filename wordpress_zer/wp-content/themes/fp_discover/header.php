<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package  WordPress
 * @file     header.php
 * @author   FairPixels
 * @link 	 http://fairpixels.com
 */
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'fairpixels' ), max( $paged, $page ) );

	?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript">
	var themeDir = "<?php echo get_template_directory_uri(); ?>";
</script>
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>
<body <?php body_class(); ?>>
	
	<header id="header">			
		
		<div class="top main-color-bg top-custom">
			<div class="content-wrap">
				<?php if ( fp_get_settings( 'fp_show_top_menu' ) == 1 ){ ?>
				
					<div class="left">
						<ul class="list">
						
							<?php if (fp_get_settings( 'fp_menu_item1_title' )){ ?>
								<li>
									<?php if (fp_get_settings( 'fp_menu_item1_icon' )){ ?>
										<i class="<?php echo fp_get_settings( 'fp_menu_item1_icon' ); ?>"></i>
									<?php } ?>
									
									<?php if (fp_get_settings( 'fp_menu_item1_url' )){ ?>
										<a href="<?php echo fp_get_settings( 'fp_menu_item1_url' ); ?>">
											<?php echo fp_get_settings( 'fp_menu_item1_title' ); ?>
										</a>
									<?php } else {
										echo fp_get_settings( 'fp_menu_item1_title' );
									} ?>							
								</li>
							<?php } ?>
							
							<?php if (fp_get_settings( 'fp_menu_item2_title' )){ ?>
								<li>
									<?php if (fp_get_settings( 'fp_menu_item2_icon' )){ ?>
										<i class="<?php echo fp_get_settings( 'fp_menu_item2_icon' ); ?>"></i>
									<?php } ?>
									
									<?php if (fp_get_settings( 'fp_menu_item2_url' )){ ?>
										<a href="<?php echo fp_get_settings( 'fp_menu_item2_url' ); ?>">
											<?php echo fp_get_settings( 'fp_menu_item2_title' ); ?>
										</a>
									<?php } else {
										echo fp_get_settings( 'fp_menu_item2_title' );
									} ?>							
								</li>
							<?php } ?>
							
							<?php if (fp_get_settings( 'fp_menu_item3_title' )){ ?>
								<li>
									<?php if (fp_get_settings( 'fp_menu_item3_icon' )){ ?>
										<i class="<?php echo fp_get_settings( 'fp_menu_item3_icon' ); ?>"></i>
									<?php } ?>
									
									<?php if (fp_get_settings( 'fp_menu_item3_url' )){ ?>
										<a href="<?php echo fp_get_settings( 'fp_menu_item3_url' ); ?>">
											<?php echo fp_get_settings( 'fp_menu_item3_title' ); ?>
										</a>
									<?php } else {
										echo fp_get_settings( 'fp_menu_item3_title' );
									} ?>							
								</li>
							<?php } ?>
							
							<?php if (fp_get_settings( 'fp_menu_item4_title' )){ ?>
								<li>
									<?php if (fp_get_settings( 'fp_menu_item4_icon' )){ ?>
										<i class="<?php echo fp_get_settings( 'fp_menu_item4_icon' ); ?>"></i>
									<?php } ?>
									<?php $v = get_page_by_title("contact");?> 
                                                                         
									<?php if (!fp_get_settings( 'fp_menu_item4_url' )){ ?>
										<a href="<?php echo $v->guid?>">
											<?php echo fp_get_settings( 'fp_menu_item4_title' ); ?>
										</a>
									<?php } else {
										echo fp_get_settings( 'fp_menu_item4_title' );
									} ?>							
								</li>
							<?php } ?>
							
							<?php if (fp_get_settings( 'fp_menu_item5_title' )){ ?>
								<li>
									<?php if (fp_get_settings( 'fp_menu_item5_icon' )){ ?>
										<i class="<?php echo fp_get_settings( 'fp_menu_item5_icon' ); ?>"></i>
									<?php } ?>
									
									<?php if (fp_get_settings( 'fp_menu_item5_url' )){ ?>
										<a href="<?php echo fp_get_settings( 'fp_menu_item5_url' ); ?>">
											<?php echo fp_get_settings( 'fp_menu_item5_title' ); ?>
										</a>
									<?php } else {
										echo fp_get_settings( 'fp_menu_item5_title' );
									} ?>							
								</li>
							<?php } ?>
							
						</ul>
					</div> 
					
				<?php } ?>
				
				<?php if ( fp_get_settings( 'fp_show_header_social' ) == 1 ){ ?>		
				
					<div class="social">
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
			</div>
		</div>		
		
		<?php 
			//include news ticker
			if ( fp_get_settings( 'fp_show_ticker' ) == 1 ) {
				get_template_part( 'includes/ticker-section' );
			}
		?>
		
		<div class="logo-section">
			<div class="content-wrap content-wrap-header">
				<div class="logo">			
					<?php if (fp_get_settings( 'fp_logo_url' )) { ?>
						<h1>
							<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
								<img src="<?php echo fp_get_settings( 'fp_logo_url' ); ?>" alt="<?php bloginfo( 'name' ); ?>" />
							</a>
						</h1>	
					<?php } else {?>
						<h1 class="site-title">
							<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
								<?php bloginfo('name'); ?>
							</a>
						</h1>					
					<?php } ?>	
				</div>
				
				<?php if (fp_get_settings( 'fp_header_ad' )) {?>
					<div class="banner">	
						<?php echo fp_get_settings( 'fp_header_ad' ); ?>	
					</div>
			<?php } ?>
			
			</div>
		</div>
		<?php $cat = get_the_category(); 
                     // var_dump($cat[0]->slug); die;?>
		<nav class="primary-menu clearfix category-<?php echo $cat[0]->slug;?>">
			<div class="content-wrap">
				
				<div class="mobile-menu">
					<a class="menu-slide" href="#">
						<span class="title"><?php _e('Menu', 'fairpixels'); ?></span>
						<span class="icon"><i class="icon-list"></i></span>
					</a>
				</div>
				
				<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '0', 'menu_class' => 'sf-menu', 'fallback_cb' => 'fp_main_menu_fallback') ); ?>
							
			</div>
			
		</nav>
		<div class="clearfix"></div>	
		
		<?php 
			//include featured categories
                        
			if (is_page_template('page-home.php')&& $paged < 2 ){
				if ( fp_get_settings( 'fp_show_carousel' ) == 1 ) {
					get_template_part( 'includes/header-carousel' );
				}
			}
                        
                        
		?>		
	</header>	
	
	<div id="container" class="hfeed">
            <?php
               
		if ( (is_page_template('page-home.php')  ) && ($paged < 2 ) ){
		
			//include slider
                        
			if ( fp_get_settings( 'fp_show_slider' ) == 1 ) {
				get_template_part( 'includes/slider' );
			}
                }
                
                
               ?>
	<div id="main">	