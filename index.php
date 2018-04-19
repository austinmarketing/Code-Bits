// this code adds a new div inside your wordpress sub-menu. Replace 'new-class' with your chosen class name

class Walker_Nav_Pointers extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() )
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
        $output .= "\n<div class=\"new-class\">\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() )
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n".($depth ? "$indent</div>\n" : "");
    }
}

// add the below code to your menu array

'walker' => new Walker_Nav_Pointers()

// code to add thumbnail and content for specific page/post ID

<a href="<?php echo get_page_link(112); ?>"> // gets page permalink
<?php if (has_post_thumbnail(112)): echo get_the_post_thumbnail(112, array(280,180), array('class' => 'post_thumbnail')); endif; ?> // gets thumbnail
<p><?php echo get_post_field('post_content', 102); ?></p> // gets content

