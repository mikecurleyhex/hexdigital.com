<?php
/*
Template Name: Single Projects
*/
?>

<?php get_header(); ?>



<div class="divsection sectionoffwhite">

<div class="hide-for-small projectsmotif rotate">
  <a href="/" class="hexmotifdark realeasy rotate"><img src="<?php bloginfo('template_directory'); ?>/images/hexmotifdark.png"/></a>
</div>

<a href="<?php echo wp_logout_url( home_url() ); ?>" class="logout hexbutton hexbuttondark">Logout</a>

<div class="row">
<div class="verticalcenterwrap">
	<div class="verticalcenterblock">

		<div class="projecttabs">

			<div class="clear100"></div>
			<div class="clear20"></div>


		<div class="large-10 large-centered small-12 small-centered columns">

		 <div class="section-container tabs" data-section="tabs">

		  <div class="section realeasy">
		    <p class="title textintro" data-section-title><a href="#">OVERVIEW</a></p>
		    <div class="content lightlinksnounderline" data-section-content>

			<div class="large-8 small-12 columns">

				<h2 class="textintro textlarge textleft">
				<?php echo get_the_title($ID); ?> 
				</h2>

				<div class="clear10"></div>

				<div class="projectsubtitle textleft">
					<?php the_field("subtitle"); ?>
				</div>

				<div class="clear50"></div>


				<div class="googlegroup greybg">

					<h3 class="textleft">DISCUSSION</h3>

					<div class="clear20"></div>

					<iframe id="forum_embed"
					  src="javascript:void(0)"
					  scrolling="no"
					  frameborder="0"
					  width="100%"
					  height="700">
					</iframe>
					<script type="text/javascript">
					  document.getElementById('forum_embed').src =
					     'https://groups.google.com/a/hexdigital.com/forum/embed/?place=forum/test'
					     + '&showsearch=true&showpopout=true&showtabs=false'
					     + '&parenturl=' + encodeURIComponent(window.location.href);
					</script>


				</div>  <!-- end googlegroup -->

						
								
			</div> <!-- end large-6 -->

			<!--<div class="large-1 columns hide-for-small">
				<div class="ylinedividerlight"></div>
			</div> -->

			<div class="large-4 small-12 columns">

				<div class="clear5"></div>

				<h3>PROJECT CHECKLIST</h3>
				<div class="clear50"></div>
				<ul class="projectchecklist">
					<li><div class="cbwrap"><div class="checkboxitem"><input id="checkboxinput1" type="checkbox" name="milestone" value="milestone1"><label for="checkboxinput1"></label></div></div> <div class="labeltext">Wireframes</div></li>
					<li><div class="cbwrap"><div class="checkboxitem"><input id="checkboxinput2" type="checkbox" name="milestone" value="milestone2"><label for="checkboxinput2"></label></div></div> <div class="labeltext">Home Page Design</div></li>
					<li><div class="cbwrap"><div class="checkboxitem"><input id="checkboxinput3" type="checkbox" name="milestone" value="milestone3"><label for="checkboxinput3"></label></div></div> <div class="labeltext">Other Designs</div></li>
					<li><div class="cbwrap"><div class="checkboxitem"><input id="checkboxinput4" type="checkbox" name="milestone" value="milestone4"><label for="checkboxinput4"></label></div></div> <div class="labeltext">Development Sprint I</div></li>
					<li><div class="cbwrap"><div class="checkboxitem"><input id="checkboxinput5" type="checkbox" name="milestone" value="milestone5"><label for="checkboxinput5"></label></div></div> <div class="labeltext">Development Sprint II</div></li>
					<li><div class="cbwrap"><div class="checkboxitem"><input id="checkboxinput6" type="checkbox" name="milestone" value="milestone6"><label for="checkboxinput6"></label></div></div> <div class="labeltext">QA</div></li>
					<li><div class="cbwrap"><div class="checkboxitem"><input id="checkboxinput7" type="checkbox" name="milestone" value="milestone7"><label for="checkboxinput7"></label></div></div> <div class="labeltext">Final Sign Off</div></li>
				</ul>

				<div class="clear30"></div>



				<ul class="projectchecklist">
				<?php 
		 
				if(get_field('timeline_row')) 
				{

					while(has_sub_field('timeline_row')) 
					{
	 
						if(get_field('milestone_select'))
						{
							echo '<li>' . get_field('milestone') . '</li>';
						}

						else {
							echo 'no buddy ';
						}
					}
				}
					 
				?>
			</ul>





					<h3 class="textmedium padding50 bgoffwhite textintro">THE LAUNCH DATE <div class="clear5"></div> <span class="textproximanova"> <?php the_field("launch_date"); ?></span></h3>

				<div class="clear50"></div>

			</div> <!-- end large-6 -->

		  </div>

		  </div> <!-- end section div -->

  

		  <div class="section realeasy">
		    <p class="title textintro" data-section-title><a href="#">DESIGN</a></p>
		    <div class="content lightlinksnounderline" data-section-content>
		    	
			<iframe id="invision" width="100%" marginheight="0px" src="https://projects.invisionapp.com/share/HFGFNLWR#/screens"></iframe>

		    </div>
		  </div> <!-- end section div -->

		  	<div class="section realeasy">
		    <p class="title textintro" data-section-title><a href="#">ASSETS</a></p>
		    <div class="content lightlinksnounderline" data-section-content>

		    	<div class="large-5 columns">
					<div class="clear20"></div>
					<div class="clear10"></div>
					<h3 class="textleft">&nbsp; &nbsp; UPLOAD A FILE</h3>

			    </div> <!-- end large-6 -->
		    	
		    </div>
		  </div> <!-- end section div -->

	
		  <div class="section realeasy">
		    <p class="title textintro" data-section-title><a href="#">TIMELINE</a></p>
		    <div class="content lightlinksnounderline" data-section-content>

				<h3 class="textintro"><?php the_time('l, F j, Y') ?></h3>

				<div class="clear30"></div>

				<table>
					<thead>
						<tr class="textintro">
							<th>Delivery Date</th>
							<th>Milestone</th>
							<th>Hex Actions</th>
							<th>Client Actions</th>
						</tr>
					</thead>
						
						<?php 
		 
						if(get_field('timeline_row'))
						{
						 
							while(has_sub_field('timeline_row'))
							{
								echo '<tr class="' . get_sub_field('milestone_select') . '"><td>' . get_sub_field('delivery_date') . ' </td> <td>'. get_sub_field('milestone') . '</td> <td>'. get_sub_field('timeline_hex_actions') . '</td> <td>'. get_sub_field('timeline_client_actions') . '</td></tr>';
							}
						 
						}
						 
						?>
				</table>  	
		    	

		    <!--<iframe height="800px" width="100%" src="https://app.smartsheet.com/b/publish?EQBCT=1af2ad354938467d9e255789c7ac4567"></iframe>-->
				
		    </div>
		  </div> <!-- end section div -->

		  <div class="section realeasy">
		    <p class="title textintro" data-section-title><a href="#">INFO</a></p>
		    <div class="content lightlinksnounderline" data-section-content>
		    	

		    </div>
		  </div> <!-- end section div -->



		<div class="clear0"></div>

		</div>   <!-- end tabs section container -->

		<div class="clear0"></div>
	</div> <!-- end workgrid -->
	
	</div> <!-- end verticalcenterblock -->
</div> <!-- end verticalcenterwrap -->
</div> <!-- end row -->

<div class="clear100"></div>

</div><!-- end project tabs -->

</div> <!-- end div section -->

<div class="clear30"></div>






<?php get_footer(); ?>

<!--
<script>

$(document).ready(function(){
	$(document).scroll(function(){
		$('#invision').attr('src', $('#invision').attr('src'));
	});
});

</script>
-->
