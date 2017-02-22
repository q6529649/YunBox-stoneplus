<div class="kadima_blog_area ">
<?php $wl_theme_options = kadima_get_options();?>
	<div class="specialty">
		<div class="container">
			<div class="col-md-12 specialty-info wow fadeInLeft animated animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
				<h3><?php echo esc_attr($wl_theme_options['blog_title']); ?></h3>
				<div class="container">	
					<div class="row" id="kadima_blog_section">
						<div class="col-md-1">
							<div id="port-next" class="kadima_carousel-prev" ><i class="fa fa-arrow-left"></i></div>
						</div>
					<?php
						if ( have_posts()) : 		
							$args = array( 'post_type' => 'post','posts_per_page' => 1 ,'ignore_sticky_posts' => 1);		
							$post_type_data = new WP_Query( $args );
							while($post_type_data->have_posts()):
								$post_type_data->the_post();
					?>
							<div class="col-md-10">
								<div class="kadima_blog_thumb_wrapper">
									<div class="row">	
										<div class="col-md-4">
											<?php $img = array('class' => 'kadima_img_responsive');
													if(has_post_thumbnail()): 
													the_post_thumbnail('home_post_thumb',$img);
											endif; ?>
										</div>
										<div class="col-md-8">
											<a href="<?php the_permalink(); ?>"><?php the_excerpt( __( 'Read More' , 'kadima' ) ); ?></a>
										</div>										
									</div>									
								</div>
							</div>
						<?php
							endwhile; 
						endif; ?>						
						<div class="col-md-1">
							<div id="port-prev" class="kadima_carousel-next" ><i class="fa fa-arrow-right"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>