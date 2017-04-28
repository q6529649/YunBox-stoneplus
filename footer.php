<?php
$theme_options = kadima_get_options();
$piwik = get_option( 'yc_options_piwik' );
?>
	<div style="background-color: #333;">
		<div class="col-md-12" style="background-color: #eeeeee;padding:0;">
			<div style="background-color: #eeeeee;">				
			</div>
			<div class="copyright-right col-md-12 " data-wow-delay="0.4s" style="padding-bottom: 60px;padding-top:60px;color:#fff; ">
				<div class="container">
					<div class="col-md-7">
						<div class="col-md-12">
							<div class="col-md-6">
								<ul>
									<p style="font-size: 22px;border-bottom: 2px solid #fff;font-weight: 600;margin-bottom:14px;width: 60%;">Contact Us</p>
									<li style="display: inline-block;padding: 0.1em 0;"><p style="font-size: 14px;">Tel:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;086-592-6218808</p></li>
									<li style="display: inline-block;padding: 0.1em 0;"><p style="font-size: 14px;">Fax:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;086-592-6218809</p></li>
									<li style="display: inline-block;padding: 0.1em 0;"><p style="font-size: 14px;">E-mail:&nbsp;info@stoneplus.cn</p></li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul>
									<p style="font-size: 22px;border-bottom: 2px solid #fff;font-weight: 600;margin-bottom:14px;width: 85%;">Address</p>
									<li style="display: inline-block;padding: 0.1em 0;"><p style="font-size: 14px;">No.3 Of Plant 6.Dongren Road, Xinglin, <br/>Jimei Dist., Xiamen, Fujian, <br/>China(Mainland)</p></li>
								</ul>
							</div>							
						</div>													
					</div>
					<div class="col-md-5">
						<div style="padding-top:4em;">
							<span style="padding-left: 10px;">&copy; 2017 STONEPLUS MACHINERY CO., LTD. All Rights Reserved.</span>	
							<ul class="text-right" style="padding:6px;margin-top:22px;margin-top: 22px;">
								<?php if($theme_options['fb_link']!='') { ?>
									 <li class="twitter" title="Facebook"><a class="twitter" href="<?php echo esc_url($theme_options['fb_link']); ?>"></a></li>
								<?php } if($theme_options['twitter_link']!='') { ?>
									<li class="twitter facebook" title="Twitter"><a class="twitter facebook" href="<?php echo esc_url($theme_options['twitter_link']) ; ?>"></a></li>
								<?php } if($theme_options['linkedin_link']!='') { ?>
									<li class="twitter chrome" title="Linkedin"><a class="twitter chrome" href="<?php echo esc_url($theme_options['linkedin_link']) ; ?>"></a></li>
								<?php } if($theme_options['youtube_link']!='') { ?>
									<li class="twitter pinterest" title="Youtube"><a class="twitter pinterest" href="<?php echo esc_url($theme_options['youtube_link']) ; ?>"></a></li>
								<?php } if($theme_options['gplus']!='') { ?>
									<li class="twitter linkedin" title="gplus"><a class="twitter linkedin" href="<?php echo esc_url($theme_options['gplus']) ; ?>"></a></li>
								<?php } if($theme_options['instagram']!='') { ?>
									<li class="instagram" title="instagram"><a href="<?php echo esc_url($theme_options['instagram']) ; ?>"></a></li>
								<?php } ?>
							</ul>
						</div>
					</div>				
				</div>
			</div>		
		</div>
		
	</div>
</div>
<a href="#" title="Go Top" class="kadima_scrollup" style="display: inline;">
    <i class="fa fa-chevron-up"></i>
</a>
<?php if($theme_options['custom_css']) ?>
<style type="text/css">
<?php { echo esc_attr($theme_options['custom_css']); } ?>
</style>
<script src="http://statics.yunclever.com/chat/chatWeb.js"></script>
<script>
var checkVisitIdForChat = function (i) {
	if (!visitor_id && i < 3) {
		i++;
		setTimeout(checkVisitIdForChat, 1000);
	} else {
		yChatWeb(visitor_id, <?php echo $piwik['site_id']; ?>, 10000, 'rgba(26, 188, 156, 1.0)');
	}
};
checkVisitIdForChat(0);
</script>
<?php wp_footer(); ?>
</body>
</html>
