<?php

function srp_enqueue(){
	$uri = get_theme_file_uri();
	$ver = srp_DEV_MODE ? time() : false;
	
	//endueue style sheet to header
	wp_enqueue_style( 'srp_style' );
    
    //use false as laster parameter to load script in footer
	wp_register_script( 'srp_scripts1', $uri . '/js/app.js', [], $ver, true );
	

    // load default jquery provided by wordpress
	wp_enqueue_script( 'jquery' );	
	wp_enqueue_script( 'srp_scripts1' );

} 

function search_only_page($query) {


	//Define pages where search can be allowed on the site
    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('post', 'page'));
    }

    return $query;
}


//highlight the search term on search results
function highlight_results($text) {
    if (is_search() && !is_admin()) {
        $sr = get_query_var('s');
        $keys = explode(' ', $sr);
        $keys = array_filter($keys);
        $text = preg_replace('/('.implode('|', $keys) .')/iu', '<span class="search-highlight">\0</span>', $text);
    }
    return $text;
}