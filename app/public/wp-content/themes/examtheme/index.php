<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while (have_posts()): the_post()?>
           <?php
           $heroimage = get_field('hero_image');
           $eventimagechildren = get_field('event_image_left');
           $eventimageadults = get_field('event_image_right');
           $contactimage = get_field('contact_image');
           ?>

            <!-- Hero Section -->
            <section id="hero" class="hero hero-home" style="background: url(<?php echo esc_url( $heroimage['url'] ?? '' ); ?>) no-repeat center center/cover;" role="img" aria-label="Hero banner - Rudzka Akademia Rowerowa">
                <div class="hero-content">
                <h1>Rudzka Akademia Rowerowa</h1>
                <p>Dla wszystkich, którzy chcą dobrze się bawić podczas jazdy na rowerze!</p>
                    <div class="button-container">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('events-page'))); ?>" class="btn btn-secondary">Dołącz do nas</a>
                    </div>
                </div>
            </section>

            <!-- About Us Section -->
            <section id="about" class="about container-secondary">
                <h2>Dlaczego warto nas wybrać?</h2>
                <div class="container">
                    <div class="inner-container"> <i class="fa-solid fa-bicycle" style="font-size: 4rem;"></i> <p>Kolarstwo dla każdego</p></div>
                    <div class="inner-container"> <i class="fa-solid fa-user-check" style="font-size: 4rem;"></i> <p> Ponad 10 lat doświadczenia</p></div>
                    <div class="inner-container"> <i class="fa-solid fa-campground" style="font-size: 4rem;"></i> <p>Niezapomniane wyjazdy i obozy</p></div>
                </div>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="btn btn-secondary">Dowiedz się więcej</a>
            </section>

            <!-- Events Section -->
            <section id="events" class="events container-primary">
                <h2>Wydarzenia</h2>
                <div class="container events-homepage">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('events-page'))); ?>">
                        <div class="image-container children " style="background: url(<?php echo esc_url( $eventimagechildren['url'] ?? '' ); ?>) no-repeat center center/cover;" role="img" aria-label="Dzieci i młodzież - Wydarzenia rowerowe"><p>Dzieci / Młodzież</p></div>
                    </a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('events-page'))); ?>">
                        <div class="image-container adults" style="background: url(<?php echo esc_url( $eventimageadults['url'] ?? '' ); ?>) no-repeat center center/cover;" role="img" aria-label="Osoby dorosłe - Wydarzenia rowerowe"><p>Osoby dorosłe</p></div>
                    </a>
                </div>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('events-page'))); ?>" class="btn btn-secondary">Dołącz do nas</a>
            </section>

            <!-- Testimonials Section -->
            <section id="testimonials" class="testimonials container-secondary">
                <h2>CO MÓWIĄ NASI UCZESTNICY</h2>
                <?php get_template_part('template-parts/index', 'testimonial'); ?>
            </section>
            
            <!-- Contact Section -->
            <section id="contact" class="contact contact-image" style="background: url(<?php echo esc_url( $contactimage['url'] ?? '' ); ?>) no-repeat center center/cover;" role="img" aria-label="Sekcja kontaktu - Skontaktuj się z nami">
                <div class="contact-content">
                    <h2>NADAL MASZ WĄTPLIWOŚCI?</h2>
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