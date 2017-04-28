<?php $theme_options = kadima_get_options(); ?>
<div class="flexslider">
	<div class="col-md-12" style="border-bottom: 1px solid #fff;position: absolute;z-index: 2;">
		<div class="container">
			<div class="row">
				<div class="col-md-3" style="background-color: rgba(244, 168, 47, 0.45);width: 20% !important;">
					<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php if($theme_options['upload_image_logo']){ ?>
							<img class="img-responsive" src="<?php echo $theme_options['upload_image_logo']; ?>" style="margin-top: 1.3em;margin-bottom: 1.2em;  height:<?php if($theme_options['height']!='') { echo $theme_options['height']; }  else { "80"; } ?>px; width:<?php if($theme_options['width']!='') { echo $theme_options['width']; }  else { "200"; } ?>px;" />
						<?php } ?>
					</a>
				</div>
				<div class="col-md-9">
					<nav class="navbar navbar-default " role="navigation" style="width: 90%;">
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
		<img src="<?php echo esc_url($theme_options['slide_image_1']); ?>" class="img-responsive" alt="<?php echo esc_attr($theme_options['slide_title_1']); ?>">
	</div>
	<!--ul class="slides">
		<?php
			$j=1;
			for($i=1; $i<=4; $i++){
		?>
			<li>
				<img src="<?php echo esc_url($theme_options['slide_image_'.$i]); ?>" alt="<?php echo esc_attr($theme_options['slide_title_'.$i]); ?>">
			</li>
		<?php } ?>
	</ul-->
</div>
<script>
	console.log('jquery start.');
	jQuery(document).ready(function($){
		var width = $(window).width();
		console.log(width);
		jQuery(".dropdown-menu").css("width",width+"px");
	})
</script>
