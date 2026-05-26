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

    
            <section id="hero-about" class="hero hero-about " style="background: url(<?php echo esc_url( $aboutheroimg['url'] ?? '' ); ?>) no-repeat center center/cover;" role="img" aria-label="Hero sekcja - Poznaj nasz zespół">
                <div class="hero-content">
                    <h1>POZNAJ NASZ ZESPÓŁ</h1>
                </div>
            </section>

            <!-- Mission Section -->
            <section id="mission" class="container-primary">
                <h2> Nasza misja </h2>
                <div class="container">
                    <p>Naszym celem jest promowanie aktywności fizycznej dla dzieci, młodzieży i dorosłych poprzez jazdę na rowerze, wycieczki rowerowe oraz wspólne aktywności na świeżym powietrzu. Chcemy zachęcać do zdrowego i aktywnego stylu życia poprzez sport i budowanie rowerowej społeczności.</p>
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
                        <h2> Dlaczego warto jeździć na rowerze? </h2>
                        <p>Jazda na rowerze to doskonały sposób na rozwój, aktywność fizyczną i dobrą zabawę na świeżym powietrzu. Organizowane przez nas zajęcia rowerowe dla dzieci oraz wydarzenia sportowe pomagają budować pewność siebie, relacje i pasję do aktywnego stylu życia.</p>
                        <div class="button-container">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('wydarzenia'))); ?>" class="btn btn-secondary">Zobacz wydarzenia</a>
                        </div>
                    </div>
                    <div class="image-container about-image " style="background: url(<?php echo esc_url( $aboutimg['url'] ?? '' ); ?>) no-repeat center center/cover;" role="img" aria-label="Obraz o nas - Rudzka Akademia Rowerowa"></div>
                </div>
            </div>

            <!-- Team Section -->
            <section id="team" class="team container-primary">
                <h2>NASZ ZESPÓŁ</h2>
                <?php get_template_part('template-parts/instructor'); ?>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="contact" style="background: url(<?php echo esc_url( $aboutcontactimg['url'] ?? '' ); ?>) no-repeat center center/cover;" role="img" aria-label="Sekcja kontaktu - Skontaktuj się z nami">
                <div class="contact-content">
                    <h2>NADAL MASZ WĄTPLIWOŚCI?</h2>
                    <p>Skontaktuj się z nami, jeśli masz pytania.</p>
                <div class="button-container">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('kontakt'))); ?>" class="btn btn-primary">Zadzwoń do nas</a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('kontakt')) . '#contact-form'); ?>" class="btn btn-light">Wyślij wiadomość</a>
                </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>