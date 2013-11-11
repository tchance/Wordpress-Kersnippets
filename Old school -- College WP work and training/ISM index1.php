<?php get_header(); ?>

<div id="content">
<div id="featured">
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" type="application/x-shockwave-flash" width="620px" height="423px" id="InsertWidget_b58cc2c0-309b-417f-aadd-d1a0a0a3614e" align="middle"><param name="movie" value="http://widgetserver.com/syndication/flash/wrapper/InsertWidget.swf"/><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="menu" value="false" /><param name="flashvars" value="r=2&appId=b58cc2c0-309b-417f-aadd-d1a0a0a3614e" /> <embed src="http://widgetserver.com/syndication/flash/wrapper/InsertWidget.swf"  name="InsertWidget_b58cc2c0-309b-417f-aadd-d1a0a0a3614e"  width="620px" height="423px" quality="high" menu="false" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent" align="middle" flashvars="r=2&appId=b58cc2c0-309b-417f-aadd-d1a0a0a3614e" /></object> 
</div>
<table width=100% border=0>
<tr>
<td>
<div id="leftcol">
<script type="text/javascript" src="http://cdn.widgetserver.com/syndication/subscriber/InsertWidget.js"></script><script>if (WIDGETBOX) WIDGETBOX.renderWidget('4aa9df34-d50a-4c33-92bb-7e02f2d76d01');</script><noscript>Get the <a href="http://www.widgetbox.com/widget/parking-transportation">IUPUI Student Media</a> widget and many other <a href="http://www.widgetbox.com/">great free widgets</a> at <a href="http://www.widgetbox.com">Widgetbox</a>!</noscript>
  </div>
  </td>
  <td>
  <!--END LEFTCOL-->
  <div id="rightcol">
    <?php
// enter the IDs of which categories you want to display
$display_categories = array(get_cat_id('Featured'));
foreach ($display_categories as $category) { ?>
    <div class="clearfloat">
      <?php query_posts("showposts=3&cat=$category");
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