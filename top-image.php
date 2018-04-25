// Adding a featured image to the top of a page
// pay close attention to the html classes and directory roots

<div class="top-img-box">  <!-- our first box -->

							<?php if (has_post_thumbnail( $post->ID ) ): ?> <!-- if the page has a thumbnail for the current post id  -->
							<?php $bgimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
							$bgimage = $bgimage[0]; ?> <!-- returns the id of the image post -->
								
							<?php else :
							$bgimage = get_bloginfo( 'template_directory'). '/library/images/default_bg_img.jpg'; ?>
							<?php endif; ?> <!-- the else will just load a default image if the post does not have a featured image -->					
								
							<div class="top-page-img" style="background-image: url(<?php echo $bgimage; ?>)"></div>
							  
</div>
