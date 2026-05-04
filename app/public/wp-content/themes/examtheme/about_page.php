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

    
            <section id="hero-about" class="hero hero-about " style="background: url(<?php echo esc_url($aboutheroimg["url"])?>) no-repeat center center/cover;">
                <div class="hero-content">
                    <h1>MEET THE TEAM</h1>
                </div>
            </section>

            <!-- Mission Section -->
            <section id="mission" class="container-primary">
                <h2>OUR MISSION</h2>
                <div class="container">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu.</p>
                </div>
                <div class="container">
                    <div class="inner-container facts"><i class="fa-solid fa-medal" style="font-size: 4rem;"></i><p class="bold">EXPERIENCE</p></div>
                    <div class="inner-container facts"><i class="fa-solid fa-clock" style="font-size: 4rem;"></i><p class="bold">TIME</p></div>
                    <div class="inner-container facts"><i class="fa-solid fa-star" style="font-size: 4rem;"></i><p class="bold">SATISFACTION</p></div>
                </div>
            </section>

            <div class="container-secondary">
                <div class="split-container">
                    <div class="inner-container">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu.</p>
                        <div class="button-container">
                            <a href="events.html" class="btn btn-secondary">APPLY NOW</a>
                        </div>
                    </div>
                    <div class="image-container about-image " style="background: url(<?php echo esc_url($aboutimg["url"])?>) no-repeat center center/cover;"></div>
                </div>
            </div>

            <!-- Team Section -->
            <section id="team" class="team container-primary">
                <h2>OUR TEAM</h2>
                <div class="container">
                <div class="image-container team-image-1" style="background: url(<?php echo esc_url($teamimg1["url"])?>) no-repeat center center/cover;"><p>John Doe</p></div>
                <div class="image-container team-image-2" style="background: url(<?php echo esc_url($teamimg2["url"])?>) no-repeat center center/cover;"><p>Jane Smith</p></div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="contact" style="background: url(<?php echo esc_url($aboutcontactimg["url"])?>) no-repeat center center/cover;">
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