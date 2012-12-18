<?php st_before_footer();?>

<?php wp_footer();?>

<?php st_after_footer();?>

	<script src="<?php echo get_stylesheet_directory_uri();?>/lib/js/head.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri();?>/js/reveal.js"></script>

	<script>
		
		// Full list of configuration options available here:
		// https://github.com/hakimel/reveal.js#configuration
		Reveal.initialize({
			controls: true,
			progress: true,
			history: true,
			rollingLinks: false,
			
			theme: Reveal.getQueryHash().theme || 'default', // available themes are in /css/theme
			transition: Reveal.getQueryHash().transition || 'linear', // default/cube/page/concave/linear(2d)

			// Optional libraries used to extend on reveal.js
			dependencies: [
		        // Cross-browser shim that fully implements classList - https://github.com/eligrey/classList.js/
		        { src: '<?php echo get_stylesheet_directory_uri();?>/lib/js/classList.js', condition: function() { return !document.body.classList; } },
		        // Interpret Markdown in <section> elements
		        { src: '<?php echo get_stylesheet_directory_uri();?>/plugin/markdown/showdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
		        { src: '<?php echo get_stylesheet_directory_uri();?>/plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
		        // Syntax highlight for <code> elements
		        { src: '<?php echo get_stylesheet_directory_uri();?>/plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
		        // Zoom in and out with Alt+click
		        { src: '<?php echo get_stylesheet_directory_uri();?>/plugin/zoom-js/zoom.js', async: true, condition: function() { return !!document.body.classList; } },
		        // Speaker notes
		        { src: '<?php echo get_stylesheet_directory_uri();?>/plugin/notes/notes.js', async: true, condition: function() { return !!document.body.classList; } }
		    ]
		});

		Reveal.addEventListener( 'slidechanged', function( event ) {
			//console.log(Reveal.getIndices());// event.previousSlide, event.currentSlide, event.indexh, event.indexv
			//background height = 1405px
			var currentSlide = Reveal.getIndices();
			//var backgroundHeight = 1400;
			//var backgroundWidth = 2000;
			var horzSlides = $('div.slides').children('section').size();
			var vertSlides = $('div.slides').children('section').children('section').size();
			var xPosition = 100 / horzSlides;
			var yPosition = 100 / vertSlides;
			
			$('body').clearQueue();
			$('body').animate({
				'background-position-x': (currentSlide.h * xPosition)+'%',
				'background-position-y': (currentSlide.v * yPosition)+'%'
			}, 800);
		} );

	</script>
</body>
</html>
