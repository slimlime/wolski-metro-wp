$(window).mousewheel(getSlidePosition);

	//Parallax scrolling effect
	function getSlidePosition(){
		var currentSlideTwo = Reveal.getIndices();
		var currentSlide = $('div.slides').children('section').find('section.present');
		var horzSlides = $('div.slides').children('section').size();
		var vertSlides = $('div.slides').children('section').children('section').size();
		
		//console.log($('div.slides').children('section').find('section.present'));
		//console.log(horzSlides);
		//console.log(vertSlides);
		//console.log(currentSlideTwo);
	}
	


	$(document).ready(function() {
		console.log(localStorage.getItem('hide-voice-alert'));
		if(! localStorage.getItem('hide-voice-alert')) {
			$('#voice-command-info').slideDown();
		}
	
		//display post data on hover
		  $('section.post-item').each(function(){
		  	var post = $(this).attr('name');
			var post = $('div.' + post);
			$(this).hover(function(){
				post.fadeIn('slow');
			}, function(){
				post.fadeOut('slow');
			});
			post.hover(function(){
				$(this).clearQueue();
			});
		  });
		
		//Floating background effect
		  var counter = 0;

		  function bgAnimate(){
		  	var bg = $('body');
			var random = Math.ceil(Math.random() * 10) + 3;
		    var moveX = (Math.floor(Math.random() * 2) == 0) ? 0 - random : random;
			var moveY = (Math.floor(Math.random() * 2) == 0) ? 0 - random : random;
			var newX = (parseInt(bg.css('background-position-x'))) + moveX;
			var newY = (parseInt(bg.css('background-position-y'))) + moveY;
			
			console.log('random: '+random+' moveX: '+moveX+' moveY: '+moveY+' newX: '+newX+' newY: '+newY);

			$('body').animate({
				'background-position-x': newX+'%',
				'background-position-y': newY+'%'
			}, 2000, 'easeInOutQuad');
		  }
		  //setInterval(bgAnimate, 2000);
		  
			//$('body').css({backgroundPosition: '0 0'});

			//$(window).mousemove(function(e){
			//	if ((window.Touch) || (navigator.userAgent.indexOf("Android") != -1)){}
			//	else{
			//		//if(e.clientY <= 550){
			//			var hor = Math.round(0-e.clientX/40-20);
			//			var vert = Math.round(0-e.clientY/40-15);
			//			console.log(hor + ' ' + vert);
			//			$("body").css('background-position', hor+'px '+vert+'px')
			//		//}
			//	};
			//});
			$('li.columns a').hover(function(){
				//$('li.columns').addClass('unfocusHover');
				//$(this).parent('li').removeClass('unfocusHover').addClass('focusHover');

				$('li.columns').not($(this).parent('li')).clearQueue().delay(100).animate({
					opacity:0.15
				}, 1000, 'easeInOutQuad');
				$('li.columns').addClass('blurme');
			}, function(){
				//$('li.columns').removeClass('unfocusHover');
				//$('li.columns').removeClass('focusHover');
				$('li.columns').not($(this).parent('li')).clearQueue().delay(100).animate({
					opacity:1
				}, 1000, 'easeInOutQuad');
				$('li.columns').removeClass('blurme');
			});

			$.ajaxSetup({cache:false});
			$("a.post-link").click(function(){
				var post_id = $(this).attr("rel")

				$("#post_box .inner").html('').hide();
				$("#post_box span.loading").show();

				$("#post_box").fadeIn(500);
				$("#post_box .inner").load("http://www.samwolski.com/ajax-post/",{id:post_id}, function(){
					$("#post_box span.loading").fadeOut(300, function(){
						$("#post_box .inner").fadeIn(500);
					});
					
				});
				
				$("#post_box").delegate("a.back_button", "click", function(event){
					$("#post_box").fadeOut(500);
				});

				return false;
			});

			$(document).keydown( function(e) {
				if(e.keyCode === 27) {
					$("#post_box").fadeOut(500);
				}
			});

			/*if ( $("#post_box").is(':visible') ) {
				Reveal.keydown( function(e) {
					if(e.keyCode === 27) {
				    	e.stopPropagation();
				    	e.preventDefault();
    					console.log('blah');
    				}
    			});
			}*/

		$('#contactform').validate();

		//FORM SEND FUNCTIONS
		$('#formsubmit').click(function(){

			//VALIDATE
			if ( $(this).parents('form').valid() ) {

				//GET DATA
				var formData = $(this).parents('form').serialize();

				//SEND AND ANIMATE THANKYOU WITHOUT LEAVING
				$.ajax({
			        url: ''+jqueryThemeDir+'formmail.php',
			        type: 'post',
			        data: formData,
			        success: function() {
			        	console.log('form registered as success');
			        	$('#contactform').fadeOut(400);
			        	$('#successfulsend').delay(400).fadeIn(400);

			        }
			    });
			    return false; 	
			}
		});

		$('#voice-command-info .close').click(function(){
			localStorage.setItem('hide-voice-alert', true);
			$('#voice-command-info').slideUp();
		});

	});
	
	$(window).load(function(){
	//console.log(Reveal.getIndices());
		var postBoxHeight = ( ($(window).height()) - (parseInt($('#post_box').css('padding-top'), 10) * 2) + 12);
		$('div#post_box').css('height', ''+postBoxHeight+'px');
	});