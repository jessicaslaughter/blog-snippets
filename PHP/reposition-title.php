<?php

//* Move entry titles below featured image on feeds

 add_action( 'genesis_meta', 'move_title_below' );
 function move_title_below() {
	if ((is_archive() || is_home()) && !wp_is_mobile()) {
		remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
		add_action( 'genesis_entry_header', 'genesis_do_post_image', 3 );
    }
}