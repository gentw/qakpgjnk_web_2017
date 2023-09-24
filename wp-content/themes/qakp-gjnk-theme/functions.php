<?php

function gjnk_files() {
	wp_enqueue_style('gjnk-bootstrap', get_theme_file_uri('css/bootstrap.min.css'), NULL);
	wp_enqueue_style('gjnk-carousel', get_theme_file_uri('css/owl.carousel.css'), NULL);
	wp_enqueue_style('gjnk-carousel-theme', get_theme_file_uri('css/owl.theme.default.css'), NULL);
	wp_enqueue_style('gjnk-font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', NULL);
	wp_enqueue_style('gjnk-font-countdown', 'https://fonts.googleapis.com/css?family=Lobster', NULL);
	wp_enqueue_style('gjnk-lightbox', get_theme_file_uri('css/lightbox.min.css'), NULL);

	wp_enqueue_style('gjnk_main_styles', get_stylesheet_uri(), NULL);
	wp_enqueue_script('gjnk-modernizr', get_theme_file_uri('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js'), NULL, '1.0', true);
	wp_enqueue_script('gjnk-jquery', get_theme_file_uri('js/jquery.min.js'), NULL, '1.0', true);
	wp_enqueue_script('gjnk-bootstrap', get_theme_file_uri('js/bootstrap.min.js'), NULL, '1.0', true);
	wp_enqueue_script('gjnk-classie', get_theme_file_uri('js/classie.min.js'), NULL, '1.0', true);
	wp_enqueue_script('gjnk-lighbox', get_theme_file_uri('js/lightbox.min.js'), NULL, '1.0', true);
	wp_enqueue_script('gjnk-googlemap-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDhBiQ6tU3cSikkas5vgpSnpo5IcZ2sAtU');
	wp_enqueue_script('gjnk-google-map', get_theme_file_uri('js/googlemap.min.js'), NULL, '1.0', true);
	wp_enqueue_script('gjnk-scrollTo', get_theme_file_uri('js/jquery.scrollTo.min.js'), NULL, '1.0', true);
	wp_enqueue_script('gjnk-waypoints', get_theme_file_uri('js/waypoints.js'), NULL, '1.0', true);
	wp_enqueue_script('gjnk-carousel', get_theme_file_uri('js/owl.carousel.js'), NULL, '1.0', true);
	wp_enqueue_script('gjnk-countdown', get_theme_file_uri('js/jquery.countdown.js'), NULL, '1.0', true);
	wp_enqueue_script('gjnk-lazy', get_theme_file_uri('js/jquery.lazy.min.js'), NULL, '1.0', true);
	wp_enqueue_script('gjnk-vhfix', get_theme_file_uri('js/vhfix.js'), NULL, '1.0', true);
	wp_enqueue_script('gjnk-main-js', get_theme_file_uri('js/main.js'), NULL, '1.0', true);
}


function gjnk_add_async_defer_attr($tag, $handle) {
	if( 'gjnk-googlemap-api' !== $handle ) 
		return $tag;
		return str_replace( 'src', ' async defer src', $tag);
}

function gjnk_features() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	add_image_size('gjnkArticleOriginal', 825, 474, true);
	add_image_size('gjnkArticleThumb', 352, 240, true);
}

function changeMonthLangToAL() {
	

	$months = array('Janar', 'Shkurt', 'Mars', 'Prill', 'Maj', 'Qershor', 'Korrik', 'Gusht', 'Shtator', 'Tetor', 'Nentor', 'Dhjetor');
	
	$months = array_filter(array_merge(array(0), $months));

	echo $months[get_the_time('n')];

	//return get_the_time('j') . '<br><span>' . $months[get_the_time('n')] . '</span>';*/
	 
}

function get_date() {
	$event_date_time = get_field('event_date_time');

	$date = explode("/", $event_date_time);

	for($i=0; $i<count($date); $i++) {
		if(strlen($date[$i] >= 2)) {
		 $d = substr($date[$i], 0, 2);
		 	$dat[$i] = $d;
		}
	}
	$year = '20' . $dat[2];
	$day =  $dat[1];
	$month = $dat[0];
	

	$day_length = strlen((string) $day);
	$month_length = strlen((string) $month);


	if($day_length == 1) 
		$day = '0' . $day;
	
	if($month_length == 1) 
		$month = '0' . $month;

	return $year . $month . $day;
}

function get_timestamp () {
	return time();
}

function changeOrderDateTimeEvent() {
	$event_date_time = get_field('event_date_time');

	$date = explode("/", $event_date_time);
	
	for($i=0; $i<count($date); $i++) {
		if(strlen($date[$i] >= 2)) {
		 $d = substr($date[$i], 0, 2);
		 	$dat[$i] = $d;
		}

		if($i == 2) {
			$time = substr($date[$i], 3);
		}
	}
	$month 	= $dat[0];
	$day 	= $dat[1];
	$year 	= '20' . $dat[2];


	$day_length = strlen((string) $day);
	$month_length = strlen((string) $month);


	if($day_length == 1) 
		$day = '0' . $day;
	
	if($month_length == 1) 
		$month = '0' . $month;

	echo $year . '/' . $month . '/' . $day . ' ' . $time . ':00';
}


add_action('wp_enqueue_scripts', 'gjnk_files');
add_filter('script_loader_tag', 'gjnk_add_async_defer_attr', 10, 2);
add_action('after_setup_theme', 'gjnk_features');
