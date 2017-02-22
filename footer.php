<?php $wl_theme_options = kadima_get_options(); ?>
	<div style="background-color: #333;">
		<div class="col-md-12" style="background-color: #eeeeee;">
			<div class="col-md-6 col-md-offset-4">
				<nav class="navbar navbar-default " role="navigation">
					<div id="menu" class="collapse navbar-collapse">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'menu_class' => 'nav navbar-nav',
									'walker' => new kadima_nav_walker(),
								)
							);
						?>
					</div>
				</nav>
			</div>
		</div>
		<div class="col-md-12" style=";text-align: center;background-color: #d4d4d4;padding:0;">
			<div style="background-color: #eeeeee;">
				<div class="container" style="border-top: 1px solid #aaaaaa;margin-bottom: 15px;background-color: #eeeeee;padding-top:10px;">
					<div class="col-md-3" >
						<ul style=";padding: 0;">
							<li style="display: inline-block;padding: 0.1em 0;"><i class="indicate"></i></li>
							<li style="display: inline-block;padding: 0.1em 0;"><p style="font-size: 13px;font-weight: bolder;" class="label1">0086-592-6218808</p></li>
						</ul>
					</div>
					<div class="col-md-3" >
						<ul style=";padding: 0;" style=";padding: 0;margin-top: 1.5em;">
							<li style="display: inline-block;padding: 0.1em 0;"><i class="phone"></i></li>
							<li style="display: inline-block;padding: 0.1em 0;"><p style="font-size: 13px;font-weight: bolder;" class="label1">info@stoneplus.cn</p></li>
						</ul>
					</div>
					<div class="col-md-6" >
						<ul style=";padding: 0;" style=";padding: 0;margin-top: 1.5em;">
							<li style="display: inline-block;padding: 0.1em 0;"><i class="message"></i></li>
							<li style="display: inline-block;padding: 0.1em 0;"><p style="font-size: 13px;font-weight: bolder;" class="label1">No.3 Of Plant 6.Dongren Road,Xinglin,Jimei Dist.,Xiamen,Fujian,China(Mainland)</p></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copyright-right " data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s;padding-bottom: 10px; ">
				<div class="container">
					<div class="col-md-9" style="float:left;padding:0;">
						<p class="kadima_footer_copyright_info" >
						<?php
							if($wl_theme_options['footer_customizations']) {
								echo esc_attr($wl_theme_options['footer_customizations']);
							}
							if($wl_theme_options['info_copyright']) {
								echo '' .esc_attr($wl_theme_options['info_copyright']);
							}
						?>
						</p>
					</div>
					<div class="col-md-3" style="float:right;padding:0;">
						<ul >
							<?php if($wl_theme_options['fb_link']!='') { ?>
								 <li class="twitter" title="Facebook"><a class="twitter" href="<?php echo esc_url($wl_theme_options['fb_link']); ?>"></a></li>
							<?php } if($wl_theme_options['twitter_link']!='') { ?>
								<li class="twitter facebook" title="Twitter"><a class="twitter facebook" href="<?php echo esc_url($wl_theme_options['twitter_link']) ; ?>"></a></li>
							<?php } if($wl_theme_options['linkedin_link']!='') { ?>
								<li class="twitter chrome" title="Linkedin"><a class="twitter chrome" href="<?php echo esc_url($wl_theme_options['linkedin_link']) ; ?>"></a></li>
							<?php } if($wl_theme_options['youtube_link']!='') { ?>
								<li class="twitter pinterest" title="Youtube"><a class="twitter pinterest" href="<?php echo esc_url($wl_theme_options['youtube_link']) ; ?>"></a></li>
							<?php } if($wl_theme_options['gplus']!='') { ?>
								<li class="twitter linkedin" title="gplus"><a class="twitter linkedin" href="<?php echo esc_url($wl_theme_options['gplus']) ; ?>"></a></li>
							<?php } if($wl_theme_options['instagram']!='') { ?>
								<li class="instagram" title="instagram"><a href="<?php echo esc_url($wl_theme_options['instagram']) ; ?>"></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>		
		</div>
	</div>
</div>
<a href="#" title="Go Top" class="kadima_scrollup" style="display: inline;">
    <i class="fa fa-chevron-up"></i>
</a>
<?php if($wl_theme_options['custom_css']) ?>
<style type="text/css">
<?php { echo esc_attr($wl_theme_options['custom_css']); } ?>
</style>
<?php wp_footer(); ?>
</body>
</html>
