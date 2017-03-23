<?php $theme_options = kadima_get_options(); ?>
<div class="flexslider">
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
	<ul class="slides">
		<?php
			$theme_options = kadima_get_options(); $j=1;
			for($i=1; $i<=4; $i++){
		?>
			<li>
				<img src="<?php echo esc_url($theme_options['slide_image_'.$i]); ?>" alt="<?php echo esc_attr($theme_options['slide_title_'.$i]); ?>">
			</li>
		<?php } ?>
	</ul>
</div>