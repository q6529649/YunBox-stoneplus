<?php $wl_theme_options = kadima_get_options(); ?>
<div class="kadima_project_section">
	<div class="specialty" style="background:url(../wps/wp-content/themes/YunBox-stoneplus/images/bj3.png) center top no-repeat">
		<div class="container">
			<!--<div class="col-md-8 specialty-info wow fadeInLeft animated animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
				<h3><?php echo esc_attr($wl_theme_options['port_heading']); ?></h3>
				<p><?php echo esc_attr($wl_theme_options['port_description']); ?></p>
				<div class="see-button">
					<img class="img-responsive" src="<?php echo esc_attr($wl_theme_options['port_desc_img']); ?>">
				</div>
			</div>-->
			<div class="col-md-12 specialty-grids" style="    padding-right: 30px;padding-left: 30px;">
				<?php for($i=1 ; $i<=4; $i++) { ?>						
					<div class="col-md-3 service-box wow fadeInRight animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
						<?php
						if($i==2 || $i==3){
						?>
							<figure class="icon icon2 color" >
						<?php	
						}
						else {
						?>
							<figure class="icon icon2 color">
						<?php
						}
						?>
							<div class="bj2">
								<img style="padding-top: 66px;" src="<?php echo esc_url($wl_theme_options['port_img_'.$i]); ?>" alt="">
							</div>
								<img src="../wps/wp-content/themes/YunBox-stoneplus/images/jt.jpg" alt="">
							
							
							<h5 style="text-align: left;line-height: 38px;margin-bottom: 0;font-weight: 600;"><?php echo esc_attr($wl_theme_options['port_title_'.$i]); ?></h5>
							<h5 style="text-align: left;line-height: 32px;margin:0;"><?php echo esc_attr($wl_theme_options['port_description_'.$i]); ?></h5>
						</figure>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>



