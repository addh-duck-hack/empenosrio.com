<?php get_header(); ?>
<main class="wrap">
  <section class="">
      <article class="article-full">
        <div class="page-header">
          <h1><?php the_title(); ?></h1>
        </div>
        <?php the_content(); ?>
      </article>
  </section>
</main>
<?php get_footer(); ?>