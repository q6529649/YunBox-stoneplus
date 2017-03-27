<?php
$theme_options = kadima_get_options();
get_header(); ?>
	<div style="background-image:url(//stoneplus.site.yunclever.com/wp-content/themes/kadima/images/top.jpg);background-position:center; background-repeat:repeat-y;">
		<div class="container">
			<div class="header">
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
	<div>	
	<?php if(is_single()){ ?>
		<?php get_template_part('breadcrums');  ?>
		<?php woocommerce_content(); ?>
	<?php
	} else if (is_shop() || is_archive()) { ?>	
		<section>
			<div class="primary-background">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h5>WORK SMART, NOT HARD</h5>
						</div>
					</div>
				</div>
			</div>
			<?php get_template_part('breadcrums');  ?>
		</section>
		<div class="row" style="margin-top: 60px;margin-bottom: 20px;">
			<div class="container">
				<div class="col-md-12 text-center">
					<h5 class="red-line-45" style="font-size: 2em;font-weight: 400;padding: 10px;">These machines can be categorized into five main segments:</h5>
				</div>
			</div>
		</div>
		<div class="row" style="border-bottom: 4px solid #f4a82f;">
			<?php get_sidebar(); ?>
		</div>
		<div style="background-color:#e3e0e4;">
			<div class="container" style="padding-top:2em;">
				<div class="row kadima_blog_wrapper">
					<div class="col-md-12">
						<?php woocommerce_content(); ?>
					</div>	
				</div>
			</div>
		</div>
	<?php	
	} ?>
	</div>
<?php get_footer(); ?>