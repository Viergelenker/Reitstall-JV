<?php
/**
 * Displays archive pages if a speicifc template is not set. 
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
		
		    <main id="main" class="small-12 medium-8 large-8 columns" role="main">
			    
		    	<header>
		    		<h3 class="page-title"><?php the_archive_title();?></h3>
					<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
		    	</header>
		
		    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
		
			</main> <!-- end #main -->
	
			<?php get_sidebar(); ?>
	    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>