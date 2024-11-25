<?php
get_header();
?>

<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article>
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
            <?php edit_post_link(); ?>
        </article>

    <?php endwhile; ?>

        <nav>
            <div class="nav-previous"><?php previous_posts_link( '← Previous' ); ?></div>
            <div class="nav-next"><?php next_posts_link( 'Next →' ); ?></div>
        </nav>

    <?php else: ?>
        <p>No posts found. :(</p>
    <?php endif; ?>
</main>

<?php
get_footer();
