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
