<?php
/*
Template Name: Ajax Post
*/
?>
<?php
	$post = get_post($_POST['id']);
?>
<?php if ($post) : ?>
	<?php setup_postdata($post); ?>
	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<a href="javascript:void(0)" title="Back" class="back_button">
				<!--<object data="<?php echo get_stylesheet_directory_uri();?>/images/back-arrow-lge-black.svg" type="image/svg+xml">-->
				  <img src="<?php echo get_stylesheet_directory_uri();?>/images/back-arrow-lge-black.svg" />
				<!--</object>-->
				&nbsp; Return to Work 
			</a>
		<div class="image-and-meta">
			<?php the_post_thumbnail('full'); ?>
			<br/>
			<p><?php the_time('F jS, Y') ?></p>
			<?php if ( has_tag() ) { ?>
				<p><?php the_tags('Tags: ', ', '); ?> </p>
			<?php } ?>
			<p>Categories: <?php the_category(', ') ?> <?php edit_post_link('| ','Edit'); ?> <!-- by <?php the_author() ?> --></p>
		</div>
		
		<div class="entry">

			<h2><?php the_title(); ?></h2>
			<?php //the_content('Read the rest of this entry &raquo;'); ?>
			<?php $content = get_the_content(); 
				if ( strlen($content) < 900 ){
					echo '<div class="short-post">';
					echo $content;
					echo '</div>';
				} else if ( strlen($content) < 1200 ) {
					echo '<div class="normal-post">';
					echo $content;
					echo '</div>';
				} else {
					echo '<div class="long-post">';
					echo $content;
					echo '</div>';
				}
			?>

			<small>Press 'Esc' to close.</small>
		</div>
 
	</div>
<?php endif; ?>