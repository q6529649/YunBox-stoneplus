<?php
$theme_options = kadima_get_options();
get_header(); ?>
	<div style="background-color:#f4a830;">
		<div class="container">
			<div class="header">
				<div class="col-md-3" style="background-color: rgba(244, 168, 47, 0.45);width: 20% !important;">
					<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php if($theme_options['upload_image_logo']){ ?>
							<img class="img-responsive" src="<?php echo $theme_options['upload_image_logo']; ?>" style="margin-top: 1.3em;margin-bottom: 1.2em;  height:<?php if($theme_options['height']!='') { echo $theme_options['height']; }  else { "80"; } ?>px; width:<?php if($theme_options['width']!='') { echo $theme_options['width']; }  else { "200"; } ?>px;" />
						<?php } ?>
					</a>
				</div>
				<div class="col-md-9">
					<nav class="navbar navbar-default newnav " role="navigation" style="width: 90%;">
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
								'theme_location' => 'primary',
								'menu_class' => 'nav cl-effect-12',
								'menu_id' => 'nav',
								'walker' => new kadima_nav_walker(),
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
							<h5></h5>
						</div>
					</div>
				</div>
			</div>
			
		</section>
		
		
<script>
	jQuery(document).ready(function($){
		var width = $(window).width();
		jQuery(".dropdown-menu").css("width",width+"px");
	})
</script>
		<div style=" background: url(./wp-content/themes/kadima/images/bjcl2.png) center top no-repeat;">
			<div class="container" style="padding-top:2em;">
			<?php get_template_part('breadcrums');  ?>
				<div class="row kadima_blog_wrapper">
					<div class="col-md-12" style="padding:0;">
						<?php woocommerce_content(); ?>
					</div>	
				</div>
			</div>
		</div>
	<?php	
	} ?>
	</div>
<?php get_footer(); ?>