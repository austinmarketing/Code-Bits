<?php $args = array(
						'post_type' => 'attachment',
						'post_mime_type' => array('application/pdf'),
						'numberposts' => 1,
						'post_status' => null,
						'post_parent' => $post->ID
						); ?>
						
					<?php $attachments = get_posts($args); ?>
						
					<?php	foreach ($attachments as $attachment) { ?>
					
							<a href="<?php echo wp_get_attachment_url( $attachment->ID ); ?>">
							<div id="side-menu-download-desktop">Download Brochure</div>
							</a>
							
					<?php	} ?>
