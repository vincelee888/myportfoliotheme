<?php
/*
Template Name: projects
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php if ( have_posts() ) : if ( is_home() && ! is_front_page() ) : ?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>

			<?php
		endif;

		/* Start the Loop */
		while ( have_posts() ) : the_post();

		/*
		* Include the Post-Format-specific template for the content.
		* If you want to override this in a child theme, then include a file
		* called content-___.php (where ___ is the Post Format name) and that will be used instead.
		*/

		get_template_part( 'template-parts/content', get_post_format() );

	endwhile;

	the_posts_navigation();

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif; ?>

	<div class="flex-container">

		<div class="flex-item-skills">
				<h2>Skills</h2>
			<p class="skills-description">
				Custom WordPress theme development / HTML5 / CSS3 / Responsive design / Adobe Photoshop / Experience of PHP / Javascript / JQuery / Sass / Git
		</p>
		</div><!--.flex-item-skills-->

		<div class="flex-item-experience">
			<h2>Experience</h2>
			<p class="experience-description">
				Motivated, dedicated and meticulous problem solver with a passion for Web Design and Front End Web Development
			</p>

			<p class="about-download">
				Please download my <a href="	http://www.benmarley.co.uk/wp-content/uploads/2017/03/ben_marley_cv.pdf">CV</a> and <a href="http://www.benmarley.co.uk/wp-content/uploads/2016/09/Ben_Marley_Testimonials.pdf">Testimonials</a>
			</p>

		</div><!--.flex-item-experience-->

		<div class="flex-item-jim">
			<h2><a href="http://jimnewcombe.co.uk/">Jim Newcombe</a></h2>
			<p class="flex-description">
				November 2016 - Responsive, custom WordPress site for the London based artist and writer, Jim Newcombe
			</p>

			<img src="http://www.benmarley.co.uk/wp-content/uploads/2016/11/jimnewcombe_screenshot.png"  alt="jim newcombe home screenshot home" class="dev-example"/>
			<p class="img-description">
				<a href="http://jimnewcombe.co.uk/">Visit site</a>
			</p>

		</div><!-- .flex-item-jim -->

		<div class="flex-item-ssn">
			<h2><a href="http://news.streetsupport.net/">Street Support Blog</a></h2>
			<p class="flex-description">
				May 2016 - Mobile-first, responsive, custom WordPress blog for the Manchester based social enterprise<a href="https://streetsupport.net/"> Street Support Network</a>
			</p>

			<img src="http://www.benmarley.co.uk/wp-content/uploads/2016/11/streetsupportscreenshot_grey.jpg"  alt="street support network blog screenshot home" class="dev-example"/>
			<p class="img-description">
				<a href="http://news.streetsupport.net/">Visit site</a>
			</p>

		</div><!-- .flex-item-ssn -->

		<div class="flex-item-bmphoto">
			<h2><a href="http://benmarleyphotography.co.uk/">Ben Marley Photography</a></h2>
			<p class="flex-description">
				February 2016 - Responsive, custom WordPress site to showcase my photography</p>

				<img src="http://www.benmarley.co.uk/wp-content/uploads/2016/11/benmarleyphotography_screenshot.png" alt="ben marley photography screenshot home" class="dev-example"/>
				<p class="img-description">
					<a href="http://benmarleyphotography.co.uk/">Visit site</a>
				</p>

			</div><!-- .flex-item-bmphoto -->

			<div class="flex-item-lords">

				<h2><a href="http://lordsoftheearth.com/">Lords of The Earth</a></h2>
				<p class="flex-description">
					January 2016 - Responsive, custom WordPress site, designed and developed for a photographer client</p>

					<img src="http://www.benmarley.co.uk/wp-content/uploads/2016/11/lordsoftheearth_screenshot.png" alt="lords of the earth screenshot home" class="dev-example"/>
					<p class="img-description">
						<a href="http://lordsoftheearth.com/">Visit site</a>
					</p>

				</div><!-- .flex-item-lords -->

			</div><!-- .flex-container -->

		</main><!-- #main -->

	</div><!-- #primary -->

	<?php
	get_sidebar();
	get_footer();
