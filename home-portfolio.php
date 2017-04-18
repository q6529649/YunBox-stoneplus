<?php $wl_theme_options = kadima_get_options(); ?>
<div class="kadima_project_section">
	<div class="specialty" style="background:url(./wp-content/themes/kadima/images/bj3.png) center top no-repeat">
		<div class="container">
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
							<img src="./wp-content/themes/kadima/images/jt.jpg" alt="">						
							<h5 style="text-align: center;line-height: 38px;margin-bottom: 0;font-weight: 600;"><?php echo esc_attr($wl_theme_options['port_title_'.$i]); ?></h5>
							<p style="text-align: left;line-height: 32px;margin:0;font-family: Arial;padding: 10px 15px;font-size: 16px;"><?php echo esc_attr($wl_theme_options['port_description_'.$i]); ?></p>
						</figure>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>



