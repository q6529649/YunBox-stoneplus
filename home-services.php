<?php $theme_options = kadima_get_options(); ?>
<div class="kadima_service">
	<div class="news container">
		<div class="col-md-12">
			<div class="news-text">
				<h3><?php echo esc_attr($theme_options['service_heading']); ?></h3>
				<h5><?php echo esc_attr($theme_options['service_description']); ?></h5>
			</div>
			<div class="news-grids">
				<?php for($i=1; $i<5; $i++ ) { ?>
				<div class="col-md-3 news-grid wow fadeInLeft animated animated" data-wow-delay="0.4s" style="visibility: visible;">
					<a href="<?php echo esc_url($theme_options['service_link_'.$i]); ?>">
						<img src="<?php echo esc_attr($theme_options['service_img_'.$i]); ?>" alt="<?php echo esc_attr($theme_options['service_text_'.$i]); ?>">
						<div class="news-info" style="text-align: center;">
							<?php echo esc_attr($theme_options['service_text_'.$i]); ?>
						</div>
					</a>
				</div>
				<?php } ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>