
<div class=" grid grid-cols-1 xs:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 xl:gap-4 gap-3 ">

<!-- test index copy -->
<?php if (have_posts()) : ?>
    <?php
    while (have_posts()) :
        the_post();
    ?>

        <?php get_template_part('template-parts/content', get_post_format()); ?>

    <?php endwhile; ?>

<?php endif; ?>

</div>
