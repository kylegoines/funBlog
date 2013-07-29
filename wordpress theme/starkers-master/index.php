<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

 <div class="subWrapper">
	<?php if ( have_posts() ): ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
		
	            <header>
	                <div class="openButton"></div>
	                <h1><?php the_title(); ?></h1>
	                <small><?php the_subtitle() ?></small>
	            </header>
				
                <div class="content">

                    <?php the_content(); ?>

            		
                </div>
				
				<div class="divider"></div>

	<?php endwhile; ?>
	
	<?php else: ?>
	<h2>No posts to display</h2>
	<?php endif; ?>

</div><!--subwrap-->



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>