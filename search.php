<?php get_header(); ?>



<?php if (have_posts()) : ?>

    <h1 id="pageTitle">Here's what we've found:</h1>


    <?php while (have_posts()) : the_post(); ?>


        <article class="post group" <?php post_class() ?> id="post-<?php the_ID(); ?>">

            <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

            <figure class="thumb"><?php the_post_thumbnail('thumb'); ?></figure>

            <?php $query = new WP_Query(array('post_type' => 'post', 'post_
count' => '5'));

            while ($query->have_posts()) : $query->the_post();
                ?>

                <?php the_excerpt(); ?>

        <?php endwhile; ?>


        </article>

    <?php endwhile; ?>

<?php else : ?>

    <?php get_template_part('templates/content', 'none'); ?>

<?php endif; ?>

<br/>



<?php get_sidebar(); ?>



<?php get_footer(); ?>