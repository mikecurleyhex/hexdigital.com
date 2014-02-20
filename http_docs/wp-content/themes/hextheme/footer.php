<?php wp_footer(); ?>

<footer>

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

	<a href="#" class="hexbutton hexbuttonlight hexbuttoncenter" data-reveal-id="requestaquote">REQUEST&nbsp;A&nbsp; QUOTE</a>

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
</footer>


<!-- Check for Zepto support, load jQuery if necessary -->

<script>
  document.write('<script src=<?php bloginfo('template_directory'); ?>/js/vendor/'
    + ('__proto__' in {} ? 'zepto' : 'jquery')
    + '.js><\/script>');
</script>

<?php include (TEMPLATEPATH . '/includes/loadfoundation.php'); ?>
<?php include (TEMPLATEPATH . '/includes/loadscripts.php'); ?>

</body>



	<script>
	$(function(){
    $('section').css({'min-height':($(window).height())+'px'});
    $(window).resize(function(){
        $('section').css({'min-height':($(window).height())+'px'});
	    });
	});
	</script>


  	<!-- Following Nav -->

	<script type="text/javascript">
  	$(function() {
    //caches a jQuery object containing the header element
    var header = $(".clearnav");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 200) {
            header.removeClass('clearnav').addClass("follownav");
        } else {
            header.removeClass("follownav").addClass('clearnav');
        }
    });
	});
	</script>

	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.fittext.js"></script>
	<script type="text/javascript">
		$(".fitText").fitText();
		$(".fitTextmedium").fitText(1.1, { minFontSize: '30px', maxFontSize: '30px' });
		$(".fitText2").fitText(1.1, { minFontSize: '50px', maxFontSize: '75px' });
		$(".fitTextworktitle").fitText(1.1, { minFontSize: '14px', maxFontSize: '75px' });
	</script>


	<!--[if lte IE 8]>
	<script>
		location.href="/upgrade";
	</script>
	<![endif]-->

	<!--[if lte IE 7]>
	<script>
		location.href="/upgrade";
	</script>
	<![endif]-->

	<!--[if lte IE 6]>
	<script>
		location.href="/upgrade";
	</script>
	<![endif]-->


</html>