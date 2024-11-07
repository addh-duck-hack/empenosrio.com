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

<body class="custom-bg">
    <video autoplay muted loop id="background-video">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/video/background.mp4" type="video/mp4">
        Tu navegador no soporta el video en HTML5.
    </video>
    <video autoplay="true" muted="true" loop="true" playsinline="playsinline" id="background-video-movil">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/video/background_movil.mp4" type="video/mp4">
        Tu navegador no soporta el video en HTML5.
    </video>

    <!-- Sidebar -->
    <div id="mySidebar" class="sidebar">
        <span class="close-btn" onclick="closeSidebar()">&times;</span>
        <ul>
            <li><a href="<?php echo get_site_url(); ?>">Inicio</a></li>
            <li><a href="<?php echo get_site_url(); ?>/nosotros/">Nosotros</a></li>
            <li><a href="<?php echo get_site_url(); ?>/requisitos/">Requisitos</a></li>
            <li><a href="<?php echo get_site_url(); ?>/mision-vision/">Quiénes Somos</a></li>
            <li><a href="<?php echo get_site_url(); ?>/apan/">Apan</a></li>
            <li><a href="<?php echo get_site_url(); ?>/pachuca/">Pachuca</a></li>
            <li><a href="<?php echo get_site_url(); ?>/tepeji/">Tepeji</a></li>
            <li><a href="<?php echo get_site_url(); ?>/tula/">Tula</a></li>
        </ul>
    </div>

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
            <div class="container d-flex justify-content-between align-items-center icons-link">
                <div class="social-icons">
                    <div class="col-auto">
                        <a href="javascript:void(0)" onclick="openSidebar()">
                            <span class="menu-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#ffffff">
                                    <rect x="3" y="6" width="18" height="2"></rect>
                                    <rect x="3" y="11" width="18" height="2"></rect>
                                    <rect x="3" y="16" width="18" height="2"></rect>
                                </svg>
                            </span>
                            <span class="menu-text">Menú</span>
                        </a>
                    </div>
                </div>
                <div class="social-icons">
                    <div class="col-auto">
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/profile.php?id=100063655026370" target="_blank">
                            <img class="social-icons-item" src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" alt="">
                        </a>
                        <!-- YouTube -->
                        <a href="https://www.youtube.com/@Empe%C3%B1osRio-h3k" target="_blank">
                            <img class="social-icons-item" src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube.png" alt="">
                        </a>
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/empenosrioapan/profilecard/?igsh=MXNuY3R5OHVtcGp1aA==" target="_blank">
                            <img class="social-icons-item" src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="">
                        </a>
                        <!-- TikTok -->
                        <a href="https://www.tiktok.com/@empenosrio?is_from_webapp=1&sender_device=pc" target="_blank">
                            <img class="social-icons-item" src="<?php echo get_template_directory_uri(); ?>/assets/img/tik-tok.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
