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
            <section id="hero" class="hero hero-home" style="background: url(<?php echo esc_url($heroimage["url"])?>) no-repeat center center/cover;">
                <div class="hero-content">
                <h1>Rudzka Akademia Rowerowa</h1>
                <p>For everyone who wants to have a good time while cycling!</p>
                    <div class="button-container">
                        <a href="about-page.php" class="btn btn-secondary">JOIN US</a>
                    </div>
                </div>
            </section>

            <!-- About Us Section -->
            <section id="about" class="about container-secondary">
                <h2>WHY CHOOSE US?</h2>
                <div class="container">
                    <div class="inner-container"> <i class="fa-solid fa-bicycle" style="font-size: 4rem;"></i> <p>Cycling for everyone</p></div>
                    <div class="inner-container"> <i class="fa-solid fa-user-check" style="font-size: 4rem;"></i> <p>Over 10 years experience</p></div>
                    <div class="inner-container"> <i class="fa-solid fa-apple-whole" style="font-size: 4rem;"></i> <p>Advice on nutrition</p></div>
                </div>
                <a href="about-page.php" class="btn btn-secondary">Dowiedz się więcej</a>
            </section>

            <!-- Events Section -->
            <section id="events" class="events container-primary">
                <h2>EVENTS</h2>
                <div class="container">
                    <div class="image-container event-image-1 " style="background: url(<?php echo esc_url($eventimagechildren["url"])?>) no-repeat center center/cover;"><p>Children/Youth</p></div>
                    <div class="image-container event-image-2" style="background: url(<?php echo esc_url($eventimageadults["url"])?>) no-repeat center center/cover;"><p>Adults</p></div>
                </div>
                <a href="events.php" class="btn btn-secondary">Dołącz do nas</a>
            </section>

            <!-- Testimonials Section -->
            <section id="testimonials" class="testimonials container-secondary">
                <h2>WHAT PEOPLE SAY</h2>
                <?php get_template_part('template-parts/index', 'testimonial'); ?>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="contact contact-image" style="background: url(<?php echo esc_url($contactimage["url"])?>) no-repeat center center/cover;">
                <div class="contact-content">
                    <h2>Still feel unsure of what to pick?</h2>
                    <p>You are always welcome to contact us and find out together how to begin your cycling journey.</p>
                    <div class="button-container">
                        <a href="contact.php" class="btn btn-primary">Zadzwoń do nas</a>
                        <a href="contact.php" class="btn btn-light">Wyślij wiadomość</a>
                    </div>
                </div>
            </section>

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>