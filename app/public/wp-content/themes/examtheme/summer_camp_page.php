<?php
/*
Template Name: Summer Camp Page
*/
?>

<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while (have_posts()): the_post()?>
           <?php
           $campimage = get_field('camp_image');
           $camptitle = get_field('camp_title');
           $campcontact = get_field('camp_contact');
           $dateone = get_field('date_one');
           $datetwo = get_field('date_two');
           $price = get_field('price');
           $detailsvip = get_field('details_vip');
           $detailsprogram = get_field('details_program');
           ?>

            <section id="hero-camp" class="hero hero-camp " style="background: url(<?php echo esc_url( $campimage['url'] ?? '' ); ?>) no-repeat center center/cover;" role="img" aria-label="Hero sekcja - Obóz Rowerowy VIP Pieniny">
                <div class="hero-content camps">
                    <h1><?php echo esc_html($camptitle); ?></h1>
                </div>
            </section>

            <!-- Camp Description Section -->
            <section id="camp-description" class="container-secondary camps">
                <h2>WAKACJE W STANDARDZIE VIP DLA TWOJEGO DZIECKA!</h2>
                <h3>Szukasz wakacji, które odciągną Twoje dziecko od ekranu telefonu i zaszczepią w nim miłość do sportu? </h3>
                <p>W Rudzkiej Akademii Rowerowej wierzymy, że najlepsza nauka odbywa się przez zabawę w gronie rówieśników. Nasz obóz to nie tylko kilometry na liczniku to przede wszystkim szkoła charakteru, techniki i bezpieczeństwa na drodze.</p>
            </section>

            <!-- Schedule Section -->
            <section id="schedule" class="container-primary">
                <h2>Informacje i harmonogram</h2>
                <div class="container schedule-container">
                    <div class="inner-container schedule">
                        <h3>Co wyróżnia standard VIP?</h3>
                        <p>Nie jesteśmy masową kolonią. Stawiamy na jakość i relacje:</p>
                        <?php if($detailsvip): ?>
                            <?php $lines=explode("\n", $detailsvip); ?>
                            <ul>
                                <?php foreach($lines as $line): ?>
                                    <li><?php echo esc_html($line); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?> 
                    </div>
                   <div class="inner-container schedule">
                        <h3>Program naszpikowany atrakcjami</h3>
                        <p>Nasze trasy dobieramy tak, by cieszyły oko i rozwijały umiejętności (wymagana bardzo dobra umiejętność jazdy):</p>
                        <?php if($detailsprogram): ?>
                            <?php $lines=explode("\n", $detailsprogram); ?>
                            <ul>
                                <?php foreach($lines as $line): ?>
                                    <li><?php echo esc_html($line); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        </ul>
                    </div>
                    <div class="inner-container schedule">
                        <h3>Wybierz swój termin:</h3>
                        <ul>
                            <li><b>Turnus 1:</b> <?php echo esc_html($dateone); ?></li>
                            <li><b>Turnus 2:</b> <?php echo esc_html($datetwo); ?></li>
                        </ul>
                        <p><b>Inwestycja w pasję Twojego dziecka:</b> <?php echo esc_html($price); ?></p>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact-camp" class="contact contact-image" style="background: url(<?php echo esc_url( $campcontact['url'] ?? '' ); ?>) no-repeat center center/cover;" role="img" aria-label="Sekcja kontaktu - Pytania o obóz letni">
                <div class="contact-content">
                    <h2>MASZ PYTANIA?</h2>
                    <p>Skontaktuj się z nami, jeśli chcesz dowiedzieć się więcej o obozie letnim.</p>
                    <div class="button-container">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('kontakt'))); ?>" class="btn btn-primary">Zadzwoń do nas</a>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('kontakt')) . '#contact-form'); ?>" class="btn btn-light">Wyślij wiadomość</a>
                    </div>
                </div>
            </section>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>