<?php get_header(); ?>
<?php 
	$news_posts = get_posts( array(
	'numberposts'=>4,
	'category'=>16,
	'orderby'=>'post_date',
	'order'=>'DESC',
	'post_status'=> 'publish'
	) );
	
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

<div id="bodycontent" class="row" style="height:1500px">

<!-- rotator/side buttons row -->
<div id="rotslide" class="twelve columns">
	<div id="rotator" class="eight columns">
		<div class="slides_container" width="500px">
                <div>
                    <a href="<?php echo $slider_1_href; ?>"><img src="<?php echo $slider_1_url; ?>"></a>
                </div>
                <div>
                   <a href="<?php echo $slider_2_href; ?>"><img src="<?php echo $slider_2_url; ?>"></a>
                </div>
                <div>
                   <a href="<?php echo $slider_3_href; ?>"><img src="<?php echo $slider_3_url; ?>"></a>
                </div>
                <div>
                    <a href="<?php echo $slider_4_href; ?>"><img src="<?php echo $slider_4_url; ?>"></a>
                </div>
		<div>
                    <a href="<?php echo $slider_5_href; ?>"><img src="<?php echo $slider_5_url; ?>"></a>
                </div>
		<div>
                    <a href="<?php echo $slider_6_href; ?>"><img src="<?php echo $slider_6_url; ?>"></a>
                </div>
	      </div>
	      	<ul id="arrows"><li><a href="#" class="prev"><img src="http://www.unclebills.com/testsite/wp-content/uploads/2013/01/lefts.png"></a></li>
	      	<li id="next"><a href="#" class="next"><img src="http://www.unclebills.com/testsite/wp-content/uploads/2013/01/rights.png"></a></li>
		</ul>

    </div>
	<div id="side buttons" class="four columns">
		<div id="familyoftheweek" class="nine columns">
		<a href="http://www.unclebills.com/testsite/?page_id=600"><img src="http://www.unclebills.com/testsite/wp-content/uploads/2013/01/showpets.png" />
		</div>
		
		<div id="socialbuttons" class="three columns">
			<a href="http://twitter.com/UncleBillsPets" target="blank"><img src="http://www.unclebills.com/testsite/wp-content/uploads/2013/01/twitter_small.png"></a>
			<a href="http://www.facebook.com/pages/Uncle-Bills-Pet-Centers/308942775787859" target="new"><img src="http://www.unclebills.com/testsite/wp-content/uploads/2013/01/facebook_small.png"></a>
			<a href="http://www.youtube.com/unclebillspets" target="blank"><img src="http://www.unclebills.com/testsite/wp-content/uploads/2013/01/youtube_small.png"></a>
		</div>
		<div id="preciouspuppy">
			<a href="http://www.thepreciouspuppy.com/" target="new"><img src="<?php bloginfo('template_directory'); ?>/images/preciouspuppy1.png" style="margin-top:18px; height:250px"></a>
		</div>
	</div>

</div>


<!-- left eight columns -->
<div id="bottom" class="twelve columns">
	<div id="featureddeals" class="eight columns">
	<div id="featuredtop">
	<h4>Monthly Super Specials</h4>
	<a href="http://www.unclebills.com/testsite/wp-content/uploads/2013/01/Flyer1.jpg"><img src="http://www.unclebills.com/testsite/wp-content/uploads/2013/01/front_flyer.png"/></a>
		</div>

	
	<h4>Featured Products</h4>
		<div id="products1" class="row">
			<a href="<?php echo $deal_1_href; ?>"><img src="<?php echo $deal_1_url; ?>"></a>
			<a href="<?php echo $deal_2_href; ?>"><img src="<?php echo $deal_2_url; ?>"></a>
			<a href="<?php echo $deal_3_href; ?>"><img src="<?php echo $deal_3_url; ?>"></a>
		</div>
		<div id="products2" class="row">
			<a href="<?php echo $deal_4_href; ?>"><img src="<?php echo $deal_4_url; ?>"></a>
			<a href="<?php echo $deal_5_href; ?>"><img src="<?php echo $deal_5_url; ?>"></a>
			<a href="<?php echo $deal_6_href; ?>"><img src="<?php echo $deal_6_url; ?>"></a>
		</div>
		
	
</div>
	

<!-- right four columns -->

	<div id="informationstation" class="four columns">
	<h4>Information Station</h4>
		<a href="http://www.unclebills.com/testsite/?page_id=16"><img src="<?php bloginfo('template_directory'); ?>/images/1dogs.png">
		<a href="http://www.unclebills.com/testsite/?page_id=18"><img src="<?php bloginfo('template_directory'); ?>/images/1cats.png">
		<a href="http://www.unclebills.com/testsite/?page_id=20"><img src="<?php bloginfo('template_directory'); ?>/images/1aquatics.png">
		<a href="http://www.unclebills.com/testsite/?page_id=141"><img src="<?php bloginfo('template_directory'); ?>/images/1smallanimals.png">
		<a href="http://www.unclebills.com/testsite/?page_id=139"><img src="<?php bloginfo('template_directory'); ?>/images/1birds.png">
		<a href="http://www.unclebills.com/testsite/?page_id=90"><img src="<?php bloginfo('template_directory'); ?>/images/1reptiles.png">
		<a href="http://www.unclebills.com/testsite/?page_id=507"><img src="<?php bloginfo('template_directory'); ?>/images/1spiders.png">
	</div>
	
	<div id="news" class="four columns">
	<h4>Recent News</h4>
	<ul>
		<?php foreach ($news_posts as $post): ?>
		<a href="<?php the_permalink(); ?>"><li><?php the_title(); ?></li></a>
		<?php endforeach; ?>
		</ul>
	</div>
	
	<div id="sponsors" class="four columns">
	
	</div>
</div>

<div id="footer" class="twelve columns">
	<div id="footer1" class="three columns">
	<?php 
		wp_nav_menu(array('theme_location'=>'footer_1',
				  'menu_class'=>'dropdown'));
		?>
	</div>
	<div id="footer2" class="three columns">
	<?php 
		wp_nav_menu(array('theme_location'=>'footer_2',
				  'menu_class'=>'dropdown'));
		?>
	</div>
	<div id="footer3" class="four columns">
	<?php 
		wp_nav_menu(array('theme_location'=>'footer_3',
				  'menu_class'=>'dropdown'));
		?>
	</div>
	<div id="footer4" class="two columns">
	<?php 
		wp_nav_menu(array('theme_location'=>'footer_4',
				  'menu_class'=>'dropdown'));
		?>
	</div>
</div>
</div>
<!-- end of container div-->
</div>
</body>
</html>