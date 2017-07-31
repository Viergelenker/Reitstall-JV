<?php
/**
 * The template part for displaying a message that posts cannot be found
 */
?>

<div id="post-not-found" class="hentry">
	
	<?php if ( is_search() ) : ?>
		
		<header class="article-header">
			<h3><?php _e( 'Sorry, No Results.', 'reitstall-jv' );?></h3>
		</header>
		
		<section class="entry-content">
			<p><?php _e( 'Try your search again.', 'reitstall-jv' );?></p>
		</section>
		
		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->
		
		<footer class="article-footer">
			<p><?php _e( 'This is the error message in the parts/content-missing.php template.', 'reitstall-jv' ); ?></p>
		</footer>
		
	<?php else: ?>
	
		<header class="article-header">
			<h3><?php _e( 'Oops, Post Not Found!', 'reitstall-jv' ); ?></h3>
		</header>
		
		<section class="entry-content">
			<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'reitstall-jv' ); ?></p>
		</section>
		
		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->
		
		<footer class="article-footer">
		  <p><?php _e( 'This is the error message in the parts/content-missing.php template.', 'reitstall-jv' ); ?></p>
		</footer>
			
	<?php endif; ?>
	
</div>
