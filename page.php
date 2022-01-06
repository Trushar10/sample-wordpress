<?php
get_header('main');
?>

<?php 

if( have_posts() ){
	while( have_posts() ){
		the_post();
		
		get_template_part('template-parts/content-page');

		//Show comments
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
		
	}
}

?>

<?php get_footer( ); ?>