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
           $campschedule = get_field('camp_schedule');
           $campcontact = get_field('camp_contact');
           ?>

            <section id="hero-camp" class="hero hero-camp " style="background: url(<?php echo esc_url($campimage["url"])?>) no-repeat center center/cover;">
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
                <h2>HARMONOGRAM OBOZU</h2>
                <div class="container">
                    <div class="inner-container schedule">
                        <h3>Program naszpikowany atrakcjami</h3>
                        <p>Nasze trasy dobieramy tak, by cieszyły oko i rozwijały umiejętności (wymagana bardzo dobra umiejętność jazdy):</p>
                        <ul>
                            <li>Velo Czorsztyn & Velo Dunajec: najpiękniejsze ścieżki rowerowe w tej części Europy.</li>
                            <li>Warsztaty techniczne: nauczymy Twoje dziecko, jak zadbać o własny sprzęt.</li>
                            <li>Zakopane: regeneracja i zwiedzanie stolicy Tatr.</li>
                            <li>Pontonowy Spływ Dunajcem: potężna dawka adrenaliny w bezpiecznym wydaniu.</li>
                            <li> Integracja offline: Ogniska, gry terenowe i wielka niespodzianka dla każdego uczestnika!</li>
                        </ul>
                    </div>
                    <div class="inner-container schedule">
                        <h3>Dlaczego warto wybrać nasz obóz?</h3>
                        <p>Bo to nie jest zwykły obóz rowerowy. To jest obóz, który zmienia życie! Twoje dziecko nie tylko nauczy się jeździć lepiej, ale przede wszystkim pozna nowych przyjaciół, odkryje pasję do sportu i spędzi niezapomniane chwile w otoczeniu natury.</p>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact-camp" class="contact contact-image" style="background: url(<?php echo esc_url($campcontact["url"])?>) no-repeat center center/cover;">
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