<?php
/*
Template Name: articlePage
*/
get_header(); ?>


untuk post        

<?php if (have_posts()) : ?>
				<?php
				while (have_posts()) :
					the_post();
				?>

					<?php get_template_part('template-parts/content', get_post_format()); ?>

				<?php endwhile; ?>

			<?php endif; ?>

bawhilhaelfghwefpefwcavfercsyefuwfveuwfv


<?php get_footer(); ?>

