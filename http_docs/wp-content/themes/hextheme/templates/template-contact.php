<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<section id="section-header-contact" class="section-header">
<div class="row">
<div class="large-8-centered small-8-centered columns fullcolumns">
	<div class="verticalcenterwrap">
	<div class="verticalcenterblock">	
		<h1 class="textblack textxxl textcenter textlight maintitle"><span class="hide-for-small">interested?</span>get in <br class="show-for-small"/>touch</h1>

		<div class="clear50"></div>
		<div class="clear30"></div>

		<a href="#" class="hexbutton hexbuttonlight" data-reveal-id="requestaquote">Request&nbsp;a&nbsp;quote</a>

		<div class="hide-for-small">
		   <a href="/" class="headermotif hexmotiflight realeasy rotate"><img src="<?php bloginfo('template_directory'); ?>/images/hexmotiflight.png"/></a>
		 </div> <!-- end hide-for-small -->

	</div> <!-- end verticalcenterblock -->
	</div> <!-- end verticalcenterwrap -->
</div> <!-- end large-10 -->
</div> <!-- end row -->
</section>

<section id="letsgo" class="sectionwhite">

<div class="row">
<div class="verticalcenterwrap">
	<div class="verticalcenterblock">

		<div class="large-10 large-centered small-12 small-centered columns">


			<div class="textxxl textblack">
				0800 689 9250
			</div> <!-- end textlarge -->

				<div class="clear50"></div>

			<h2 class="textblack textlarge textcenter">
				<span class="textunderline">NO</span> RECRUITMENT <div class="clear10 show-for-small"></div> CONSULTANTS. <div class="clear20"></div> <span class="textunderline">THANKS!</span>
			</h2>



		</div> <!-- end large-10 -->
	
	</div> <!-- end verticalcenterblock -->
</div> <!-- end verticalcenterwrap -->
</div> <!-- end row -->

<div class="clear0"></div>

</section>

<section id="letsgo" class="sectiongrey">

<div class="row">
<div class="verticalcenterwrap">
	<div class="verticalcenterblock">

		<div class="large-10 large-centered small-12 small-centered columns">

			<div class="large-4 columns">
			<a href="http://www.twitter.com/hexdigital" target="_blank" class="socialblock realeasy">
				<h3 class="textblack textlarge textcenter textintroinline displayblock">TWITTER</h3>
				<div class="clear10"></div>
				<div class="textmedium">
					tweet @hexdigital
				</div>
			</a>
		
			</div> <!-- end large-4 -->

				<div class="clear30 show-for-small"></div>

			<div class="large-4 columns">
			<a href="http://www.facebook.com/hexdigitalltd" target="_blank" class="socialblock realeasy">
				<h3 class="textblack textlarge textcenter textintroinline displayblock">FACEBOOK	</h3>
				<div class="clear10"></div>
				<div class="textmedium">
					facebook.com/hexdigital
				</div>
			</a>

			</div> <!-- end large-4 -->

				<div class="clear30 show-for-small"></div>

			<div class="large-4 columns">
			<a href="https://plus.google.com/+Hexdigital" target="_blank" class="socialblock realeasy">
				<h3 class="textblack textlarge textcenter textintroinline displayblock">GOOGLE PLUS</h3>
				<div class="clear10"></div>
				<div class="textmedium">
					+ hexdigital
				</div>
			</a>

			</div> <!-- end large-4 -->

				<div class="clear30 show-for-small"></div>

		</div> <!-- end large-10 -->
	
	</div> <!-- end verticalcenterblock -->
</div> <!-- end verticalcenterwrap -->
</div> <!-- end row -->

<div class="clear0"></div>

</section>

<section id="location">

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
		draggable: true,
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


</section>


<?php get_footer(); ?>