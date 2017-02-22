<?php $wl_theme_options = kadima_get_options(); ?>
	<div style="background-color: #333;">
		<div class="col-md-12" style="background-color: #454449;padding-top: 18px;padding-bottom: 10px;">
			<div class="col-md-6 col-md-offset-3">
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
		<div class="col-md-12" style="background-color: #454449;padding-top: 18px;padding-bottom: 10px;">
			<div class="copyright-right " data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; ">
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
			<div class="clearfix"></div>
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
