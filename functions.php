<?php

function load_moreText(){
  	wp_enqueue_script('moreText', get_template_directory_uri() . '/js/moreText.js', array('jquery'), false, true);

  	global $post;
 	$posts =get_posts(array(
	    'fields'          => 'ids', // the blog's post IDs
	    'posts_per_page'  => -1
	));
  	wp_localize_script( 'moreText', 'blogs_post_ids', $posts );
}
add_action( 'wp_enqueue_scripts', 'load_moreText' );


