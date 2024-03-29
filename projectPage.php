<?php
/*
Template Name: projectPage
*/
get_header(); ?>

<section id="home" class="font-poppins pt-20 pb-20">

    <?php
    $args = array(
        'post_type' => 'post', 
        'posts_per_page' => -1,
    );

    $query = new WP_Query($args); ?>


<div class="container">



<div  class="grid grid-cols-1 xs:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 xl:gap-4 gap-3">

<?php  if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
    ?>

            <article class="bg-white shadow-lg hover:-translate-y-3 duration-300 ease-in-out hover:shadow-blue-100 my-4 p-5 shadow-slate-200 rounded-xl" id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
                <header class="entry-header mb-4">
                    <?php the_post_thumbnail('medium rounded-lg mb-4 md:h-48 object-cover') ?>
                    <?php the_title(sprintf('<h2 class="entry-title text-lg md:text-2xl font-normal leading-tight "><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
                    <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="text-sm text-slate-500"><?php echo get_the_date(); ?></time>
                </header>
                <?php if (is_search() || is_archive()) : ?>
                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div>
                <?php else : ?>
                    <div class="entry-content text-slate-600 text-sm">
                        <?php
                       
                        the_content(
                            sprintf(
                                __('Continue reading %s', 'tailpress'),
                                the_title('<span class="screen-reader-text">"', '"</span>', false)
                            )
                        );

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
                <?php endif; ?>
            </article>

    <?php
        endwhile;
        wp_reset_postdata();
    else :
        
        echo 'Tidak ada postingan.';
    endif;
    ?>



</div>

</div>

    





</section>

<?php get_footer(); ?>
