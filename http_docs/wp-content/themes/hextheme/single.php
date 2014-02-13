<?php get_header('blog'); ?>

<style>
nav{
	display: none;
}

.blog-page-title{
	text-transform: uppercase;
	font-weight: 700;
	text-align: left;
	color: #fff;
}

.blog-meta{
	color: #fff;
	text-transform: uppercase;
}

.blog-left{
	padding: 20px 50px 20px 50px;
}

.blog-right{
	padding: 200px 50px 20px 50px;
}

.backtoblog{
	color: #fff !important;
	text-transform: uppercase;
	font-weight: 700;
}

.backtoblog span{
	position: relative;
display: inline-block;
top: 4px;
}
</style>

<?php the_post(); ?>


<div class="row">
	<div class="large-6 columns blog-left" style="min-height:100%; z-index:9999; position:fixed;  background: url('/wp-content/uploads/2014/02/green.gif') no-repeat center center fixed;   -webkit-background-size: cover;   -moz-background-size: cover;   -o-background-size: cover;   background-size: cover;
<?php

if( get_field( "background_image" ) ): ?>
  background: url('<?php the_field( "background_image" ); ?>') no-repeat center center fixed !important;   -webkit-background-size: cover;   -moz-background-size: cover;   -o-background-size: cover;   background-size: cover;

<?php endif; ?>" >

		<div class="clear30"></div>
		
			<div class="blog-nav large-6 columns">
				<a href="/blog" class="backtoblog"><span>&#8629;</span>	 Back to Blog</a>
			</div>
			<div class="blog-nav large-6 columns">
				<a href="/">
					<img src="/images/hex-ident.png" class="" style="float:right;" width="50"/>
				</a>
			</div>

			<div class="clear100"></div><div class="clear20"></div>

		<h2 class="blog-page-title"><?php the_title(); ?> </h2>
		<div class="blog-meta"> <span>		<?php
			$i = 0;
			foreach (get_the_category() as $category){
				if($i < 2) {
			echo $category->cat_name;
			echo " - ";
			 }
			     $i++;
			}
		 ?></span> / <span><?php the_time('F jS, Y') ?> </span></div>

	</div>

	<div class="large-6 columns blog-right">

		<?php the_content(); ?>

<div class="clear100"></div><div class="clear100"></div>


<div class="row">
<div class="verticalcenterwrap">
	<div class="verticalcenterblock">	
	<div class="large-6-columns centered">

		<div class="socialcubes">
	
			<a href="http://www.facebook.com/hexdigitalltd" target="_blank" class="cubewrap">
				<span class="socialcube">	
					<div class='boxLeft'></div>
					<div class='boxTop'></div>
					<div class='boxFront'><div class="letter">F</div></div>
				</span>
			</a>
		
			<a href="http://www.twitter.com/hexdigital" target="_blank" class="cubewrap">
				<span class="socialcube">	
					<div class='boxLeft'></div>
					<div class='boxTop'></div>
					<div class='boxFront'><div class="letter">T</div></div>
				</span>
			</a>
		
			<a href="http://vimeo.com/hexdigital" target="_blank" class="cubewrap">
				<span class="socialcube">	
					<div class='boxLeft'></div>
					<div class='boxTop'></div>
					<div class='boxFront'><div class="letter">V</div></div>
				</span>
			</a>

		</div> <!-- end socialcubes -->

		<div class="clear20"></div>
		
	<div class="phone textblack textmediumlarge">0800 689 9250</div>

	<div class="clear50"></div>

	<a href="#" class="hexbutton hexbuttonlight hexbuttoncenter" data-reveal-id="requestaquote">REQUEST A QUOTE</a>

	<div class="clear100"></div>

	<div class="copyright textxs darklinks">
	Copyright &copy; <?php echo date("Y");?> Hex Digital. All Rights Reserved.
	<div class="clear10"></div>
	<a href="/contact#location">The Windsor Centre, 15-29 Windsor Street, London N1 8QG</a>
	</div> <!-- end copyright -->     

	<div class="clear100"></div>
	</div> <!-- end columns -->

	</div> <!-- end verticalcenterblock -->
</div> <!-- end verticalcenterwrap -->	   
</div> <!-- end row -->

	</div>
</div>


<div class="clear0"></div>
<?php get_footer('blog'); ?>