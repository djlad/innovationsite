<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package AcmeThemes
 * @subpackage SuperNews
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header class="page-header">
					<h1 class="page-title"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>


			<?php /* Start the Loop */ 
				$mostRecent = new wp_query("&post_type=post");
				$getStarted = new wp_query(array( 'cat' => 4) );
				$mustReads = new wp_query(array( 'cat' => 3) );
				//$mostPopular = new wp_query();
			?>
				<div class="row">
					<div class="col-md-4">
						<p class="column-title">Innovators</p>
						<?php while ( $mostRecent->have_posts() ) : $mostRecent->the_post(); ?>	
								<?php get_template_part( 'template-parts/content', $mustReads->get_post_format() );?>
								<div class="spacer"></div>
						<?php endwhile; ?>
					</div>
					<div class="col-md-4">
						<p class="column-title">Get Started</p>
						<?php while ( $getStarted->have_posts() ) : $getStarted->the_post(); ?>	
								<?php get_template_part( 'template-parts/content', $mustReads->get_post_format() );?>
						<?php endwhile; ?>
					</div>
					<div class="col-md-4">
						<p class="column-title">Must Reads</p>
						<?php while ( $mustReads->have_posts() ) : $mustReads->the_post(); ?>	
								<?php get_template_part( 'template-parts/content', $mustReads->get_post_format() );?>
						<?php endwhile; ?>
					</div>
				</div>


			

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		 <div class="container">


		</main><!-- #main -->
	</div><!-- #primary -->



<?php //get_sidebar( 'left' ); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>

				<?php
					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					//get_template_part( 'template-parts/content', get_post_format() );

				?>
