<?php get_header(); ?>

			<div id="content" class="top-wrapper">

				<div id="inner-content" class="cf middle-wrapper gutters">

					<main id="main" class="cf bottom-wrapper" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php
								/*
								 * So this file creates your post structure. Kinda like "the_content" in the page templates,
								 * this guy works by calling the function get_template_part below. That pulls in the 
								 * templates that are located in the /post-formats folder, and loads up the one that you
								 * pick on the wordpress backend. You can edit those post-formats, but the ones in there now are 
								 * the stnadard wordpress suite.
								 *
								 * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
								 * A SPECIFIC POST FORMAT.
								 *
								 * If you want to remove post formats, just delete the post-formats folder and
								 * replace the function below with the contents of the "format.php" file.
								*/		
						
								get_template_part( 'post-formats/format', get_post_format() );
							?>

						<?php endwhile; ?>

						<?php else : ?>

							

						<?php endif; ?>

					</main>
					
					<?php 
					//uncomment get_sidebar() for a sidebar!
					
					/*
						get_sidebar(); 
					*/
					?>

				</div>

			</div>

<?php get_footer(); ?>
