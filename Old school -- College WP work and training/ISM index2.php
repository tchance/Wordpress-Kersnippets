<?php get_header(); ?>

<div id="content">
<div id="featured">
<?php include (ABSPATH . '/wp-content/plugins/dynamic-content-gallery-plugin/dynamic-gallery.php'); ?>
</div> 
<table width=100% border=0>
<tr>
<td>
<div id="leftcol">
<?php
// enter the IDs of which categories you want to display
$display_categories = array(get_cat_id('OnCampus'));
foreach ($display_categories as $category) { ?>
    <div class="featured">
      <?php query_posts("showposts=3&cat=$category");
	    $wp_query->is_category = false;
		$wp_query->is_archive = false;
		$wp_query->is_home = true;
		 ?>
      <h3>
       On Campus Dining
        </h3><br>
      <?php while (have_posts()) : the_post(); ?>
    <?php // here the thumbnail image gets automatically generated fron the posts own image gallery ?>
           
      <a href="<?php the_permalink() ?>" rel="bookmark" class="title">
      <?php 
// this is where title of the article gets printed	  
	  the_title(); ?>
      </a><br />
      <?php the_excerpt() ; ?>
      <?php endwhile; ?>
    </div>
    <?php } ?>
  </div>
  </td>
  <td>
  <!--END LEFTCOL-->
  <div id="rightcol">
    <?php
// enter the IDs of which categories you want to display
$display_categories = array(get_cat_id('Reviews'),get_cat_id('HealthyTips'),get_cat_id('OffCampus'));
foreach ($display_categories as $category) { ?>
    <div class="clearfloat">
      <?php query_posts("showposts=1&cat=$category");
	    $wp_query->is_category = false;
		$wp_query->is_archive = false;
		$wp_query->is_home = true;
		 ?>
      <h3><a href="<?php echo get_category_link($category);?>">
        <?php 
	// name of each category gets printed	  
	  single_cat_title(); ?>
        </a></h3><br>
      <?php while (have_posts()) : the_post(); ?>
    <?php // here the thumbnail image gets automatically generated fron the posts own image gallery ?>
           
      <a href="<?php the_permalink() ?>" rel="bookmark" class="title">
      <?php 
// this is where title of the article gets printed	  
	  the_title(); ?>
      </a><br />
      <?php the_excerpt() ; ?>
      <?php endwhile; ?>
    </div>
    <?php } ?>
  </div>
  </td>
  </tr>
  </table>
</div><!-- end #content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>