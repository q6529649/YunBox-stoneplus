<div id="post-<?php the_ID(); ?>" <?php post_class('kadima_blog_full'); ?>>
	<div class="row">
		<div class="col-md-2 text-center">
			<li class="kadima_post_date">
			<?php if ( ('d M  y') == get_option( 'date_format' ) ) : ?>
				<span class="date"><?php echo get_the_date('d'); ?></span><h6><?php echo get_the_date('M  y'); ?></h6>
			<?php else : ?>
				<span class="date"><?php echo get_the_date(); ?></span>
			<?php endif; ?>
			</li>
		</div>
		<div class="col-md-10">
			<?php if(has_post_thumbnail()): 
			$img = array('class' => 'kadima_img_responsive'); ?>
			<div>						
				<div class="kadima_blog-img">
					<?php the_post_thumbnail('full',$img); ?>						
				</div>
				<?php if (is_home()) : ?>
				<div>
					<div class="kadima_blog_thumb_wrapper_showcase_icons">
						<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
					</div>
				</div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<div class="kadima_fuul_blog_detail_padding">
			<h2 class="text-center"><?php if(!is_single()) {?><a href="<?php the_permalink(); ?>"><?php } ?><?php the_title(); ?></a></h2>
			<?php the_content( __( 'Read More' , 'kadima' ) ); 
			$defaults = array(
				  'before'           => '<div class="kadima_blog_pagination"><div class="kadima_blog_pagi">' . __( 'Pages:','kadima'  ),
				  'after'            => '</div></div>',
				  'link_before'      => '',
				  'link_after'       => '',
				  'next_or_number'   => 'number',
				  'separator'        => ' ',
				  'nextpagelink'     => __( 'Next page'  ,'kadima' ),
				  'previouspagelink' => __( 'Previous page' ,'kadima'),
				  'pagelink'         => '%',
				  'echo'             => 1
				  );
				  wp_link_pages( $defaults ); ?>
			</div>
		</div>
	</div>
</div>