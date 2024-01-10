<article class="bg-white-700 dark:bg-slate-800 dark:shadow-slate-950  shadow-2xl p-8 mt-28 mb-20 lg:mx-48 xl:mx-80 2xl:mx-[400px] shadow-slate-200 rounded-xl" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header mb-4">
	<?php the_post_thumbnail('medium rounded-lg mb-4  object-cover') ?>
		<?php the_title( sprintf( '<h1 class="entry-title text-lg md:text-3xl dark:text-white font-normal leading-tight mb-1"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<time class="text-sm text-slate-500" datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-gray-700"><?php echo get_the_date(); ?></time>
	</header>

	<div class="entry-content text-slate-600 text-sm">

		<?php the_content(); ?>

		<?php
			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tailpress' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tailpress' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
		?>
	</div>

</article>
