<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Skeleton WordPress Theme Framework
 * @subpackage skeleton
 * @author Simple Themes - www.simplethemes.com
 */
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes();?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes();?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes();?>> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" <?php language_attributes();?>> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html <?php language_attributes();?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php
	// Detect Yoast SEO Plugin
	if (defined('WPSEO_VERSION')) {
		wp_title('');
	} else {
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'skeleton' ), max( $paged, $page ) );
	}
	?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Add CSS3 Rules here for IE 7-9
================================================== -->

<!--[if IE]>
<style type="text/css">
html.ie #navigation,
html.ie a.button,
html.ie .cta,
html.ie .wp-caption,
html.ie #breadcrumbs,
html.ie a.more-link,
html.ie .gallery .gallery-item img,
html.ie .gallery .gallery-item img.thumbnail,
html.ie .widget-container,
html.ie #author-info {behavior: url("<?php echo get_stylesheet_directory_uri();?>/PIE.php");position: relative;}</style>
<![endif]-->


<!-- Mobile Specific Metas
================================================== -->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 

<!-- Favicons
================================================== -->

<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon.ico">

<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri();?>/images/apple-touch-icon.png">

<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri();?>/images/apple-touch-icon-72x72.png" />

<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri();?>/images/apple-touch-icon-114x114.png" />

<link rel="pingback" href="<?php echo get_option('siteurl') .'/xmlrpc.php';?>" />
<link rel="stylesheet" id="custom" href="<?php echo home_url() .'/?get_styles=css';?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/main.css">

<?php
	/* 
	 * enqueue threaded comments support.
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	// Load head elements
	wp_head();
?>
<script type="text/javascript">
	var jqueryThemeDir = "<?php echo get_stylesheet_directory_uri();?>/";
</script>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/main.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-8855045-2']);
  _gaq.push(['_setDomainName', 'samwolski.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!--[if lt IE 9]>
<script src="lib/js/html5shiv.js"></script>
<![endif]-->

<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/0.2.0/annyang.min.js"></script>
  <script>
  if (annyang) {
    // Let's define our first command. First the text we expect, and then the function it should call
    var commands = {
      'Home': function() {
        console.log('Voice Command: home');
        Reveal.slide( 0, 0 );
      },
      'Work': function() {
        console.log('Voice Command: work');
        Reveal.slide( 1, 0 );
      },
      'Navigation': function() {
        console.log('Voice Command: navigation');
        Reveal.slide( 0, 1 );
      },
      'About': function() {
        console.log('Voice Command: about');
        Reveal.slide( 2, 0 );
      },
      'Contact': function() {
        console.log('Voice Command: contact');
        Reveal.slide( 3, 0 );
      },
      'Zoom': function(){
        console.log('Voice Command: zoom');
        Reveal.toggleOverview();
      },
      'Left': function(){
        console.log('Voice Command: left');
        Reveal.left();
      },
      'Right': function(){
        console.log('Voice Command: right');
        Reveal.right();
      },
      'Up': function(){
        console.log('Voice Command: up');
        Reveal.up();
      },
      'Down': function(){
        console.log('Voice Command: down');
        Reveal.down();
      }
    };

    var started = 0;
    var startCallback = function(e){
      started = 1;
    }
    annyang.addCallback('start', startCallback);
    // Initialize annyang with our commands
    annyang.init(commands);
  }
  $(document).keydown(function(e){
    if (e.keyCode == 86){
      if (started != 1){
        // Start listening. You can call this here, or attach this call to an event, button, etc.
        annyang.start();
      } else {
        annyang.abort();
      }
    }
  });
  /*$(document).keyup(function(e){
    if (e.keyCode == 17){
      annyang.abort();
    }
  });*/

    

  </script>
</head>
<body <?php body_class(); ?>>
  <div id="voice-command-info" style="display:none;">
    <a href="javascript:void(0)" class="close" >x</a>
    <p><strong>This site now has voice commands!</strong>  Press '<em>v</em>' once to enable speech recognition. Try out: <em>Zoom</em>, <em>Down</em>, <em>Up</em>, <em>Left</em>, <em>Right</em>, <em>Navigation</em>, <em>Home</em>, <em>Work</em>, <em>About</em> and <em>Contact</em>. Press '<em>v</em>' again to turn off voice commands.</p>
    
  </div>
	<!--<div id="wrap" class="container">
	<div class="resize"></div>-->
	<?php
	//st_above_header();
	//st_header();
	//st_below_header();
	?>
	<?php// st_navbar(); ?>
	<?php
	// Check if this is a post or page, if it has a thumbnail, and if it exceeds defined HEADER_IMAGE_WIDTH
	if ( is_singular() && current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail( $post->ID ) 
	&& ( /* $src, $width, $height */
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ))
	&&
	$image[1] >= HEADER_IMAGE_WIDTH ) :
	// Houston, we have a new header image!
	$image_attr = array(
				'class'	=> "scale-with-grid",
				'alt'	=> trim(strip_tags( $attachment->post_excerpt )),
				'title'	=> trim(strip_tags( $attachment->post_title ))
				);
	echo '<div id="header_image" class="row sixteen columns">'.get_the_post_thumbnail( $post->ID, array("HEADER_IMAGE_WIDTH","HEADER_IMAGE_HEIGHT"), $image_attr ).'</div>';
	elseif ( get_header_image() ) : ?>
		<div id="header_image" class="row sixteen columns"><img class="scale-with-grid round" src="<?php header_image(); ?>" alt="" /></div>
	<?php endif; ?>	