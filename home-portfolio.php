<?php $wl_theme_options = kadima_get_options(); ?>
<div class="kadima_project_section">
	<div class="specialty">
		<div class="container">
			<div class="col-md-8 specialty-info wow fadeInLeft animated animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
				<h3><?php echo esc_attr($wl_theme_options['port_heading']); ?></h3>
				<p><?php echo esc_attr($wl_theme_options['port_description']); ?></p>
				<div class="see-button">
					<img class="img-responsive" src="<?php echo esc_attr($wl_theme_options['port_desc_img']); ?>">
				</div>
			</div>
			<div class="col-md-4 specialty-grids" style="padding-top:70px;">
				<?php for($i=1 ; $i<=4; $i++) { ?>						
					<div class="col-md-6 service-box wow fadeInRight animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
						<?php
						if($i==2 || $i==3){
						?>
							<figure class="icon icon2 color" style="background: #cecccc !important;">
						<?php	
						}
						else {
						?>
							<figure class="icon icon2 color">
						<?php
						}
						?>
							<img src="<?php echo esc_url($wl_theme_options['port_img_'.$i]); ?>" alt="">
							<h5><?php echo esc_attr($wl_theme_options['port_title_'.$i]); ?></h5>
						</figure>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>



