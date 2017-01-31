<?php
/*
 Template Name: Coyote
 *
 * Oh hey there! Hi! What are you doing here? You want to make a page template? Look at you! 
 * You web dev you. Go read the instructions. But the short of it is make a duplicate of this file,
 * keep it in the same directory, call it page_yourname.php, and replace the word "Coyote" after the words "Template Name:"
 * above this paragraph, and voila, you'll have a shiny new page template you can apply on the backend.
 * You can then feel free to modify this php however you see fit. You should make a template for every 
 * page that you need granular html/php control over.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php 
	get_header(); //Don't take this out. It will break things.  If you don't want a header (and who does), just css it to death.
?>

			<div id="content" class="top-wrapper">

					<div id="inner-content" class="cf middle-wrapper gutters">
						
						<main id="main" class="cf bottom-wrapper" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">							

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							
									<?php
										// the content (as in the stuff you type into the big box on the backend)
										the_content();

								
									?>
						

							<?php endwhile; else : ?>

								

							<?php endif; ?>

						</main>

						<?php 
						
							//Uncomment get_sidebar() fer yer sidebar. Shocking, I know.
						/*
							get_sidebar(); 
						*/	
						?>

				</div>

			</div>


<?php 
	get_footer(); 
?>
