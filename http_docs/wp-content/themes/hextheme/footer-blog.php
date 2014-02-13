<?php wp_footer(); ?>

<footer>



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