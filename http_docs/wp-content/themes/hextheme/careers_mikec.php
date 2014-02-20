<?php
/*
Template Name: Careers Mike C Test
*/
?>

<?php get_header(); ?>




<?php 
 
/*
*  Loop through a Flexible Content field and display it's content with different views for different layouts
*/
 
while(has_sub_field("work")): ?>
 

	<?php if(get_row_layout() == "main_header_image"): ?>
	<section class="worksection mainheaderimage">
		<div class="mainheaderimagebg" style="background: url(<?php the_sub_field("main_header_image"); ?>)">
 

		<div class="verticalcenterwrap">
		<div class="verticalcenterblock">

		<h1 class="workmaintitle textintro">
			<?php echo get_the_title($ID); ?> 
		</h1>

		<h2 class="subtitle textmedium textcenter">
			<?php the_sub_field("subtitle"); ?>
		</h2>


			</div> <!-- end verticalcenterblock -->
		</div> <!-- end verticalcenterwrap -->

	</div> <!-- end mainheaderimagebg -->
	</section>	
 
	<?php elseif(get_row_layout() == "lead"): ?>
	<section class="worksection sectionlead">

		<div class="verticalcenterwrap">
			<div class="verticalcenterblock">

				<div class="large-8 large-centered small-10 small-centered columns">

				<p class="lead">
					<?php the_sub_field("lead"); ?>
				</p>

				</div> <!-- end large-10 -->

			</div> <!-- end verticalcenterblock -->
		</div> <!-- end verticalcenterwrap -->

	</section>

	


	<?php elseif(get_row_layout() == "heading"): ?>
	<section class="sectionstorm">
		
		<div class="verticalcenterwrap">
		<div class="verticalcenterblock">

		<h3 class="heading textintroinline">
			<?php the_sub_field("heading"); ?>
		</h3>

			</div> <!-- end verticalcenterblock -->
		</div> <!-- end verticalcenterwrap -->

	</div> <!-- end mainheaderimagebg -->
	</section>	


 <?php endif ?>
<?php endwhile; ?>


<div id="careers" class="divsection sectionoffwhite">

<div class="row">
<div class="verticalcenterwrap">
	<div class="verticalcenterblock">

		

		<div class="clear100"></div>
		<div class="clear50"></div>
		<div class="large-6 large-centered columns">
		<?php while (have_posts()) : the_post(); ?> 
		          	<?php the_content(); ?>
					<?php endwhile; ?>
		</div>			
		
		<div class="clear100"></div>
		<div class="large-10 large-centered columns">

		<div class="clear50"></div>

				<ul class="large-block-grid-3 small-block-grid-1 workitems lightlinksnounderline">
	          
					<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("post_type=careers&showposts=6&paged=$paged" ); ?>
					
					<?php while (have_posts()) : the_post(); ?> 
		          	<li class="realeasy"><a href="<?php the_permalink() ?>" class="workitem lightlinks realeasy" style="background:url('<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id, 'work-thumb'); echo $image_url = $image_url[0]; ?>');"><div class="workitemtitle"><?php the_title() ?></div></a></li>
					
					<?php endwhile; ?>

				</ul>

		</div> <!-- end large-8 -->

		<div class="clear100"></div>
		<div class="clear50"></div>	

	</div> <!-- end verticalcenterblock -->
</div> <!-- end verticalcenterwrap -->
</div> <!-- end row -->

<div class="clear0"></div>

</div> <!-- end div section -->

	

<div class="clear0"></div>

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
