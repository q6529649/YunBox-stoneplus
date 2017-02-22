<?php $wl_theme_options = kadima_get_options(); ?>
<div class="kadima_service">
	<div class="news">
		<div class="container">
			<div class="news-text">
				<h3><?php echo esc_attr($wl_theme_options['service_heading']); ?></h3>
				<h5><?php echo esc_attr($wl_theme_options['service_description']); ?></h5>
			</div>
			<div class="news-grids">
				<?php for($i=1; $i<5; $i++ ) { ?>
				<div class="col-md-3 news-grid wow fadeInLeft animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
					<img src="<?php echo esc_attr($wl_theme_options['service_img_'.$i]); ?>" alt="">
					<div class="news-info">
						<a href="<?php echo esc_url($wl_theme_options['service_link_'.$i]); ?>"><?php echo esc_attr($wl_theme_options['service_text_'.$i]); ?><p></p></a>
					</div>
				</div>
				<?php } ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>