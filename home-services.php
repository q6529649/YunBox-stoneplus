<?php $theme_options = kadima_get_options(); ?>
<div class="kadima_service" style="background: url(./wp-content/themes/kadima/images/bj1.png) center top no-repeat;">
	<div class="news container">
		<div class="col-md-12" style="margin-top:-225px;z-index: 2;">
			<div class="news-text">
				<h3><?php echo esc_attr($theme_options['service_heading']); ?></h3>
				<h5><?php echo esc_attr($theme_options['service_description']); ?></h5>
			</div>
			<div class="news-grids">
				<?php for($i=1; $i<7; $i++ ) { ?>
				<div class="col-md-4 news-grid wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible;margin-bottom:20px;">
				<?php if($i==5) { ?>
					<div class="to" style="padding-left:40px;padding-right:40px;padding-top:47px;padding-bottom:40px; background-color: #fff;box-shadow: rgba(51, 51, 51, 0.49) 0px 6px 17px;border-radius: 5%;position: relative;bottom:0;-webkit-transition: 0.3s;-o-transition: 0.3s;transition: 0.3s;background: url(../wps/wp-content/themes/YunBox-stoneplus/images/cl.png) center top no-repeat;"">
						<h3 style="text-align:center;padding-bottom:16px"><span><?php echo esc_attr($theme_options['service_title_'.$i]); ?></span></h3>
						<div class="news-info">
							<?php echo esc_attr($theme_options['service_text_'.$i]); ?>
						</div>
					</div>
				<?php
				} else {?>
					<a href="<?php echo esc_url($theme_options['service_link_'.$i]); ?>">
						<div class="to" style="padding-left:40px;padding-right:40px;padding-top:71px;padding-bottom:40px; background-color: #fff;box-shadow: rgba(51, 51, 51, 0.49) 0px 6px 17px;border-radius: 5%;position: relative;bottom:0;-webkit-transition: 0.3s;-o-transition: 0.3s;transition: 0.3s;">
							<img src="<?php echo esc_attr($theme_options['service_img_'.$i]); ?>">
							<div class="news-info" style="text-align: center;text-decoration:underline;">
								<?php echo esc_attr($theme_options['service_text_'.$i]); ?>
							</div>
						</div>
					</a>					
				<?php } ?>
				</div>
				<?php } ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>