<?php get_header('blog'); ?>

<?php the_post(); ?>
<style>

.blogcontent{
	color:#eee;
}
.blogcontent p{
font-size:0.8em;
}

.blogcontent li {
	margin-bottom: 30px;
	font-size: .8em;
	margin: 0;
	list-style-image:url('http://www.hexdigital.com/wp-content/uploads/2014/02/hexbulletsmall.png');
	margin-left: 1em;
	padding-bottom:25px;
}

.blogcontent strong, b {
	font-weight: 700 !important;
	font:bold;
}

.blogintrotext{
	line-height:175%;
}

.blogcontent{
	color:#333;
}

.blogcontent .section-divider{
width: 100%;
height: 1px;
display: block;
background-color: #ccc;
margin: 80px auto;
}

.blogcontent a{
color: #2ba6cb;
text-decoration: none;
line-height: inherit;
}

.blogcontent a:hover{
color: #333;
text-decoration: none;
line-height: inherit;
}

.blogcontent .simplesocialbuttons{
	margin:80px auto 0 0 !important;
}

.blog-right .socialcubes{
	z-index:0;
}

</style>

<div class="row">
	<div class="large-6 columns blog-left" style="min-height:100%; z-index:9999; position:fixed; background: url('/wp-content/uploads/2014/02/green.gif') repeat center center fixed;   -webkit-background-size: cover;   -moz-background-size: cover;   -o-background-size: cover;   background-size: cover;
<?php

if( get_field( "background_image" ) ): ?>
  background: url('<?php the_field( "background_image" ); ?>') top left no-repeat;   -webkit-background-size: cover;   -moz-background-size: cover;   -o-background-size: cover;   background-size: cover;

<?php endif; ?>" >
		<div>
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
	</div>

	<div class="large-6 columns blog-right">

	<div class="blogcontent">

		<?php the_content(); ?>

		<?php get_ssb($order = array('googleplus' => 3, 'fblike' => 2, 'twitter' => 1)); ?>

	</div>

<div class="clear50"></div>

		<?php comments_template(); ?>

<div class="clear100"></div>

<div class="clear100"></div>


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