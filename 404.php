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
<div class="kadima_header_breadcrum_title">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="<?php echo home_url( '/' ); ?>"><?php _e('Home','kadima'); ?></a></li>
					<li><?php _e('404 Error','kadima'); ?></li>				
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row kadima_blog_wrapper">
		<div class="col-md-12 hc_404_error_section">
			<div class="error_404">
				<h2><?php _e('404','kadima'); ?></h2>
				<h4><?php _e('Whoops... Page Not Found !!!','kadima'); ?></h4>
				<p><?php _e('We`re sorry, but the page you are looking for doesn`t exist.','kadima'); ?></p>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
