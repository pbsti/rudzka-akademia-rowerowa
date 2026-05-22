<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo esc_attr( is_home() || is_front_page() ? 'Rudzka Akademia Rowerowa - szkoła jazdy na rowerze dla dzieci, młodzieży i dorosłych. Kursy, treningi i obozy letnie.' : wp_trim_words( get_the_excerpt(), 20, '...' ) ); ?>">
    <meta name="keywords" content="akademia rowerowa, jazda na rowerze, kursy rowerowe, szkoła jazdy, obozy letnie, Rudzka">
    <meta name="theme-color" content="#9AC31B">
    <meta name="robots" content="index, follow">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@600;700;800&family=IBM+Plex+Sans:wght@400;500;600&display=swap" rel="stylesheet" />
    <title><?php echo esc_html( get_bloginfo( 'name' ) ); ?></title>
    <?php wp_head()?>
</head>

<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<?php $logo_url = get_stylesheet_directory_uri() . '/original/images/logo.png'; ?>
<header class="nav-header">
    <div class="nav-inner">
        <a class="nav-branding desktop-only" href="<?php echo esc_url(home_url('/')); ?>">
            <img class="nav-logo" src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> logo" />
        </a>

        <button class="nav-toggle" aria-expanded="false" aria-controls="primary-menu" aria-label="Open menu">
            <i class="fas fa-bars" aria-hidden="true"></i>
            <span class="screen-reader-text">Toggle navigation</span>
        </button>

        <nav class="navigation-area" aria-label="Primary navigation">
            <div class="mobile-nav-header mobile-only">
                <a class="nav-branding mobile-branding" href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="nav-logo mobile-logo" src="<?php echo esc_url( $logo_url ); ?>" alt="<?php bloginfo('name'); ?> logo" />
                </a>
            </div>
            <?php if ( has_nav_menu('primary') ) : ?>
                <?php wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'nav-menu',
                    'menu_id' => 'primary-menu',
                    'fallback_cb' => false,
                )); ?>
            <?php else : ?>
                <ul class="nav-menu" id="primary-menu">
                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('strona-glowna'))); ?>">Strona główna</a></li>
                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('o-nas'))); ?>">O nas</a></li>
                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('wydarzenia'))); ?>">Wydarzenia</a></li>
                    <a class="btn-primary" href="<?php echo esc_url(get_permalink(get_page_by_path('kontakt'))); ?>">kontakt</a>
                </ul>
            <?php endif; ?>
            <div class="mobile-social mobile-only">
                <a href="https://www.instagram.com/rudzka_akademia_rowerowa/" class="social-link" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram" style="font-size: 1.5rem;" aria-hidden="true"></i>
                    <span class="screen-reader-text">Instagram</span>
                </a>
                <a href="https://www.tiktok.com/@rudzkaakademiarow" class="social-link" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-tiktok" style="font-size: 1.5rem;" aria-hidden="true"></i>
                    <span class="screen-reader-text">TikTok</span>
                </a>
                <a href="https://www.facebook.com/RudzkaAkademiaRowerowa" class="social-link" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook-f" style="font-size: 1.5rem;" aria-hidden="true"></i>
                    <span class="screen-reader-text">Facebook</span>
                </a>
            </div>
        </nav>

        <div class="nav-social desktop-only">
            <a href="https://www.instagram.com/rudzka_akademia_rowerowa/" class="social-link" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-instagram" style="font-size: 1.5rem;" aria-hidden="true"></i>
                <span class="screen-reader-text">Instagram</span>
            </a>
            <a href="https://www.tiktok.com/@rudzkaakademiarow" class="social-link" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-tiktok" style="font-size: 1.5rem;" aria-hidden="true"></i>
                <span class="screen-reader-text">TikTok</span>
            </a>
            <a href="https://www.facebook.com/RudzkaAkademiaRowerowa" class="social-link" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-facebook-f" style="font-size: 1.5rem;" aria-hidden="true"></i>
                <span class="screen-reader-text">Facebook</span>
            </a>
        </div>
    </div>
</header>

