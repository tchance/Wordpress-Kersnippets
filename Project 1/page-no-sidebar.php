 <?php
/*
Template Name: Page with no sidebar
*/

?> 

 <?php get_header(); ?>
  <div id="bodycontent" class="row">
	<div id="bodyhead" class="twelve columns">
		<?php if ($post->post_parent){ ?>
			<h1><?php echo get_the_title($post->post_parent); ?></h1>
			<?php } else { ?>
			<h1><?php the_title(); ?></h1>
		<?php } ?>
	</div>
	
	<div id="meat" class="row">
		
		<!-- tab one -->
		<div id="meatmeat1" class="twelve columns">
			<div id="rowbig" class="ten columns">
			

			<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<?php if ($parentID): ?><h2><?php the_title(); ?></h2><?php endif; ?>
			<?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php if ($post->post_parent): ?>
			<h6><a href="<?php get_permalink($parentID); ?>"><< Back to <?php echo get_the_title($post->post_parent); ?></h6>
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