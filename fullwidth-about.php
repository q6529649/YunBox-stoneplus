<?php //Template Name:Full-Width-About Page
get_header();
$theme_options = kadima_get_options();
?>
	<div style="background-image:url(//stoneplus.site.yunclever.com/wp-content/themes/kadima/images/top.jpg);background-position:center; background-repeat:repeat-y">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php if($theme_options['upload_image_logo']){ ?>
							<img class="img-responsive" src="<?php echo $theme_options['upload_image_logo']; ?>" style="margin-top: 2.5em; height:<?php if($theme_options['height']!='') { echo $theme_options['height']; }  else { "80"; } ?>px; width:<?php if($theme_options['width']!='') { echo $theme_options['width']; }  else { "200"; } ?>px;" />
						<?php } ?>
					</a>
				</div>
				<div class="col-md-8">
					<nav class="navbar navbar-default " role="navigation" style="width: 100%;">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
							  <span class="sr-only"><?php _e('Toggle navigation','kadima');?></span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							</button>
						</div>
						<div class="top-nav">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'second',
									'menu_class' => 'nav1',
									'walker' => new kadima_nav_new_walker(),
									)
								);
							?>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="row kadima_blog_wrapper">
		<div class="col-md-12">
			<?php get_template_part('post','page'); ?>	
		</div>		
	</div>
<?php get_footer(); ?>