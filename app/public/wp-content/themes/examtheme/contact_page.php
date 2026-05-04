<?php
/*
Template Name: Contact Page
*/

if ( isset( $_POST['contact_name'] ) && isset( $_POST['contact_nonce'] ) && wp_verify_nonce( $_POST['contact_nonce'], 'contact_form_nonce' ) ) {
    $name = sanitize_text_field( $_POST['contact_name'] );
    $email = sanitize_email( $_POST['contact_email'] );
    $topic = sanitize_text_field( $_POST['contact_topic'] );
    $message = sanitize_textarea_field( $_POST['contact_message'] );

    if ( ! empty( $name ) && ! empty( $email ) && is_email( $email ) ) {
        // Save to database
        $post_id = wp_insert_post( array(
            'post_title' => $name . ' - ' . $topic,
            'post_content' => $message,
            'post_type' => 'contact_form_answers',
            'post_status' => 'publish',
        ) );

        // Save ACF fields
        update_field( 'contact_name', $name, $post_id );
        update_field( 'contact_email', $email, $post_id );
        update_field( 'contact_topic', $topic, $post_id );
        update_field( 'contact_message', $message, $post_id );

        // Send email
        $to = get_option( 'admin_email' );
        $subject = 'New Contact Form Submission: ' . $topic;
        $body = "Name: $name\nEmail: $email\nTopic: $topic\nMessage: $message";
        wp_mail( $to, $subject, $body );

        // Redirect with success
        wp_redirect( add_query_arg( 'form', 'success', get_permalink() ) );
        exit;
    }
}

get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while (have_posts()): the_post()?>
              <?php
              $Phonecontact = get_field('phone_contact');
              $EmailContact = get_field('email_contact');
              ?>
           
            <section id="contact-us" class="contact-us container-secondary">
                <h2>Masz jakieś pytania?</h2>
                <p> Zadbamy, abyśmy dostarczyli odpowiedzi, które potrzebujesz, tak szybko, jak to możliwe.</p>
                <div class="container">
                    <div class="inner-container contact-icon"><i class="fa-solid fa-phone" style="font-size: 3rem;"></i><p><?php echo $Phonecontact; ?></p></div>
                    <div class="inner-container contact-icon"><i class="fa-solid fa-envelope" style="font-size: 3rem;"></i><p><?php echo $EmailContact; ?></p></div>
                </div>
            </section>

            <!-- Contact Form Section -->
            <section id="contact-form" class="contact-form container-primary">
                <h2>Wyślij do nas wiadomość</h2>
                <?php if ( isset( $_GET['form'] ) && $_GET['form'] == 'success' ) : ?>
                    <div class="contact-form-success">
                        <p>Dziękujemy za wiadomość! Skontaktujemy się wkrótce.</p>
                    </div>
                <?php endif; ?>
                <div class="contact-form-card">
                    <form class="contact-form_form" action="<?php echo esc_url( get_permalink() ); ?>" method="post">
                        <?php wp_nonce_field( 'contact_form_nonce', 'contact_nonce' ); ?>
                        <div class="contact-form_fields-row">
                            <label class="contact-form_field">
                                <span>Name <em>(required)</em></span>
                                <input type="text" name="contact_name" required />
                            </label>
                            <label class="contact-form_field">
                                <span>Email <em>(required)</em></span>
                                <input type="email" name="contact_email" required />
                            </label>
                        </div>
                        <label class="contact-form_field">
                            <span>Topic</span>
                            <input type="text" name="contact_topic" />
                        </label>
                        <label class="contact-form_field">
                            <span>Message</span>
                            <textarea name="contact_message" rows="6"></textarea>
                        </label>
                        <button type="submit" class="btn-primary contact-form_submit">Wyślij</button>
                    </form>
                </div>
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