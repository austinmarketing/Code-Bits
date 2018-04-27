				
<?php
$args = array(
    'post_parent' => $post->ID,
    'post_type' => 'page',
    'orderby' => 'menu_order'
);

$child_query = new WP_Query( $args );
?>

<?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>

    <div <?php post_class(); ?>>
	     
	   <h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3> 
        
       <?php the_content(); ?>
       
	    </div>
        
        <?php  
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('medium');
        }
            ?>
        
        <?php /* if (has_post_thumbnail()):
				echo get_the_post_thumbnail($post->ID, array(550,250), array('class' => 'post_thumbnail'));
											endif;  */ ?>
                      
<?php endwhile; ?>

<?php wp_reset_postdata(); ?>
