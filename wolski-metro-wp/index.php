<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Skeleton WordPress Theme Framework
 * @subpackage skeleton
 * @author Simple Themes - www.simplethemes.com
 */
get_header();
st_before_content($columns='');
if ( is_home() ) {
    get_template_part( 'loop', 'home' );
} else {
    get_template_part( 'loop', 'index' );
}
st_after_content();
get_sidebar();
get_footer();
?>