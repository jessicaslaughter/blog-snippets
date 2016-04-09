<?php

//* Customize the entry meta in the entry header
add_filter( 'genesis_post_info', 'sp_post_info_filter' );
function sp_post_info_filter($post_info) {
	$post_info = '[post_date]';
	return $post_info;
}

//* Customize the entry meta in the entry footer
add_filter( 'genesis_post_meta', 'sp_post_meta_filter' );
function sp_post_meta_filter($post_meta) {
	$post_meta = '[post_categories]  [post_comments zero="Comments" one="Comments" more="Comments"]';
	return $post_meta;
}