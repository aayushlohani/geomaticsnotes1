<?php
/*
Template Name: Homepage
*/

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strcasecmp('XMLHttpRequest', $_SERVER['HTTP_X_REQUESTED_WITH']) === 0){
	// If the blog is being called from an AJAX request, render the content only.
	get_template_part('partials/partial', 'homepage');
}else{
	// Otherwise, render the full page.
	get_header();
	get_template_part('partials/partial', 'homepage');
	get_footer();
}
?>