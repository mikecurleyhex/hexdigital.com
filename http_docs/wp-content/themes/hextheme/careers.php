<?php
/*
Template Name: Careers Page
*/
?>

<?php get_header(); ?>

<style type="text/css">
	html, body{
		background: url("/wp-content/themes/hextheme/images/bg-aerialview.jpg") no-repeat center center fixed !important;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
		color: #fff !important;
		font-size: 20px;
		text-align: left;
	}

	h1, a{
		color: #fff !important;
	}

	a{
		font-size: 20px !important;
	}

	section{
		background: rgba(0, 0, 0, 0.21);
padding: 50px 0px;
	}
</style>

<?php the_post(); ?>

<div class="clear100"></div><div class="clear100"></div><div class="clear50"></div>


<section>
	<h1><?php the_title(); ?></h1>

	<div class="clear100"></div>

<div class="row">
	<div class="large-8 large-centered columns">
	<?php the_content(); ?>
	</div>
	</div>
</section>

<div class="clear0"></div>

<?php get_footer(); ?>

<!-- Smooth Scroll -->
