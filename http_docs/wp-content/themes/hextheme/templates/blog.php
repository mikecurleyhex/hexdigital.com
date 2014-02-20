<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>



<section class="worksection mainheaderimage" style="min-height: 432px;">
		<div class="mainheaderimagebg" style="background: url(http://www.hexdigital.com/wp-content/uploads/2014/02/green.gif)">
 

		<div class="verticalcenterwrap">
		<div class="verticalcenterblock">

		<h1 class="workmaintitle textintro">
			Blog 
		</h1>

		<h2 class="subtitle textmedium textcenter">
			Subtitle goes here		</h2>


			</div> <!-- end verticalcenterblock -->
		</div> <!-- end verticalcenterwrap -->

	</div> <!-- end mainheaderimagebg -->
	</section>




<div class="blog-list">
<div class="clear100"></div>
	<div class="large-10 large-centered columns">
	<div class="posts-container">	

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array( 'category_name' => 'blog', 'posts_per_page' => 6, 'paged' => $paged );
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
		    	<div class="blog-meta"> <span>		<?php
			$i = 0;
			foreach (get_the_category() as $category){
				if($i < 2) {
			echo $category->cat_name;
			echo " - ";
			 }
			     $i++;
			}
		 ?></span> / <span><?php the_time('d/m/y') ?> </span></div>
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
