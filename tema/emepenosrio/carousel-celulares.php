<?php
//Querys para los diferentes sucursales
$apan_id = get_cat_ID('Apan');
$pachuca_id = get_cat_ID('Pachuca');
$tepeji_id = get_cat_ID('Tepeji');
$tula_id = get_cat_ID('Tula');
$principal_id = get_cat_ID('Sucursales');

$argsApan = array(
  'category__and' => array($apan_id, $principal_id),
  'posts_per_page' => 1
);
$queryApan = new WP_Query( $argsApan );

$argsPachuca = array(
    'category__and' => array($pachuca_id, $principal_id),
    'posts_per_page' => 1
);
$queryPachuca = new WP_Query( $argsPachuca );

$argsTepeji = array(
  'category__and' => array($tepeji_id, $principal_id),
  'posts_per_page' => 1
);
$queryTepeji = new WP_Query( $argsTepeji );

$argsTula = array(
  'category__and' => array($tula_id, $principal_id),
  'posts_per_page' => 1
);
$queryTula = new WP_Query( $argsTula );
?>

<h2 class="sucursales-title">S U C U R S A L E S</h2>
<div id="carouselCelulares" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselCelulares" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselCelulares" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselCelulares" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselCelulares" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  
  <div class="carousel-inner">
  <?php if ( $queryApan->have_posts() ) : ?>
      <?php while ( $queryApan->have_posts() ) : $queryApan->the_post(); ?>
        <div class="carousel-item active">
          <?php
          $thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
          if ( $thumbnail_url ) : ?>
            <a href="<?php echo get_site_url(); ?>/apan/">
              <img src="<?php echo esc_url( $thumbnail_url ); ?>" class="d-block w-100" alt="Banner Apan">
            </a>          
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <?php if ( $queryPachuca->have_posts() ) : ?>
      <?php while ( $queryPachuca->have_posts() ) : $queryPachuca->the_post(); ?>
        <div class="carousel-item">
          <?php
          $thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
          if ( $thumbnail_url ) : ?>
            <a href="<?php echo get_site_url(); ?>/pachuca/">
              <img src="<?php echo esc_url( $thumbnail_url ); ?>" class="d-block w-100" alt="Banner Pachuca">
            </a>          
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <?php if ( $queryTepeji->have_posts() ) : ?>
      <?php while ( $queryTepeji->have_posts() ) : $queryTepeji->the_post(); ?>
        <div class="carousel-item">
          <?php
          $thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
          if ( $thumbnail_url ) : ?>
            <a href="<?php echo get_site_url(); ?>/tepeji/">
              <img src="<?php echo esc_url( $thumbnail_url ); ?>" class="d-block w-100" alt="Banner Tepeji">
            </a>          
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <?php if ( $queryTula->have_posts() ) : ?>
      <?php while ( $queryTula->have_posts() ) : $queryTula->the_post(); ?>
        <div class="carousel-item">
          <?php
          $thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
          if ( $thumbnail_url ) : ?>
            <a href="<?php echo get_site_url(); ?>/tula/">
              <img src="<?php echo esc_url( $thumbnail_url ); ?>" class="d-block w-100" alt="Banner Tula">
            </a>          
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselCelulares" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselCelulares" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
