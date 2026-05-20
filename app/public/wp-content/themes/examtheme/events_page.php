<?php
/*
Template Name: Events and Registration Page
*/
?>

<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while (have_posts()): the_post()?>
           <?php
           $eventsimage = get_field('events_image');
           $campimg = get_field('camp_image');
           $contactimgevents = get_field('events_contact');               
           ?>

        <div class="container-primary">
                    <div class="split-container">
                        <div class="image-container events-image" style="background: url(<?php echo esc_url( $eventsimage['url'] ?? '' ); ?>) no-repeat center center/cover;" role="img" aria-label="Aktywnie razem - Wydarzenia rowerowe"></div>
                        <div class="inner-container events-intro">
                            <h2>AKTYWNIE RAZEM</h2>
                            <p>Sprawdź nasze nadchodzące wyjazdy rowerowe oraz letnie obozy pełne aktywności, nauki i świetnej zabawy. Dołącz do naszej społeczności i spędź czas aktywnie razem z nami. </p>
                            <div class="button-container">
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('events-page')) . '#calendar'); ?>" class="btn btn-secondary">ZOBACZ KALENDARZ</a>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- News Section -->
            <?php get_template_part('template-parts/home'); ?>

            <!-- Summer Camps Section -->
                <section id="summer-camps" class="summer-camps container-primary">
                    <h2>LETTNIE OBOZY</h2>
                    <div class="container-camps">
                        <div class="inner-container">
                            <p>Sprawdź nasze nadchodzące wyjazdy rowerowe oraz letnie obozy pełne aktywności, nauki i świetnej zabawy. Dołącz do naszej społeczności i spędź czas aktywnie razem z nami. </p>
                        <div class="image-container camps-image" style="background: url(<?php echo esc_url( $campimg['url'] ?? '' ); ?>) no-repeat center center/cover;" role="img" aria-label="Letnie obozy - Wakacje w standardzie VIP">
                            <p>Wakacje w standardzie VIP dla Twojego dziecka!</p>
                        </div>
                            <div class="button-container">
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('events-page')) . '#calendar'); ?>" class="btn btn-secondary">Zobacz kalendarz</a>
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('summer-camp'))); ?>" class="btn btn-primary">Zobacz obóz letni</a>
                            </div>
                        </div>
                    </div>
                </section>

            <!--Calendar Section-->
                <section id="calendar" class="calendar container-secondary calendar-section">
                    <h2>Kalendarz</h2>
                    <p>Zobacz nasze nadchodzące wyjazdy w poniższym kalendarzu.</p>
                    <p>Aby zapisać się na obóz letni lub zajęcia, prosimy o przesłanie maila na adres <a href="mailto:biurouksrar@gmail.com">biurouksrar@gmail.com</a></p>
                    <div class="calendar-content">
                        <?php echo do_shortcode('[simple_calendar id="132"]'); ?>
                    </div>
                    
                </section>

            <!-- Contact Section -->
                <section id="contact" class="contact" style="background: url(<?php echo esc_url( $contactimgevents['url'] ?? '' ); ?>) no-repeat center center/cover;" role="img" aria-label="Sekcja kontaktu - Skontaktuj się z nami">
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