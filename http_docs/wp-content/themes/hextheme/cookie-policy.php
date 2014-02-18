<?php
/*
Template Name: Cookie Policy
*/
?>

<?php get_header(); ?>

<style>

#policy-info .large-8{
text-align:left;
}

#policy-info strong{
font-weight:bold !important;
}

#policy-info em{
font-style:italic !important;
}

#policy-info p{
font-size:.8em;
line-height:1.8em;
}

#policy-info h1, #policy-info h2, #policy-info h3, #policy-info h4, #policy-info ul{
margin-bottom:15px;
}

#policy-info li{
margin-bottom: 15px;
font-size: .8em;
margin: 0;
list-style-image: url('http://www.hexdigital.com/wp-content/uploads/2014/02/hexbulletsmall.png');
margin-left: 1em;

line-height:1.8em;
}

#policy-info ul{
padding-bottom: 25px;
}


#policy-info a{
color: #2ba6cb;
text-decoration: none;
line-height: inherit;
}

#policy-info a:hover{
color: #333;
text-decoration: none;
line-height: inherit;
}

</style>

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

	<?php elseif(get_row_layout() == "video"): ?>
	<div class="divsection worksection videosection">

		<div class="verticalcenterwrap">
			<div class="verticalcenterblock">

				<div class="large-8 large-centered small-10 small-centered columns">


					<div class="videowrap">


					<?php if(get_sub_field('video_title')): ?>


						<h2 class="textintro"><?php echo get_sub_field("video_title"); ?></h2>
						<div class="clear50"></div>
					

					<?php endif; ?>



				<div class="videovimeo">

					<?php if(get_sub_field('video_vimeo')): ?>

						<div class="flex-video widescreen vimeo">
							<iframe src="http://player.vimeo.com/video/<?php echo get_sub_field("video_vimeo"); ?>?title=0&amp;byline=0&amp;portrait=0" width="100%" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>

		
					<?php endif; ?>

				</div>

				<div class="videoyoutube">

					<?php if(get_sub_field('video_youtube')): ?>

						<div class="flex-video widescreen">
							<iframe width="100%" height="400" src="http://www.youtube.com/embed/<?php echo get_sub_field("video_youtube"); ?>" frameborder="0" allowfullscreen></iframe>
						</div>

					<?php endif; ?>

				</div>

				</div> <!-- end videowrap -->


				</div> <!-- end large-10 -->

			</div> <!-- end verticalcenterblock -->
		</div> <!-- end verticalcenterwrap -->

	</div> <!-- end div section -->



		<?php elseif(get_row_layout() == "image_section"): ?>

		<section class="sectionimage section-header" style="background: url('<?php the_sub_field("image_section"); ?>')">

		</section>


	<?php elseif(get_row_layout() == "image_small"): ?>

		<div class="workimagesmall">

			<div class="workimagesmall" style="background: url(<?php the_sub_field("image_small"); ?>)"></div> <!-- end workimage -->

		</div> <!-- workimagesmall -->




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
		



	<?php elseif(get_row_layout() == "gallery"): ?>

	<section class="worksection sectionworkgallery">
			<div class="gallery">
			<?php the_sub_field("gallery"); ?>
			</div> <!-- end gallery -->

	</section>
		
	<?php elseif(get_row_layout() == "quote"): ?>

	<section class="worksection sectionworkquote">
		
		<div class="verticalcenterwrap">	
		<div class="verticalcenterblock">

			<div class="large-8 columns large-centered small-8 small-centered">

			<div class="quote">

				<div class="large-3 columns">
					<div class="speechmarks">"</div>
				</div> <!-- large-3 -->

				<div class="large-9 columns quotecontent textlarge">
				<?php the_sub_field("quote"); ?>
				</div>   <!-- end large-9 -->

			</div> <!-- end quote -->

			</div> <!-- end large-8 -->

		</div> <!-- end verticalcenterblock -->
		</div> <!-- end verticalcenterwrap -->

	</section>

<?php elseif(get_row_layout() == "view_work"): ?>

	<section class="worksection sectiontextblock">

		<div class="verticalcenterwrap">	
		<div class="verticalcenterblock">

				<div class="large-6 large-centered small-10 small-centered columns">
				
					<h3 class="textintro textlarge"><?php the_sub_field("view_title"); ?></h3> 

					<div class="clear30"></div>

					<p class="textblock"><?php the_sub_field("view_copy"); ?></p> 

					<div class="clear30"></div>

					<a target="_blank" href="<?php the_sub_field("view_work_url"); ?>" class="hexbutton hexbuttondark"><?php the_sub_field("view_button_label"); ?></a>


				</div> <!-- columns -->
				

		</div> <!-- end verticalcenterblock -->
		</div> <!-- end verticalcenterwrap -->

	</section>	

<?php elseif(get_row_layout() == "pricing_table"): ?>

<section class="sectionwhite">

INSERT REPEATER

<div class="large-INSERT PHP COLUMN NUMBER columns">
<ul class="pricing-table">
  <li class="title"><?php the_sub_field("pricing_title"); ?></li>
  <li class="price"><?php the_sub_field("pricing_price"); ?></li>
  INSERT REPEATER
  <li class="description">A<?php the_sub_field("pricing_description"); ?></li>
  <li class="bullet-item"><?php the_sub_field("pricing_bullet"); ?></li>
  <li class="cta-button"><a class="hexbutton" href="#"><?php the_sub_field("pricing_button_label"); ?></a></li>
</ul>
</div> <!-- end large columns -->


</section> <!-- end table -->
	
	<?php endif; ?>
 
<?php endwhile; ?>

<section id="policy-info" class="divsection sectionoffwhite">

		<div class="verticalcenterwrap">	
		<div class="verticalcenterblock">
		<div class="clear100"></div>
		<div class="clear50"></div>
				<div class="large-8 large-centered small-10 small-centered columns">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<p style="color:#aaa"> Last Updated: <?php the_modified_date('d/m/y');?> </p>
<?php the_content();?>
<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
				</div>
						<div class="clear100"></div>
		<div class="clear50"></div>
				
		</div> <!-- end verticalcenterblock -->
		</div> <!-- end verticalcenterwrap -->

	</section>	




<?php get_footer('3'); ?>

