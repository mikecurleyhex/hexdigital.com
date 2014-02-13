<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<style type="text/css">
	.blog-wrap{
		min-height:350px;
	}
	.blog-wrap:hover .whats-happening-image img{
		-webkit-transition: all 1s ease;
		-moz-transition: all 1s ease;
		-o-transition: all 1s ease;
		-ms-transition: all 1s ease;
		transition: all 1s ease;
		-moz-transform: scale(1.2);
		-webkit-transform: scale(1.2);
		-o-transform: scale(1.2);
		-ms-transform: scale(1.2);
		transform: scale(1.2);
		max-width: 150%;
		max-height: 150%;
	}

.whats-happening-image img {
display: block;
max-width: 100%;
height: auto;
width: 100%;
-webkit-transition: all 1s ease;
-moz-transition: all 1s ease;
-o-transition: all 1s ease;
-ms-transition: all 1s ease;
transition: all 1s ease;
}

.blog-wrap  .blog-prev{
top: 0px;
position: relative;-webkit-transition-duration: 0.3s;      -webkit-transition-timing-function: ease-in-out; -moz-transition-duration: 0.3s;      -moz-transition-timing-function: ease-in-out; transition-duration: 0.3s;      transition-timing-function: ease-in-out;
}

.blog-wrap:hover .blog-prev{
top: -5px;border-bottom: 9px solid #bbb;
position: relative; -webkit-transition-duration: 0.3s;      -webkit-transition-timing-function: ease-in-out; -moz-transition-duration: 0.3s;      -moz-transition-timing-function: ease-in-out; transition-duration: 0.3s;      transition-timing-function: ease-in-out;
}

	.whats-happening-image {
		max-width: 345px;
		max-height: 240px;
		overflow: hidden;
		}

	.blog-title{
		text-transform: uppercase;font-weight: 700; text-align: center;
display: block;
height: 63px;
overflow-y: hidden;
	}
	.blog-prev{
		border-bottom: 4px solid #bbb;
		padding: 30px;
		background: #fff;
		border-top: 0px solid #fff;
		top: 0px;
		min-height: 167px;
		max-height: 167px;
		margin-bottom: 40px;
	}
	.blog-list{
		background: #f8f8f8;
	}

	.blog-meta{
		text-align: center;
	}
</style>


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

		<?php $loop = new WP_Query( array( 'category_name' =>'blog','posts_per_page' => 6 ) ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

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
		     <a href="<?php the_permalink() ?>"><h3 class="blog-title"><?php the_title() ?></h3></a>
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

              	<div class="pagination">
		 <?php wp_simple_pagination(); ?>
	</div> <!-- end pagination -->

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
