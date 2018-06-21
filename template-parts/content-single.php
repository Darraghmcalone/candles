<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		
		<div class="single-blog-wrapper">

				  		<div class="blog-category">
			        			<?php 
			        				foreach((get_the_category()) as $category){
							        	echo $category->name."<br>";
							       }
							      ?> 
			        	</div>

						<div class="blog-detail">
					     	<span class="author">
					     		<?php 
					     			echo get_the_author();
								  ?>
			        		</span>
			    		</div>

						<div class="first-single-image">
				        	<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail(); ?>
							<?php endif; ?>
						</div>
				    	
		</div>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
