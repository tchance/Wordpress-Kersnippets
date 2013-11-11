<?php
/*
Template Name: News Page Post
*/

$news_posts = get_posts( array(
	'numberposts'=>10,
	'category'=>16,
	'orderby'=>'post_date',
	'order'=>'DESC',
	'post_status'=> 'publish'
) );
?> 

<?php get_header(); ?>

  </script>
  
  <div id="bodycontent" class="row">
	<div id="bodyhead" class="twelve columns">
		<h1>News</h1>
	</div>
	
	<div id="meat" class="row">
		<div id="bodysidebar" class="three columns">
		<?php foreach ($news_posts as $post): ?>
		<h5><a href="<?php the_permalink(); ?>"><span id="tabOne"><?php the_title(); ?></span></a></h5>
		<?php endforeach; ?>
		</div>
		<!-- tab one -->
		<div id="meatmeat1" class="eight columns">
			<div id="rowbig" class="ten columns">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?>
			</div>
			
			<!-- end tab one -->
			
			</div>
		</div>
	


<!-- start of footer -->

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

<!-- end of container div-->
</div>
</body>
</html>