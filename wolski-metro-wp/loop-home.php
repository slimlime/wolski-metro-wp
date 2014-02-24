<?php ?>
<div id="post_box"><span class="loading">Loading, please wait ...</span><div class="inner"></div></div>
<div class="reveal">
	<!-- Used to fade in a background when a specific slide state is reached -->
	<div class="state-background"></div>

	<!-- Any section element inside of this container is displayed as a slide -->
	<div class="slides">
		<section>
			<section id="home" class="info" data-state="welcome">
				<!--<img src="<?php echo get_stylesheet_directory_uri();?>/images/trans-logo.png" />-->
				<h2>Welcome</h2>
				<a href="#/0/1" class="big-arrow down"></a>
				<div class="box">
					<p>Welcome to my online portfolio, inspired by metro UI design trends, emerging HTML5 and CSS3 markup, and powered by modern javascript plugins.</p>
					<p>My name is <strong>Sam Wolski</strong>.  I’m a UI/UX designer and developer.  I take common web languages, libraries and technologies and I combine them in ways that produce <em>efficient</em> and easy-to-use websites and web-applications.

					<ul class="box-links">
						<li class="pink down"><a href="#/0/1" class="box-link"><span>How This Site Works</span></a></li>
						<li class="blue right"><a href="#/1" class="box-link"><span>Browse My Portfolio</span></a></li>
						<li class="orange right"><a href="#/2" class="box-link"><span>More Info About Me</span></a></li>
						<li class="green right"><a href="#/3" class="box-link"><span>Get In Touch</span></a></li>
					</ul>
				</div>
			</section>
			<section id="navigation" class="info" data-state="navigation">
				<!--<img src="<?php echo get_stylesheet_directory_uri();?>/images/trans-logo.png" />-->
				<h2>Navigation</h2>
				<a href="#/1" class="big-arrow right"></a>
				<div class="box">
					<p>This site uses the <a href="#">Reveal.js</a> presentation framework, integrated into a <a href="#">Wordpress</a> theme installation. </p>
					<object data="<?php echo get_stylesheet_directory_uri();?>/images/controls.svg" type="image/svg+xml">
					  <img src="<?php echo get_stylesheet_directory_uri();?>/images/controls.png" />
					</object>
					<p>You can navigate through content 'pages' using the <strong>arrow keys on your keyboard</strong>, <strong>scrolling with your mouse</strong> or with simple <strong>gestures on a touch screen</strong>.  Zoom in-and-out by holding <strong>ALT when you click</strong>.  If you get lost, <strong>press ‘Esc’ to bring up a site overview</strong>.  Manual navigation controls are included in the bottom right.   </p>
					<!--<p><strong>Use the arrows, swipe or scroll to move. ALT + Click to zoom in or out. Press ESC to bring up the site overview.</strong></p>-->
					
				</div>
			</section>

		</section>
		
		<section id="work" data-state="portfolio" name="work">
			<section>
				<h2>My Work</h2>
				<a href="#/1/1" class="big-arrow down"></a>
				<ul class="grid">

					<?php query_posts('posts_per_page=8'); ?>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<li class="wrap four columns">
						<a href="<?php the_permalink(); ?>" rel="<?php the_ID(); ?>" class="post-link" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(); ?>
							<div class="post-content">
								<h2 class="entry-title">
									<?php
										$thetitle = $post->post_title; /* or you can use get_the_title() */
										$getlength = strlen($thetitle);
										$thelength = 30;
										echo substr($thetitle, 0, $thelength);
										if ($getlength > $thelength) echo "...";
									?>
								</h2>
								<footer class="entry-meta">
									<span class="postdate"><?php echo get_the_date(); ?></span>
									
								</footer><!-- .entry-meta -->
							</div>
						</a>
					</li><!-- #post-<?php the_ID(); ?> .four.columns -->
					<?php endwhile; else: ?>
						<p>Sorry, no posts matched your criteria.</p>
					<?php endif; ?>
				</ul>
			</section>
			<section>
				<h2>&nbsp;</h2>
				<a href="#/1/2" class="big-arrow down"></a>
				<ul class="grid">

					<?php query_posts('posts_per_page=8&offset=8'); ?>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<li class="wrap four columns">
						<a href="<?php the_permalink(); ?>" rel="<?php the_ID(); ?>" class="post-link" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(); ?>
							<div class="post-content">
								<h2 class="entry-title">
									<?php
										$thetitle = $post->post_title; /* or you can use get_the_title() */
										$getlength = strlen($thetitle);
										$thelength = 30;
										echo substr($thetitle, 0, $thelength);
										if ($getlength > $thelength) echo "...";
									?>
								</h2>
								<footer class="entry-meta">
									<span class="postdate"><?php echo get_the_date(); ?></span>
									
								</footer><!-- .entry-meta -->
							</div>
						</a>
					</li><!-- #post-<?php the_ID(); ?> .four.columns -->
					<?php endwhile; else: ?>
						<p>Sorry, no posts matched your criteria.</p>
					<?php endif; ?>
				</ul>
			</section>
			<section>
				<h2>&nbsp;</h2>
				<a href="#/1/2" class="big-arrow down"></a>
				<ul class="grid">

					<?php query_posts('posts_per_page=8&offset=16'); ?>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<li class="wrap four columns">
						<a href="<?php the_permalink(); ?>" rel="<?php the_ID(); ?>" class="post-link" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(); ?>
							<div class="post-content">
								<h2 class="entry-title">
									<?php
										$thetitle = $post->post_title; /* or you can use get_the_title() */
										$getlength = strlen($thetitle);
										$thelength = 30;
										echo substr($thetitle, 0, $thelength);
										if ($getlength > $thelength) echo "...";
									?>
								</h2>
								<footer class="entry-meta">
									<span class="postdate"><?php echo get_the_date(); ?></span>
									
								</footer><!-- .entry-meta -->
							</div>
						</a>
					</li><!-- #post-<?php the_ID(); ?> .four.columns -->
					<?php endwhile; else: ?>
						<p>Sorry, no posts matched your criteria.</p>
					<?php endif; ?>
				</ul>
			</section>
			<section>
				<h2>&nbsp;</h2>
				<a href="#/3" class="big-arrow right"></a>
				<ul class="grid">

					<?php query_posts('posts_per_page=4&offset=24'); ?>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<li class="wrap four columns">
						<a href="<?php the_permalink(); ?>" rel="<?php the_ID(); ?>" class="post-link" title="<?php the_title(); ?>">
						<?php the_post_thumbnail('thumbnail'); ?>
							<div class="post-content">
								<h2 class="entry-title">
									<?php
										$thetitle = $post->post_title; /* or you can use get_the_title() */
										$getlength = strlen($thetitle);
										$thelength = 30;
										echo substr($thetitle, 0, $thelength);
										if ($getlength > $thelength) echo "...";
									?>
								</h2>
								<footer class="entry-meta">
									<span class="postdate"><?php echo get_the_date(); ?></span>
									
								</footer><!-- .entry-meta -->
							</div>
						</a>
					</li><!-- #post-<?php the_ID(); ?> .four.columns -->
					<?php endwhile; else: ?>
						<p>Sorry, no posts matched your criteria.</p>
					<?php endif; ?>

				</ul>
					<p style="margin-top:5%;float:left;">Thanks for taking the time to look at some of my work, would you like to read some <a href="#/2">More Info About Me</a>?  You can also <a href="#/3">Get In Touch</a> with me on this site.</p>

			</section>
		</section>

		<section id="about" class="info" data-state="about-me">
			<h2>About Me</h2>
			<a href="#/3" class="big-arrow right"></a>
			<div class="box">
				<p>
					I specialise in creating the finer points of user exerperience, making big data <strong>accessible</strong> and using it to tell <strong>meaniful stories</strong> that can be used in <strong>real-world</strong> applications. I'm also an avid supporter of <strong>open source movements</strong> (<a href="https://github.com/wolskis/wolski-metro-wp" target="_blank" title="Source Files">source files for this theme are available on github</a>).
				</p>
				<p>
					 Currently I work for a <a href="http://eresearch.griffith.edu.au/" title="eResearch Services, Griffith University" target="_blank">university-based development unit</a> that deals with the discovery and delivery of data produced by Australian research projects.</p>
				</p>
				
				<ul class="box-links">
					<li class="blue left"><a href="#/1" class="box-link"><span>Back To My Portfolio</span></a></li>
					<li class="green right"><a href="#/3" class="box-link"><span>Get In Touch</span></a></li>
				</ul>
			</div>
		</section>

		<section id="contact" class="info" data-state="contact-page">
			<h2>Contact Me</h2>
			<a href="#/2" class="big-arrow left"></a>
			<div class="contact-content">
				<p>I appreciate any comments, encouragements or criticisms. If you&#8217;d like to send me any feedback, or if you have a new project you&#8217;d like to share with me, I can be contacted via:</p>
				<p><a href="mailto:wolski.s@gmail.com?subject=Yo" alt="Send Me An Email">Email</a><br />
				<a href="http://www.facebook.com/wolski.s" alt="Visit My Facebook Page" target="_blank">Facebook</a><br />
				<a href="http://www.twitter.com/wolski_s" target="_blank" alt="Follow Me On Twitter">Twitter</a></p>
				<p>Or you can fill out the form on this page to contact me directly!</p>
			</div>
			<form method="post" name="contactform" id="contactform" action="formmail.php2">

				<fieldset>
					<label for="name">What's Your Name?</label>
					<input type="text" id="name" class="required" name="name" minlength="1" maxlength="100" placeholder="Nicknames and mysterious monikers welcome."/>
					<label for="contact_id">How Can I Get Back To You?</label>
                    <input type="text" id="contact_id" class="required" name="contact_id" minlength="1" maxlength="100" placeholder="Email, Twitter handle, Skype ID or Facebook details."/>
                    <label for="contact_message">What Can I Do For You?</label>
                    <textarea rows="5" cols="50" class="required" id="contact_message" name="contact_message" placeholder="Enter a short message here."></textarea>
				</fieldset>
				<button type="button" id="formsubmit">Send My Message</button>
			</form>
			<div id="successfulsend">
				<h3>Congrats!</h3>
				<h3>Your message has been sent.</h3>
				<ul class="box-links">
						<li class="pink left"><a href="#/0" class="box-link"><span>Return To The Start</span></a></li>
						<li class="blue left"><a href="#/1" class="box-link"><span>Back To My Portfolio</span></a></li>
				</ul>
			</div>
		</section>
		

	</div>
	
	<!-- The navigational controls UI -->
	<aside class="controls">
		<a class="left" href="#">&#x25C4;</a>
		<a class="right" href="#">&#x25BA;</a>
		<a class="up" href="#">&#x25B2;</a>
		<a class="down" href="#">&#x25BC;</a>
	</aside>

	<!-- Presentation progress bar -->
	<div class="progress"><span></span></div>
	
</div>