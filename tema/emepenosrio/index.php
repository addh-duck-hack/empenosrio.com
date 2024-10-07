<?php get_header(); ?>
<main>
    <div class="hero">
        <h1>Welcome to my blog!</h1>
        <p>Here, you'll find posts on a variety of topics, including programming, web development, and more.</p>
    </div>

    <div class="my-posts">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <article class="article-loop">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
                    <h2><?php the_title(); ?></h2>
                    <div class="flex-info">
                        <p>By: <?php the_author(); ?></p>
                        <p><?php the_time('F j, Y'); ?></p>
                    </div>
                    <?php the_excerpt(); ?>
                </article>
            </a>
        <?php endwhile; else : ?>
            <article>
                <p>Sorry, no posts were found!</p>
            </article>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>