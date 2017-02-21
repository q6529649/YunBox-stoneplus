<!-- portfolio section -->
<?php $wl_theme_options = kadima_get_options(); ?>
<div class="kadima_project_section">
	<div class="specialty">
		<!-- container -->
		<div class="container">
			<div class="col-md-7 specialty-info wow fadeInLeft animated animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
				<h3><?php echo esc_attr($wl_theme_options['port_heading']); ?></h3>
				<p><?php echo esc_attr($wl_theme_options['port_description']); ?></p>
				<div class="see-button">
					<a href="#" role="button"><img src="images/sj.jpg"> </a>
				</div>
			</div>
			<div class="col-md-5 specialty-grids ">
				<div class="specialty-grids-top">
					<?php for($i=1 ; $i<=4; $i++) { ?>
						<div class="col-md-6 service-box wow fadeInRight animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
							<figure class="icon icon2 color">
								<img src="<?php echo esc_url($wl_theme_options['port_img_'.$i]); ?>" alt="">
								<h5><?php echo esc_attr($wl_theme_options['port_title_'.$i]); ?></h5>
							</figure>
							<p></p>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /portfolio section -->



