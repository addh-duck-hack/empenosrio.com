<?php
/*
Template Name: Sucursal Tepeji
*/
?>

<?php
//Querys para los diferentes sucursales
$tepeji_id = get_cat_ID('Tepeji');
$interno_id = get_cat_ID('InternoScroll');
$seccion1_id = get_cat_ID('InternoRecuadros1');
$seccion2_id = get_cat_ID('InternoRecuadros2');

$carouselPrincipal = array(
  'category__and' => array($tepeji_id, $interno_id),
  'posts_per_page' => 4
);
$queryPrincipal = new WP_Query( $carouselPrincipal );

//Querys para los recuadros de la primera seccion
$argsSeccion1 = array(
  'category__and' => array($tepeji_id, $seccion1_id),
  'posts_per_page' => 6
);
$querySeccion1 = new WP_Query($argsSeccion1);
//Querys para los recuadros de la segunda seccion
$argsSeccion2 = array(
  'category__and' => array($tepeji_id, $seccion2_id),
  'posts_per_page' => 4
);
$querySeccion2 = new WP_Query($argsSeccion2);
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, user-escalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
	<meta name="description" content="Latitud Megalópolis&nbsp;Periodismo con experiencia, seriedad y credibilidad" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css?004">
    <title><?php bloginfo('name'); ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body class="custom-bg-tepeji">
    <!-- Header -->
    <header class="site-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                  <a href="<?php echo get_site_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo3.png" alt="Logo Empenos Rios" class="logo">
                  </a>
                </div>
            </div>
            <div class="row justify-content-end social-icons">
                <div class="col-auto">
                    <a href="https://www.facebook.com/empenosrio.tepeji.3" target="_blank">
                      <img class="social-icons-item" src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" alt="">
                    </a>
                    <a href="https://wa.me/5215584588820" target="_blank">
                      <img class="social-icons-item" src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp.png" alt="">
                    </a>
                    <a href="https://www.tiktok.com/@empenosrio?is_from_webapp=1&sender_device=pc" target="_blank">
                      <img class="social-icons-item" src="<?php echo get_template_directory_uri(); ?>/assets/img/tik-tok.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </header>

<!-- Carousel principal -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  
  <div class="carousel-inner">
    <?php if ( $queryPrincipal->have_posts() ) : ?>
      <?php $is_first = true; ?>
      <?php while ( $queryPrincipal->have_posts() ) : $queryPrincipal->the_post(); ?>
        <div class="carousel-item <?php echo $is_first ? 'active' : ''; ?>">
          <?php $is_first = false; ?>
          <?php
          $thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
          if ( $thumbnail_url ) : ?>
            <a href="#">
              <img src="<?php echo esc_url( $thumbnail_url ); ?>" class="d-block w-100" alt="Banner Apan">
            </a>          
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>  
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Seccion1 -->
<section class="image-grid-section">
  <div class="container">
    <div class="row">
      <?php if ( $querySeccion1->have_posts() ) : ?>
        <?php while ( $querySeccion1->have_posts() ) : $querySeccion1->the_post(); ?>
          <div class="col-6 col-md-2">
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

<?php
include('seccion-video.php');
include('banner.php');
?>

<!-- Seccion2 -->
<section class="image-grid-section">
  <div class="container">
    <div class="row">
      <?php if ( $querySeccion2->have_posts() ) : ?>
        <?php while ( $querySeccion2->have_posts() ) : $querySeccion2->the_post(); ?>
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

<?php
include('carousel-celulares.php');
?>

<!-- Footer -->
<footer class="bg-dark text-light p-4 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p class="label-footer">Empeños Rio Tepeji</p>
                    <p class="label-footer">Calle Ignacio Comonfort #5, Col. El Eden, Tepeji del Rio</p>
                    <p class="label-footer"><a href="tel:+527716099206">Telefono: 771-609-9206</a></p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row justify-content-center social-icons">
                        <div class="col-auto">
                          <a href="https://www.facebook.com/empenosrio.tepeji.3" target="_blank">
                            <img class="social-icons-item" src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" alt="">
                          </a>
                          <a href="https://wa.me/5215584588820" target="_blank">
                            <img class="social-icons-item" src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp.png" alt="">
                          </a>
                          <a href="https://www.tiktok.com/@empenosrio?is_from_webapp=1&sender_device=pc" target="_blank">
                            <img class="social-icons-item" src="<?php echo get_template_directory_uri(); ?>/assets/img/tik-tok.png" alt="">
                          </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row justify-content-center">
              <div class="col-12 link-duck">
                <a href="https://mx.duck-hack.cloud">&copy;<span id="current-year"></span> - Designed by Duck-Hack</a>
              </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <!-- Bootstrap y Scripts personalizados -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document.getElementById("current-year").textContent = new Date().getFullYear();
    </script>
  </body>
</html>