<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  
  <meta charset="<?php bloginfo('charset'); ?>" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" /> 

  <meta content="True" name="HandheldFriendly">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  

  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  
  <meta property="og:site_name" content=""/>
  <meta property="og:title" content="<?php if (function_exists('is_tag') && is_tag()) { single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; } elseif (is_archive()) { wp_title(''); echo ' Archive - '; } elseif (is_search()) { echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' - '; } elseif (is_404()) { echo 'Not Found - '; } if (is_home()) { bloginfo('name'); echo ' - '; bloginfo('description'); } else { bloginfo('name'); } if ($paged>1) { echo ' - page '. $paged; } ?>"/>
  <meta property="og:description" content=""/>
  <meta property="og:image" content="<?php echo site_url(); ?>/.jpg"/>
  <meta property="og:url" content="<?php echo current_page_url (); ?>"/>
  
  <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/hexicon32.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/images/hexicon144.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/images/hexicon114.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/images/hexicon72.png" />

  <script type="text/javascript" src="//use.typekit.net/kst8ums.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

  <title>
  <?php if ( is_page('home')) { echo ''; } elseif (function_exists('is_tag') && is_tag()) { single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; } elseif (is_archive()) { wp_title(''); echo ' Archive - '; } elseif (is_search()) { echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' - '; } elseif (is_404()) { echo 'Not Found - '; } if (is_home()) { bloginfo('name'); echo ' - '; bloginfo('description'); } else { bloginfo('name'); } if ($paged>1) { echo ' - page '. $paged; } ?>
  </title>
  
   <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-15246776-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


	