<div class="col-md-12">
	<div style="margin:0 auto;">
		<?php
			if ( is_active_sidebar( 'sidebar-primary' ) ) {
				dynamic_sidebar( 'sidebar-primary' );
			} else  { 
				$args = array(
				'before_widget' => '<div class="kadima_sidebar_widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="kadima_sidebar_widget_title"><h2>',
				'after_title'   => '</h2></div>' );
				the_widget('WP_Widget_Archives', null, $args);
			}
		?>
	</div>
</div>