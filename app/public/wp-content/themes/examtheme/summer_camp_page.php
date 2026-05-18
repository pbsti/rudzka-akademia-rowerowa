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
           $campcontact = get_field('camp_contact');
           ?>

            <section id="hero-camp" class="hero hero-camp " style="background: url(<?php echo esc_url( $campimage['url'] ?? '' ); ?>) no-repeat center center/cover;">
                <div class="hero-content">
                    <h1>Obóz Rowerowy VIP Pieniny 2026: Twoje Dziecko w Świecie Pasji i Przygody!</h1>
                </div>
            </section>

            <!-- Camp Description Section -->
            <section id="camp-description" class="container-secondary camps">
                <h2>WAKACJE W STANDARDZIE VIP DLA TWOJEGO DZIECKA!</h2>
                <h3>Szukasz wakacji, które odciągną Twoje dziecko od ekranu telefonu i zaszczepią w nim miłość do sportu? </h3>
                <p>Rudzka Akademia Rowerowa zaprasza na elitarny Obóz Rowerowy VIP w samym sercu Pienin!<br><br>W Rudzkiej Akademii Rowerowej wierzymy, że najlepsza nauka odbywa się przez zabawę w gronie rówieśników. Nasz obóz to nie tylko kilometry na liczniku to przede wszystkim szkoła charakteru, techniki i bezpieczeństwa na drodze.</p>
            </section>

            <!-- Schedule Section -->
            <section id="schedule" class="container-primary">
                <h2>Informacje i harmonogram</h2>
                <div class="container schedule-container">
                    <div class="inner-container schedule">
                        <h3>Co wyróżnia standard VIP?</h3>
                        <p>Nie jesteśmy masową kolonią. Stawiamy na jakość i relacje:</p>
                        <ul>
                            <li><b>Kameralne grupy:</b> Tylko 16 uczestników na turnusie.</li>
                            <li><b>Bezpieczeństwo przede wszystkim:</b> Gwarantujemy opiekę 1 instruktora na zaledwie 4 uczestników!</li>
                            <li><b>Komfort:</b> Podróżujemy nowoczesnymi, 9-osobowymi busami.</li>
                            <li><b>Baza wypadowa:</b> Mieszkamy w urokliwej Willi Przekop w Sromowcach Wyżnych, tuż przy najpiękniejszych trasach rowerowych Polski.</li>
                        </ul>
                    </div>
                   <div class="inner-container schedule">
                        <h3>Program naszpikowany atrakcjami</h3>
                        <p>Nasze trasy dobieramy tak, by cieszyły oko i rozwijały umiejętności (wymagana bardzo dobra umiejętność jazdy):</p>
                        <ul>
                            <li><b>Velo Czorsztyn & Velo Dunajec:</b> najpiękniejsze ścieżki rowerowe w tej części Europy.</li>
                            <li><b>Warsztaty techniczne:</b> nauczymy Twoje dziecko, jak zadbać o własny sprzęt.</li>
                            <li><b>Zakopane:</b> regeneracja i zwiedzanie stolicy Tatr.</li>
                            <li><b>Pontonowy Spływ Dunajcem:</b> potężna dawka adrenaliny w bezpiecznym wydaniu.</li>
                            <li><b> Integracja offline:</b> Ogniska, gry terenowe i wielka niespodzianka dla każdego uczestnika!</li>
                        </ul>
                    </div>
                    <div class="inner-container schedule">
                        <h3>Wybierz swój termin:</h3>
                        <ul>
                            <li><b>Turnus 1:</b> 29.06.2026 do 05.07.2026 (Zostało tylko 9 miejsc!)</li>
                            <li><b>Turnus 2:</b> 20.07.2026 do 26.07.2026 (Zostało tylko 7 miejsc!)</li>
                        </ul>
                        <p><b>Inwestycja w pasję Twojego dziecka:</b> 2 599 zł</p>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact-camp" class="contact contact-image" style="background: url(<?php echo esc_url( $campcontact['url'] ?? '' ); ?>) no-repeat center center/cover;">
                <div class="contact-content">
                    <h2>“MASZ PYTANIA?”</h2>
                    <p>Skontaktuj się z nami, jeśli chcesz dowiedzieć się więcej o obozie letnim.</p>
                    <div class="button-container">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact-page'))); ?>" class="btn btn-primary">Zadzwoń do nas</a>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact-page')) . '#contact-form'); ?>" class="btn btn-light">Wyślij wiadomość</a>
                    </div>
                </div>
            </section>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>