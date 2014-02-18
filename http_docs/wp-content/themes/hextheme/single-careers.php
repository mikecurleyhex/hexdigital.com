<?php
/*
Template Name: Careers 
*/
?>

<?php get_header(); ?>
<style>

#gform_2 .validation_message{
font-weight:300;
}

#gform_2 div.validation_error {
font-weight:300 !important;
}

#gform_2 .gfield_label {
color: #000;
text-decoration:underline;
font-weight:300 !important;
float:left;
}

#gform_2 .gfield_label .gfield_required{
text-decoration:none;
}

#gform_2 .gfield_error .gfield_label {
color: #790000;
}

#gform_2 .gfield_description{
font-family:proxima-nova, Helvetica, Arial, sans-serif !important;
}

#gform_2 .cover-letter, .cv-resume{
margin: 40px 0;
padding:0;
}

#gform_2 .ginput_container {
	position: relative;
	overflow: hidden;
		background-color:#ddd;
font-family:Helvetica, sans-serif;
cursor:pointer;
width:194px;
text-align:center;
text-transform:uppercase;
font-size:0.875em;
font-weight:600;
position:relative;
-webkit-box-shadow:3px 3px 0px rgba(50,50,50,0.4);-moz-box-shadow:3px 3px 0px rgba(50,50,50,0.4);box-shadow:3px 3px 0px rgba(50,50,50,0.4);-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;transition:0.2s ease-in-out;-moz-transition:0.2s ease-in-out;-ms-transition:0.2s ease-in-out;-webkit-transition:0.2s ease-in-out;-o-transition:0.2s ease-in-out;
margin:30px 0 10px;
}

#gform_2 .ginput_container input {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	width:100%;
	height:100%;
	font-size: 20px;
	cursor: pointer;
	opacity: 0;
	filter: alpha(opacity=0);
	
}

#gform_2 .ginput_container:active{
-webkit-box-shadow:inset 3px 3px 0px rgba(50,50,50,0.4);
-moz-box-shadow:inset 3px 3px 0px rgba(50,50,50,0.4);
box-shadow:inset 3px 3px 0px rgba(50,50,50,0.4);
}

#gform_2 .ginput_container:hover{
transition:0.2s ease-in-out;
-moz-transition:0.2s ease-in-out;
-ms-transition:0.2s ease-in-out;
-webkit-transition:0.2s ease-in-out;
-o-transition:0.2s ease-in-out
}

#gform_2 .ginput_container{
background:#fbfbfb;
color:#2c2d2d;
border:0;
padding:15px;
font-weight:bold;
float:left;
clear:both;
}

#gform_2 .ginput_container:hover,#gform_2 .ginput_container:focus{
background:#2c2d2d;
color:#fff
}



#gform_2 .ginput_container:before{
content:"UPLOAD";
}

.file-upload-filename{
float:left;
margin-top:45px;
margin-left:30px;
}
 
 
 @media only screen and (max-width: 767px) {
.file-upload-filename{
width: 50%;
text-align: center;
margin:0;
float:none;
}

#gform_2 .ginput_container{
float:none;
width:50%;
}

#gform_2 .gfield_label {
float:none;
}

.single-careers .subtitle{
display:none;
}

}


</style>
<script type="text/javascript">
jQuery(document).ready(function($) {
    
$( "#field_2_2 .ginput_container, #field_2_1 .ginput_container" ).after( "<div class=file-upload-filename>No File Selected</div>" );


  $("#input_2_1").change(function () {
    var fileName = $(this).val().replace('C:\\fakepath\\', '');
    $("#field_2_1 .file-upload-filename").html(fileName);
  });
  
    $("#input_2_2").change(function () {
    var fileName = $(this).val().replace('C:\\fakepath\\', '');
    $("#field_2_2 .file-upload-filename").html(fileName);
  });

});
</script>

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


<div id="careerdescription" class="divsection sectionoffwhite" >

<div class="verticalcenterwrap">
	<div class="verticalcenterblock">
	<div class="clear100"></div>
		<div class="clear50"></div>

		<div class="large-6 large-centered columns" style="text-align:left;">
		<?php while (have_posts()) : the_post(); ?> 
		          	<?php the_content(); ?>
					<?php endwhile; ?>
		</div>			
		
		<div class="clear100"></div>
		<div class="clear50"></div>

		
	</div> <!-- end verticalcenterblock -->
</div> <!-- end verticalcenterwrap -->
</div>

<div class="clear0"></div>


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
