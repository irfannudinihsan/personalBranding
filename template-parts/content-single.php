<article class="bg-white-700 dark:bg-slate-800 dark:shadow-slate-950  shadow-2xl p-8 mt-28 mb-20 lg:mx-48 xl:mx-80 2xl:mx-[400px] shadow-slate-200 rounded-xl" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header mb-4">

		<?php the_post_thumbnail('medium rounded-lg mb-4 md:h-48 lg:h-64 object-cover') ?>


		<?php the_title(sprintf('<h2 class="entry-title text-lg  dark:text-white md:text-2xl font-semibold text-slate-700 leading-tight "><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');



		?>

		<?php

		$categories_list = get_the_category_list(' ');

		if ($categories_list) {
			echo '<p class=" font-poppins font-medium rounded-md px-2 mt-2 py-1 w-fit bg-blue-50 text-blue-400 ">' . $categories_list . '</p>';
		}
		?>


	</header>

	<div class="entry-content text-slate-400 text-sm">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'tailpress') . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __('Page', 'tailpress') . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			)
		);
		?>
	</div>

</article>