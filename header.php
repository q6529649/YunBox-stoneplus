<!DOCTYPE html>
<!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>
    <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>" />
	<?php $wl_theme_options = kadima_get_options(); ?>
	<?php if($wl_theme_options['upload_image_favicon']!=''){ ?>
	<link rel="shortcut icon" href="<?php  echo esc_url($wl_theme_options['upload_image_favicon']); ?>" />
	<?php } ?>
	<?php
		if (is_home()) {
			echo '<meta http-equiv="x-dns-prefetch-control" content="on" />
			<link rel="dns-prefetch" href="//cdn.yunclever.com">
			<link rel="dns-prefetch" href="//cdn.bootcss.com">
			<link rel="dns-prefetch" href="//static.addtoany.com">';
		} elseif (isset($_COOKIE['yc_visit_cookie'])) {
			echo '';
		}
		else {
			echo '<meta http-equiv="x-dns-prefetch-control" content="on" />
			<link rel="dns-prefetch" href="//cdn.yunclever.com">
			<link rel="dns-prefetch" href="//cdn.bootcss.com">
			<link rel="dns-prefetch" href="//static.addtoany.com">';
		}
	?>
	<?php wp_head(); ?>
	<script type="text/javascript">
	  var visitor_id;
	  var _paq = _paq || [];
	  _paq.push(["setCookieDomain", "stoneplus.site.yunclever.com"]);
	  _paq.push(["setDomains", ["stoneplus.site.yunclever.com"]]);
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  (function() {
		var u="https://analytics.yunclever.com/";
		_paq.push(['setTrackerUrl', u+'piwik.php']);
		_paq.push(['setSiteId', '12']);
		_paq.push([ function() { visitor_id = this.getVisitorId(); }]);
		var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
		g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script>
</head>
<body <?php body_class(); ?>>

<div>
	<div class="flexslider">
		<div class="container">
			<div class="header">
				<div class="col-md-4">
					<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php if($wl_theme_options['upload_image_logo']){ ?>
							<img class="img-responsive" src="<?php echo $wl_theme_options['upload_image_logo']; ?>" style="margin-top: 2.5em; height:<?php if($wl_theme_options['height']!='') { echo $wl_theme_options['height']; }  else { "80"; } ?>px; width:<?php if($wl_theme_options['width']!='') { echo $wl_theme_options['width']; }  else { "200"; } ?>px;" />
						<?php } ?>
					</a>
				</div>
				<div class="col-md-8">
					<nav class="navbar navbar-default " role="navigation" style="width: 100%;">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
							  <span class="sr-only"><?php _e('Toggle navigation','kadima');?></span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							</button>
						</div>
						<div class="top-nav">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu_class' => 'nav1',
									'walker' => new kadima_nav_new_walker(),
									)
								);
							?>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<ul class="slides">
			<?php
				$wl_theme_options = kadima_get_options(); $j=1;
				for($i=1; $i<=4; $i++){
			?>
				<li>
					<img src="<?php echo esc_url($wl_theme_options['slide_image_'.$i]); ?>" alt="<?php echo esc_attr($wl_theme_options['slide_title_'.$i]); ?>">
				</li>
			<?php } ?>
		</ul>
	</div>
