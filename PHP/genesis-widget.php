//* Registering a Genesis widget
//* Example: Adding a widget to the header area
//* Placed in functions.php
add_action( 'genesis_header', 'new_header' );
function new_header() {
	genesis_widget_area( 'newheader', array(
		'before' => '<div class=new-header widget-area">',
		'after' => '</div>',
	) );
}

genesis_register_sidebar( array(
	'id'				=> 'newheader',
	'name'			=> __( 'New Header Widget', 'jess' ),
	'description'	=> __( 'A widget area in the header.', 'jess' ),
) );