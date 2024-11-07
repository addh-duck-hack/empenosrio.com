<?php
//Querys para los diferentes sucursales
$args = array(
  'category_name' => 'Recuadros2',
  'posts_per_page' => 4
);
$query = new WP_Query($args);
?>

<section class="image-grid-section">
  <div class="container">
    <div class="row">
      <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
          <div class="col-6 col-md-3">
            <div class="content-square">
              <a href="<?php $content = wp_strip_all_tags(get_the_content()); echo $content;?>">
                <?php
                $thumbnail_url= get_the_post_thumbnail_url( get_the_ID(), 'full' );
                if ( $thumbnail_url ) : ?>
                  <img src="<?php echo esc_url( $thumbnail_url ); ?>" class="img-fluid rounded-image" alt="Apan">
                <?php endif; ?>
              </a>
          </div>
          <h1 class="title-product"><?php echo get_the_title(); ?></h1>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
</section>