<?php wp_footer(); ?>

<footer id="connect">

<div class="row">

	<div class="large-6 columns fullcolumns" id="footermap">

	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfSrYjmjMdpPShuGd5y4txbHvreR8wFcU&sensor=false"></script>
    <script type="text/javascript">
      function initialize() {

      /*	var _styles = [
		{
			stylers : [
				{ hue : '#222'},
				{ saturation : 0}
			]
		},{
		    featureType: "road",
		    elementType: "geometry",
		    stylers: [
		      { lightness: 100 },
		      { visibility: "simplified" }
		    ]
		},{
		    featureType: "road",
		    elementType: "labels.text.fill",
		    stylers: [
		      { color : '#42392a'}   
		    ]
		},{
		    featureType: "road",
		    elementType: "labels.text.stroke",
		    stylers: [
		      {visibility : "off"}   
		    ]
		}
		
	];*/

		var styles = [
		{
			"featureType": "landscape",
			"stylers": [
				{
					"hue": "#7FFF00"
				},
				{
					"saturation": -100
				},
				{
					"lightness": 0
				},
				{
					"gamma": 1
				}
			]
		},
		{
			"featureType": "road.highway",
			"stylers": [
				{
					"hue": "#53FF00"
				},
				{
					"saturation": -100
				},
				{
					"lightness": -1.4210854715202004e-14
				},
				{
					"gamma": 1
				}
			]
		},
		{
			"featureType": "road.arterial",
			"stylers": [
				{
					"hue": "#FBFF00"
				},
				{
					"saturation": -100
				},
				{
					"lightness": 0
				},
				{
					"gamma": 1
				}
			]
		},
		{
			"featureType": "road.local",
			"stylers": [
				{
					"hue": "#00FFFD"
				},
				{
					"saturation": -100
				},
				{
					"lightness": 0
				},
				{
					"gamma": 1
				}
			]
		},
		{
			"featureType": "water",
			"stylers": [
				{
					"hue": "#0078FF"
				},
				{
					"saturation": -100
				},
				{
					"lightness": 0
				},
				{
					"gamma": 1
				}
			]
		},
		{
			"featureType": "poi",
			"stylers": [
				{
					"hue": "#9FFF00"
				},
				{
					"saturation": -100
				},
				{
					"lightness": 0
				},
				{
					"gamma": 1
				}
			]
		}
	];

	var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});

        var mapOptions = {
          center: new google.maps.LatLng(51.537788, -0.098921),
          zoom: 16,
		disableDefaultUI : true,
		zoomControl : false,
		scrollwheel: false,
		navigationControl: false,
		mapTypeControl: false,
		scaleControl: false,
		draggable: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
   

      map.mapTypes.set('map_style', styledMap);
  	  map.setMapTypeId('map_style');

  	  var mark = new google.maps.Marker({
			position : new google.maps.LatLng(51.537788, -0.098921),
			map : map
		});

  	   mark.setTitle('The Windsor Centre, Windsor Street, London N1 81G');
  		mark.setIcon('<?php bloginfo('template_directory'); ?>' + '/images/hexpin.png');

  	   }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

		<style>
		  #map-canvas {
		    width: 100%;
		    height: 100%;
		    background-color: #eee;
		  }
		</style>

		<div id="map-canvas"></div>

	<!--<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=The+Windsor+Centre++Windsor+Street++London+N1+8QG&amp;aq=&amp;sll=51.528642,-0.101599&amp;sspn=0.756106,2.113495&amp;ie=UTF8&amp;hq=&amp;hnear=The+Windsor+Centre,+15-29+Windsor+St,+London+N1+8QG,+United+Kingdom&amp;t=m&amp;z=14&amp;ll=51.537788,-0.098921&amp;output=embed"></iframe> -->
	
	</div> <!-- end large-6 -->

	<div class="large-6 columns fullcolumns">

		<div class="verticalcenterwrap">
		<div class="verticalcenterblock">	

			<div class="clear30"></div>

		<h2 class="textxxl textintroinline noselect fitText">THE NERVE <div class="clear5"></div><div class="textintroinline fitTextnervecenter">CENTRE</div></h2>

		<div class="clear50"></div>


		<div class="phone textblack textmediumlarge">0800 689 9250</div>

	<div class="clear50"></div>

	<a href="#" class="hexbutton hexbuttonlight hexbuttoncenter" data-reveal-id="requestaquote">REQUEST A QUOTE</a>

	<div class="clear100"></div>

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

	<div class="copyright textxs darklinks">
	The Windsor Centre, <br class="show-for-small"/>15-29 Windsor Street, London N1 8QG

	<div class="clear10"></div>

	Copyright &copy; <?php echo date("Y");?> Hex Digital. <div class="clear0 show-for-small"></div>All Rights Reserved.
	
	</div> <!-- end copyright -->     

	<div class="clear100"></div>
	
	</div> <!-- end verticalcenterblock -->
	</div> <!-- end verticalcenterwrap -->	 

	</div> <!-- end columns -->

	  
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

	<!-- Resize Section -->

	<script>
	$(function(){
    $('section').css({'min-height':($(window).height())+'px'});
    $(window).resize(function(){
        $('section').css({'min-height':($(window).height())+'px'});
	    });
	});
	</script>

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


  	<!-- Following Nav -->

	<script type="text/javascript">
  	$(function() {
    //caches a jQuery object containing the header element
    var header = $(".clearnav");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 500) {
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
		$(".fitTextworktitle").fitText(1.1, { minFontSize: '20px', maxFontSize: '75px' });
		$(".fitTextnervecenter").fitText({ minFontSize: '65px', maxFontSize: '120px' });
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