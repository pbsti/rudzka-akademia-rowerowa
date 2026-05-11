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
                        <div class="image-container events-image" style="background: url(<?php echo esc_url($eventsimage["url"])?>) no-repeat center center/cover;"></div>
                        <div class="inner-container">
                            <h2>OUR EVENTS</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu.</p>
                            <div class="button-container">
                                <a href="about.html" class="btn btn-secondary">REGISTER</a>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- News Section -->
            <?php get_template_part('template-parts/home'); ?>

            <!-- Summer Camps Section -->
                <section id="summer-camps" class="summer-camps container-primary">
                    <h2>SUMMER CAMPS</h2>
                    <div class="container-camps">
                        <div class="inner-container">
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu.</p>
                        <div class="image-container camps-image" style="background: url(<?php echo esc_url($campimg["url"])?>) no-repeat center center/cover;">
                            <p>Experience In Cycling</p>
                        </div>
                            <div class="button-container">
                                <a href="about.html" class="btn btn-secondary">REGISTER</a>
                            </div>
                        </div>
                    </div>
                </section>

            <!--Calendar Section-->
                <section id="calendar" class="calendar container-secondary">
                    <h2> EVENT CALENDAR AND REGISTRATION</h2>
                    <p>View our upcoming events in the calendar below.</p>
                    <div class="calendar-content">
                        <?php echo do_shortcode('[simple_calendar id="1"]'); ?>
                    </div>
                </section>

            <!-- Contact Section -->
                <section id="contact" class="contact" style="background: url(<?php echo esc_url($contactimgevents["url"])?>) no-repeat center center/cover;">
                    <div class="contact-content">
                    <h2>Still feel unsure of what to pick?</h2>
                    <p>You are always welcome to contact us and find out together how to begin your cycling journey.</p>
                    <div class="button-container">
                        <a href="contact.html" class="btn btn-primary">Zadzwoń do nas</a>
                        <a href="contact.html" class="btn btn-light">Wyślij wiadomość</a>
                    </div>
                    </div>
                </section>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>