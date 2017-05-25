<?php
/*
Template Name: home-page
*/

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="about-me">
			<p class="front-end">
				Freelance Front End Web Developer
			</p><!-- front-end -->
			<p class="location">
				Interested in junior roles in Manchester
			</p><!-- location -->
			<p class="available">
				Available July 2017
			</p><!-- available -->
		</div> <!-- about-me -->

		<main id="main" class="site-main">


			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
