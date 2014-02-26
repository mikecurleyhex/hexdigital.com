<?php
/*
Template Name: Categories
*/
?>

<?php get_header(); ?>


<?php 
 
/*
*  Loop through a Flexible Content field and display it's content with different views for different layouts
*/
 
while(has_sub_field('work', 276)): //get bg & subhead from the Blog page's custom field values in the backend (id 276) so that these values are applied to all filtered category pages ?>
 

	<?php if(get_row_layout() == "main_header_image"): ?>

<section class="worksection mainheaderimage" style="min-height: 432px;">
		<div class="mainheaderimagebg" style="background: url(<?php the_sub_field("main_header_image"); ?>)">
 
 

		<div class="verticalcenterwrap">
		<div class="verticalcenterblock">

		<h1 class="workmaintitle textintro"> 
			<?php echo get_the_title(276); // get heading from Blog page ?> 
		</h1>

		<h2 class="subtitle textmedium textcenter">
			<?php the_sub_field("subtitle"); ?></h2>

<li id="categories">
	<?php wp_dropdown_categories('show_option_all=All Categories'); ?>

<script type="text/javascript">  //category filter dropdown - redirect on selection to the appropriate WP category page, 'All Categories' selection returns to /blog
    var dropdown = document.getElementById("cat"); 
    function onCatChange() {
		if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
			location.href = "<?php echo get_option('home');?>/?cat="+dropdown.options[dropdown.selectedIndex].value+"/#blog-list";}

		else {location.href = "<?php echo get_option('home');?>/blog/#blog-list"
	}
    }
    dropdown.onchange = onCatChange;
</script>
</li>

			</div> <!-- end verticalcenterblock -->
		</div> <!-- end verticalcenterwrap -->

	</div> <!-- end mainheaderimagebg -->
	</section>

 <?php endif ?>
<?php endwhile; ?>


<div id="blog-list" class="blog-list">
<div class="clear100"></div>
	<div class="large-10 large-centered columns">
	<div class="posts-container">	

<?php
$cat_id = get_query_var('cat');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array( 'cat'=>$cat_id, 'posts_per_page' => 6, 'paged' => $paged );
query_posts($args);
if ( have_posts() ) :
while(have_posts()) : the_post(); ?>



			<div class="large-4 columns blog-wrap">
		        <div class="whats-happening-image rollover">
		               <?php
		               if( has_post_thumbnail() ) { ?>
		               <a href=<?php the_permalink(); ?>><?php the_post_thumbnail('post-thumb'); ?></a>
		               <?php } else { ?>
		               	<a href="<?php the_permalink() ?>">
		               		<img src="/images/temp-image.jpg" alt="" />
		               	</a>
		               <?php } ?>
		          </div> <!-- end blog image -->
			<div class="blog-prev">
		     <a href="<?php the_permalink() ?>"><h3 class="blog-title"><?php echo short_title('...', 40); ?></h3></a>
		    	<div class="blog-meta"> <span>	



	<?php
/*
*  Create an array of the first 2 (though this can be varied) categories assigned to this post, separate with a comma, and output to the blog meta
*/
			$out = array();
			$i = 0;
			foreach (get_the_category() as $category){
				if($i < 2) {
				array_push($out, "$category->cat_name");
					
			     $i++;
			}
			
			}
			echo implode(', ', $out); 

		 ?></span> / <span><?php the_time('d.m.y') ?> </span></div>
			</div>
			
			</div>

	<?php endwhile; ?>
<?php endif; ?>

 </div>
              		
<?php if(function_exists('wp_simple_pagination')) {
    wp_simple_pagination();
} ?> 





<?php wp_reset_query(); ?>
</div>
	
	<div class="clear100"></div>

</div>	

<div class="clear100"></div>

<?php get_footer(); ?>

<!-- Smooth Scroll -->

	<script type="text/javascript">
  	$('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
	        || location.hostname == this.hostname) {

	        var target = $(this.hash);
	        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	           if (target.length) {
	             $('html,body').animate({
	                 scrollTop: target.offset().top
	            }, 300);
	            return false;
        	}
    	}
	});	
  	</script>
