<?php 

//* Change the default "..." excerpt more to a link
function new_excerpt_more($more) {
	global $post;
	return '… <a href="'. get_permalink($post->ID) . '" class="excerpt-more">' . 'Read More' . '</a>';
	}
add_filter('excerpt_more', 'new_excerpt_more');