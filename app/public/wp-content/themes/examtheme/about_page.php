<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while (have_posts()): the_post()?>
           <?php
           $aboutheroimg = get_field('about_image_hero');
           $aboutimg = get_field('about_image');
           $teamimg1 = get_field('team_1');
           $teamimg2 = get_field('team_2');
           $aboutcontactimg = get_field('about_contact');
                             
           ?>

    
            <section id="hero-about" class="hero hero-about " style="background: url(<?php echo esc_url( $aboutheroimg['url'] ?? '' ); ?>) no-repeat center center/cover;">
                <div class="hero-content">
                    <h1>POZNAJ NASZ ZESPÓŁ</h1>
                </div>
            </section>

            <!-- Mission Section -->
            <section id="mission" class="container-primary">
                <h2> Nasza misja </h2>
                <div class="container">
                    <p>Jednym z głównych celów naszej organizacji jest aktywizowanie dzieci, młodzieży, jak również dorosłych poprzez jazdę na rowerze oraz turystykę rowerową i pieszą. Zachęcenie wszystkich do zmiany trybu życia, działań prozdrowotnych.</p>
                </div>
                <div class="container">
                    <div class="inner-container facts"><i class="fa-solid fa-medal" style="font-size: 4rem;"></i><p class="bold">DOŚWIADCZENIE</p></div>
                    <div class="inner-container facts"><i class="fa-solid fa-clock" style="font-size: 4rem;"></i><p class="bold">CZAS</p></div>
                    <div class="inner-container facts"><i class="fa-solid fa-star" style="font-size: 4rem;"></i><p class="bold">SATYSFAKCJA</p></div>
                </div>
            </section>

            <div class="container-secondary">
                <div class="split-container">
                    <div class="inner-container about-events">
                        <p>Jazda na rowerze to świetny sposób na aktywność, zdrowie i dobrą zabawę na świeżym powietrzu. A wszystko staje się jeszcze lepsze, gdy możemy dzielić te chwile razem podczas naszych zajęć i wydarzeń rowerowych.</p>
                        <div class="button-container">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('events-page'))); ?>" class="btn btn-secondary">Zobacz wydarzenia</a>
                        </div>
                    </div>
                    <div class="image-container about-image " style="background: url(<?php echo esc_url( $aboutimg['url'] ?? '' ); ?>) no-repeat center center/cover;"></div>
                </div>
            </div>

            <!-- Team Section -->
            <section id="team" class="team container-primary">
                <h2>NASZ ZESPÓŁ</h2>
                <div class="container">
                    <div class="image-container team-card1">
                        <div class= "team-card-inner t1">
                            <div class="t1_front" style="background: url(<?php echo esc_url( $teamimg1['url'] ?? '' ); ?>) no-repeat center center/cover;"></div>
                            <div class= "t1_back">
                                <h3> Pan Bartek</h3>
                                <p>Założyciel i główny instruktor RAR. Pasjonat rowerów, który od lat dzieli się swoją wiedzą i doświadczeniem z młodymi rowerzystami.</p>
                            </div>
                        </div>
                    </div>

                    <div class="image-container t2_front" style="background: url(<?php echo esc_url( $teamimg2['url'] ?? '' ); ?>) no-repeat center center/cover;"><p>Pan Marcin</p></div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="contact" style="background: url(<?php echo esc_url( $aboutcontactimg['url'] ?? '' ); ?>) no-repeat center center/cover;">
                <div class="contact-content">
                    <h2>“NADAL MASZ WĄTPLIWOŚCI?”</h2>
                    <p>Skontaktuj się z nami, jeśli masz pytania.</p>
                <div class="button-container">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact-page'))); ?>" class="btn btn-primary">Zadzwoń do nas</a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact-page')) . '#contact-form'); ?>" class="btn btn-light">Wyślij wiadomość</a>
                </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>