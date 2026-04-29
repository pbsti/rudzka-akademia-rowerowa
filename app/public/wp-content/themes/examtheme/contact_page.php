<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while (have_posts()): the_post()?>
              <?php
              $Phonecontact = get_field('phone_contact');
              $EmailContact = get_field('email_contact');
              ?>
           
            <section id="contact-us" class="contact-us container-secondary">
                <h2>DO YOU HAVE ANY QUESTIONS?</h2>
                <p> We will make sure to get the answers you need as soon as possible.</p>
                <div class="container">
                    <div class="inner-container contact-icon"><i class="fa-solid fa-phone" style="font-size: 3rem;"></i><p><?php echo $Phonecontact; ?></p></div>
                    <div class="inner-container contact-icon"><i class="fa-solid fa-envelope" style="font-size: 3rem;"></i><p><?php echo $EmailContact; ?></p></div>
                </div>
            </section>

            <!-- Contact Form Section -->
            <section id="contact-form" class="contact-form container-primary">
                <h2>SEND A MESSAGE</h2>
            </section>
        
            <!-- FAQ Section --> 
            <section id="faq" class="faq container-primary">
                <h2>FREQUENTLY ASKED QUESTIONS</h2>
                <div class="faq-box">
                    <h3>Question 1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum </p>
                </div>
                <div class="faq-box">
                    <h3>Question 2</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum </p>
                </div>
                <div class="faq-box">
                    <h3>Question 3</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum </p>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>