<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@600;700;800&family=IBM+Plex+Sans:wght@400;500;600&display=swap" rel="stylesheet" />
    <title><?php bloginfo('name')?> </title>
    <?php wp_head()?>
</head>

<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<header class="site-header">
    <div class="header-inner">
        <a class="site-branding desktop-only" href="<?php echo esc_url(home_url('/')); ?>">
            <img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/original/images/logo.png" alt="<?php bloginfo('name'); ?> logo" />
        </a>

        <button class="nav-toggle" aria-expanded="false" aria-controls="primary-menu" aria-label="Open menu">
            <i class="fas fa-bars" aria-hidden="true"></i>
            <span class="screen-reader-text">Toggle navigation</span>
        </button>

        <nav class="site-navigation" aria-label="Primary navigation">
            <div class="mobile-nav-header mobile-only">
                <a class="site-branding mobile-branding" href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="site-logo mobile-logo" src="<?php echo get_template_directory_uri(); ?>/original/images/logo.png" alt="<?php bloginfo('name'); ?> logo" />
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
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="#news">News</a></li>
                    <li><a class="btn-primary" href="#contact">Contact</a></li>
                </ul>
            <?php endif; ?>
            <div class="mobile-social mobile-only">
                <a href="https://instagram.com" class="social-link" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span class="screen-reader-text">Instagram</span>
                </a>
                <a href="https://tiktok.com" class="social-link" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-tiktok" aria-hidden="true"></i>
                    <span class="screen-reader-text">TikTok</span>
                </a>
                <a href="https://facebook.com" class="social-link" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    <span class="screen-reader-text">Facebook</span>
                </a>
            </div>
        </nav>

        <div class="header-actions desktop-only">
            <a href="https://instagram.com" class="social-link" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-instagram" aria-hidden="true"></i>
                <span class="screen-reader-text">Instagram</span>
            </a>
            <a href="https://tiktok.com" class="social-link" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-tiktok" aria-hidden="true"></i>
                <span class="screen-reader-text">TikTok</span>
            </a>
            <a href="https://facebook.com" class="social-link" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                <span class="screen-reader-text">Facebook</span>
            </a>
        </div>
    </div>
</header>

