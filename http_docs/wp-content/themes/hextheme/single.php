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

.blog-right{
overflow-y:scroll !important;
}


body.single-post{
overflow:auto !important;
}


#commentform #submit {
	position: relative;
	overflow: hidden;
		background-color:#ddd;
font-family:Helvetica, sans-serif;
cursor:pointer;
text-align:center;
text-transform:uppercase;
font-size:0.8em;
font-weight:600;
position:relative;
-webkit-box-shadow:3px 3px 0px rgba(50,50,50,0.4);-moz-box-shadow:3px 3px 0px rgba(50,50,50,0.4);box-shadow:3px 3px 0px rgba(50,50,50,0.4);-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;transition:0.2s ease-in-out;-moz-transition:0.2s ease-in-out;-ms-transition:0.2s ease-in-out;-webkit-transition:0.2s ease-in-out;-o-transition:0.2s ease-in-out;
margin:30px 0 10px;
}


#commentform #submit:active{
-webkit-box-shadow:inset 3px 3px 0px rgba(50,50,50,0.4);
-moz-box-shadow:inset 3px 3px 0px rgba(50,50,50,0.4);
box-shadow:inset 3px 3px 0px rgba(50,50,50,0.4);
}

#commentform #submit:hover{
transition:0.2s ease-in-out;
-moz-transition:0.2s ease-in-out;
-ms-transition:0.2s ease-in-out;
-webkit-transition:0.2s ease-in-out;
-o-transition:0.2s ease-in-out
}

#commentform #submit{
background:#fbfbfb;
color:#2c2d2d;
border:0;
padding:25px 60px;
font-weight:bold;
}

#commentform #submit:hover,#commentform #submit:focus{
background:#2c2d2d;
color:#fff
}

#commentform .form-allowed-tags{
display:none;
}

#commentform .comment-form-comment{
margin-top:15px;
}

.commentlist {
margin-top:80px;
}

.commentlist .vcard{
display:block;
border:none;
border-bottom:1px solid #ccc;
padding:0 0 20px 0;
}

.commentlist p{
font-size:.8em;
}

.commentlist .commentmetadata{
margin-bottom:10px;
font-size:.8em;
text-transform:uppercase;
}

#commentsection a{
color: #2ba6cb;
text-decoration: none;
line-height: inherit;
}

#commentsection a:hover{
color: #333;
text-decoration: none;
line-height: inherit;
}

.comment-form-author, .comment-form-email, .comment-form-url, .comment-form-comment{
margin-bottom:0px;
}

.comment-form-author label, .comment-form-email label, .comment-form-url label, .comment-form-comment label{
text-transform: uppercase;
font-size: .75em;
line-height: 1.5em;
color:#aaa;
}

@media only screen and (max-width: 767px) {
.blog-right{
overflow-y:visible !important;
height:auto !important;
position:static;
background:none;
}

.blog-left{
height:auto !important;
min-height:0px !important;
}
}

</style>

<div class="row">
	<div class="large-6 columns blog-left" style="min-height:100%; z-index:-; position:static ; background: url('/wp-content/uploads/2014/02/green.gif') fixed no-repeat center center;   -webkit-background-size: cover;   -moz-background-size: cover;   -o-background-size: cover;   background-size: cover;
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
			
			 }
			     $i++;
			}
		 ?></span> / <span><?php the_time('F jS, Y') ?> </span></div>
		 <div class="clear50"></div>
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
