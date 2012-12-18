<?php ?>
<div id="post_box"></div>
<div class="reveal">
	<!-- Used to fade in a background when a specific slide state is reached -->
	<div class="state-background"></div>

	<!-- Any section element inside of this container is displayed as a slide -->
	<div class="slides">
		
		<section id="work" data-state="somestate" name="work">
			<section>
				<h2><?php
						printf( __( 'Tag: %s', '' ), single_tag_title( '', false ) );
						//echo single_tag_title();
					?>

				</h2>
				<a href="#/1/1" class="big-arrow down"></a>
				<ul class="grid">
					<?php
						$posttags = get_the_tags();
						if ($posttags) {
						  foreach($posttags as $tag) {
						    $tagIdVar = $tag->term_id; 
						  }
						}
					?>
					<?php
						$args=array(
					      'tag_id' => $tagIdVar,
					      'posts_per_page'=>8,
						);
					?>
					<?php query_posts($args); ?>

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

			<?php if( have_posts() ) {
				$myposts = $wp_query->post_count;
				if ( $myposts > 8 ) { ?>

			<section>
				<h2>&nbsp;</h2>
				<a href="#/1/2" class="big-arrow down"></a>
				<ul class="grid">

					<?php
						$args=array(
					      'tag_id' => $tagIdVar,
					      'posts_per_page'=>8,
					      'offset'=>8,
						);
					?>
					<?php query_posts($args); ?>

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
			<?php } } ?>
			<section>
				<h2>No More Posts</h2>
				<p style="margin-top:5%;float:left;">Thanks for taking the time to look at some of my work, would you like to read some <a href="<?php get_site_url(); ?>/#/2">More Info About Me</a>?  You can also <a href="<?php get_site_url(); ?>/#/3">Get In Touch</a> with me on this site.</p>
			</div>
			</section>			
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