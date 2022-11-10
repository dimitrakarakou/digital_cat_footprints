<?php
function omega_excerpt_more( $more ) {
	return ' ... <a id="more-link'. strval(get_the_ID()) . ' href="'. get_permalink( get_the_ID() ) . '">' . omega_get_setting( 'content_archive_more' ) . 
	'<img class=".catFootprints' . strval(get_the_ID()) . '" src=""></a>';
}

