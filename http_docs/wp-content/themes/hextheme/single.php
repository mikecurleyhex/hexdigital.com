<?php get_header('blog'); ?>

<?php the_post(); ?>

<div class="row">
	<div class="large-6 columns blog-left" style="padding:0px; min-height:100%; z-index:-; position:static ; background: url('/wp-content/uploads/2014/02/green-3-01.jpg') fixed no-repeat center center;   -webkit-background-size: cover;   -moz-background-size: cover;   -o-background-size: cover;   background-size: cover;
<?php

if( get_field( "background_image" ) ): ?>
  background: url('<?php the_field( "background_image" ); ?>') top left no-repeat;   -webkit-background-size: cover;   -moz-background-size: cover;   -o-background-size: cover;   background-size: cover;

<?php endif; ?>" >

<div class="darkenbg">
		<div>
		<div class="clear30"></div>
		
			<div class="blog-nav large-12">
				<a href="/blog" class="backtoblog"><span>&#8629;</span>	 Back to Blog</a>

				<a href="/">
					<img src="/images/hex-ident.png" class="backhome realeasy rotate" style="float:right;" width="50"/>
				</a>
			</div>

			<div class="clear50"></div>
			<div class="clear50 rule toprule"></div>
			<div class="clear20"></div>

		<h2 class="blog-page-title"><?php the_title(); ?> </h2>
		<div class="blog-meta"> <span>			
			<?php
			$out = array();
			$i = 0;
			foreach (get_the_category() as $category){
				if($i < 2) {
				array_push($out, "$category->cat_name");
					
			     $i++;
			}
			}
			echo implode(', ', $out);

		 ?>

		</span> / <span><?php the_time('F jS, Y') ?> </span></div>
		 <div class="clear50"></div>
		 <div class="rule bottomrule"></div>
		 <div class="prevnext">
		 	<div class="navolder">
		 		<?php previous_post('%', ' < OLDER', 'no'); ?>&nbsp;
		 		</div>
		 		<div class="navnewer">
		 			&nbsp;<?php next_post('%', 'NEWER >', 'no'); ?>
				</div>
		 		</div>
		 </div>
	</div>
</div>
	<div class="large-6 columns blog-right">

	<div class="blogcontent rulegrey">

		<?php the_content(); ?>

	</div>

	<?php get_ssb($order = array('googleplus' => 3, 'fblike' => 2, 'twitter' => 1)); ?>

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

	<a href="#" class="hexbutton hexbuttonlight hexbuttoncenter" data-reveal-id="requestaquote">REQUEST&nbspA&nbspQUOTE</a>

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
