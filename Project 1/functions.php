<?php



register_nav_menus(
	array(
	'top_menu' => 'Navigation menu at the top of the page',
	'main_menu' => 'Main yellow menu bar',
	'footer_1' => 'Footer first column',
	'footer_2' => 'Footer second column',
	'footer_3' => 'Footer third column',
	'footer_4' => 'Footer fourth column'
	)
);


function inside_my_page(){
	global $wpdb;

	//banner ad stuff
	$banner_ad_url_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 386', ARRAY_A);
	$banner_ad_url = $banner_ad_url_query[option_value];
	$banner_ad_href_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 700', ARRAY_A);
	$banner_ad_href = $banner_ad_href_query[option_value];

	//slide 1 stuff
	$slider_1_url_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 500', ARRAY_A);
	$slider_1_url = $slider_1_url_query[option_value];
	$slider_1_href_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 501', ARRAY_A);
	$slider_1_href = $slider_1_href_query[option_value];

	//slide 2 stuff
	$slider_2_url_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 502', ARRAY_A);
	$slider_2_url = $slider_2_url_query[option_value];
	$slider_2_href_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 503', ARRAY_A);
	$slider_2_href = $slider_2_href_query[option_value];

	//slide 3 stuff
	$slider_3_url_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 504', ARRAY_A);
	$slider_3_url = $slider_3_url_query[option_value];
	$slider_3_href_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 505', ARRAY_A);
	$slider_3_href = $slider_3_href_query[option_value];

	//slide 4 stuff
	$slider_4_url_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 506', ARRAY_A);
	$slider_4_url = $slider_4_url_query[option_value];
	$slider_4_href_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 507', ARRAY_A);
	$slider_4_href = $slider_4_href_query[option_value];

	//slide 5 stuff
	$slider_5_url_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 508', ARRAY_A);
	$slider_5_url = $slider_5_url_query[option_value];
	$slider_5_href_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 509', ARRAY_A);
	$slider_5_href = $slider_5_href_query[option_value];

	//slide 6 stuff
	$slider_6_url_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 510', ARRAY_A);
	$slider_6_url = $slider_6_url_query[option_value];
	$slider_6_href_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 511', ARRAY_A);
	$slider_6_href = $slider_6_href_query[option_value];

	//deal 1 stuff
	$deal_1_url_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 701', ARRAY_A);
	$deal_1_url = $deal_1_url_query[option_value];
	$deal_1_href_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 702', ARRAY_A);
	$deal_1_href = $deal_1_href_query[option_value];

	//deal 2 stuff
	$deal_2_url_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 703', ARRAY_A);
	$deal_2_url = $deal_2_url_query[option_value];
	$deal_2_href_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 704', ARRAY_A);
	$deal_2_href = $deal_2_href_query[option_value];

	//deal 3 stuff
	$deal_3_url_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 705', ARRAY_A);
	$deal_3_url = $deal_3_url_query[option_value];
	$deal_3_href_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 706', ARRAY_A);
	$deal_3_href = $deal_3_href_query[option_value];

	//deal 4 stuff
	$deal_4_url_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 707', ARRAY_A);
	$deal_4_url = $deal_4_url_query[option_value];
	$deal_4_href_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 708', ARRAY_A);
	$deal_4_href = $deal_4_href_query[option_value];

	//deal 5 stuff
	$deal_5_url_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 709', ARRAY_A);
	$deal_5_url = $deal_5_url_query[option_value];
	$deal_5_href_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 710', ARRAY_A);
	$deal_5_href = $deal_5_href_query[option_value];

	//deal 6 stuff
	$deal_6_url_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 711', ARRAY_A);
	$deal_6_url = $deal_6_url_query[option_value];
	$deal_6_href_query = $wpdb->get_row( 'SELECT * FROM wp_options WHERE option_id = 712', ARRAY_A);
	$deal_6_href = $deal_6_href_query[option_value];
	?>
	<div id="wrap">
		<h2>Homepage Settings</h2>
		<h3>After you update, hit 'Refresh' to make sure your new setting is, well, set. Available fields below.</h3>
		<h3>Banner Ad Settings</h3>
		<form method="post" action="">
			<label for="banner_ad_url">Enter URL for Banner Ad</label><br>
			<input type="text" name="banner_ad_image" value="<?php echo $banner_ad_url; ?>"><br>
			<label for="banner_ad_url">Enter URL for Banner Destination</label><br>
			<input type="text" name="banner_ad_href" value="<?php echo $banner_ad_href; ?>"><br>
			
		
		<br><hr>
		<h3>Slider Settings</h3>
		
			<label for="slider_1_url">Enter URL for image #1</label><br>
			<input type="text" name="slider_1_url" value="<?php echo $slider_1_url; ?>"><br>
			<label for="slider_1_href">Enter URL for image #1 link</label><br>
			<input type="text" name="slider_1_href" value="<?php echo $slider_1_href; ?>"><br>
			
		
		
			<label for="slider_2_url">Enter URL for image #2</label><br>
			<input type="text" name="slider_2_url" value="<?php echo $slider_2_url; ?>"><br>
			<label for="slider_2_href">Enter URL for image #2 link</label><br>
			<input type="text" name="slider_2_href" value="<?php echo $slider_2_href; ?>"><br>
			

		
			<label for="slider_3_url">Enter URL for image #3</label><br>
			<input type="text" name="slider_3_url" value="<?php echo $slider_3_url; ?>"><br>
			<label for="slider_3_href">Enter URL for image #3 link</label><br>
			<input type="text" name="slider_3_href" value="<?php echo $slider_3_href; ?>"><br>
			
		

		
			<label for="slider_4_url">Enter URL for image #4</label><br>
			<input type="text" name="slider_4_url" value="<?php echo $slider_4_url; ?>"><br>
			<label for="slider_4_href">Enter URL for image #4 link</label><br>
			<input type="text" name="slider_4_href" value="<?php echo $slider_4_href; ?>"><br>
			
		

		
			<label for="slider_5_url">Enter URL for image #5</label><br>
			<input type="text" name="slider_5_url" value="<?php echo $slider_5_url; ?>"><br>
			<label for="slider_5_href">Enter URL for image #5 link</label><br>
			<input type="text" name="slider_5_href" value="<?php echo $slider_5_href; ?>"><br>
			
		

		
			<label for="slider_6_url">Enter URL for image #6</label><br>
			<input type="text" name="slider_6_url" value="<?php echo $slider_6_url; ?>"><br>
			<label for="slider_6_href">Enter URL for image #6 link</label><br>
			<input type="text" name="slider_6_href" value="<?php echo $slider_6_href; ?>"><br>
			
		

		<br><hr>
		<h3>Deals Settings</h3>
		
			<label for="deal_1_url">Enter URL for deal #1</label><br>
			<input type="text" name="deal_1_url" value="<?php echo $deal_1_url; ?>"><br>
			<label for="deal_1_href">Enter URL for deal #1 link</label><br>
			<input type="text" name="deal_1_href" value="<?php echo $deal_1_href; ?>"><br>
			
		

		
			<label for="deal_2_url">Enter URL for deal #2</label><br>
			<input type="text" name="deal_2_url" value="<?php echo $deal_2_url; ?>"><br>
			<label for="deal_2_href">Enter URL for deal #2 link</label><br>
			<input type="text" name="deal_2_href" value="<?php echo $deal_2_href; ?>"><br>
			
		

	
			<label for="deal_3_url">Enter URL for deal #3</label><br>
			<input type="text" name="deal_3_url" value="<?php echo $deal_3_url; ?>"><br>
			<label for="deal_3_href">Enter URL for deal #3 link</label><br>
			<input type="text" name="deal_3_href" value="<?php echo $deal_3_href; ?>"><br>
			
		

		
			<label for="deal_4_url">Enter URL for deal #4</label><br>
			<input type="text" name="deal_4_url" value="<?php echo $deal_4_url; ?>"><br>
			<label for="deal_4_href">Enter URL for deal #4 link</label><br>
			<input type="text" name="deal_4_href" value="<?php echo $deal_4_href; ?>"><br>
		
		

		
			<label for="deal_5_url">Enter URL for deal #5</label><br>
			<input type="text" name="deal_5_url" value="<?php echo $deal_5_url; ?>"><br>
			<label for="deal_5_href">Enter URL for deal #5 link</label><br>
			<input type="text" name="deal_5_href" value="<?php echo $deal_5_href; ?>"><br>
			
		

		
			<label for="deal_6_url">Enter URL for deal #6</label><br>
			<input type="text" name="deal_6_url" value="<?php echo $deal_6_url; ?>"><br>
			<label for="deal_6_href">Enter URL for deal #6 link</label><br>
			<input type="text" name="deal_6_href" value="<?php echo $deal_6_href; ?>"><br>
			<input type="submit" value="Update">
		</form>

		<?php if (isset($_POST)){
			update_option('banner_ad_url', $_POST['banner_ad_image']);
			update_option('banner_ad_href', $_POST['banner_ad_href']);
			update_option('slider_1_url', $_POST['slider_1_url']);
			update_option('slider_1_href', $_POST['slider_1_href']);
			update_option('slider_2_url', $_POST['slider_2_url']);
			update_option('slider_2_href', $_POST['slider_2_href']);
			update_option('slider_3_url', $_POST['slider_3_url']);
			update_option('slider_3_href', $_POST['slider_3_href']);
			update_option('slider_4_url', $_POST['slider_4_url']);
			update_option('slider_4_href', $_POST['slider_4_href']);
			update_option('slider_5_url', $_POST['slider_5_url']);
			update_option('slider_5_href', $_POST['slider_5_href']);
			update_option('slider_6_url', $_POST['slider_6_url']);
			update_option('slider_6_href', $_POST['slider_6_href']);
			update_option('deal_1_url', $_POST['deal_1_url']);
			update_option('deal_1_href', $_POST['deal_1_href']);
			update_option('deal_2_url', $_POST['deal_2_url']);
			update_option('deal_2_href', $_POST['deal_2_href']);
			update_option('deal_3_url', $_POST['deal_3_url']);
			update_option('deal_3_href', $_POST['deal_3_href']);
			update_option('deal_4_url', $_POST['deal_4_url']);
			update_option('deal_4_href', $_POST['deal_4_href']);
			update_option('deal_5_url', $_POST['deal_5_url']);
			update_option('deal_5_href', $_POST['deal_5_href']);
			update_option('deal_6_url', $_POST['deal_6_url']);
			update_option('deal_6_href', $_POST['deal_6_href']);
			
			
		} ?>
	</div>
<?php

//end inside_my_page
}




function add_my_page(){
	add_menu_page('Homepage options', 'Options', 'manage_options', 'uncb-homepage-options', 'inside_my_page');
}



add_action ('admin_menu', 'add_my_page');



?>