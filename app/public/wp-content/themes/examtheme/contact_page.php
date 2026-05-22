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
        $post_id = wp_insert_post( array(
            'post_title'   => $name . ' - ' . $topic,
            'post_content' => $message,
            'post_type'    => 'contact_form_answers',
            'post_status'  => 'publish',
        ) );

        if ( $post_id && ! is_wp_error( $post_id ) ) {
            if ( function_exists( 'update_field' ) ) {
                update_field( 'contact_name', $name, $post_id );
                update_field( 'contact_email', $email, $post_id );
                update_field( 'contact_topic', $topic, $post_id );
                update_field( 'contact_message', $message, $post_id );
            }

            $to      = get_option( 'admin_email' );
            $subject = 'New Contact Form Submission: ' . $topic;
            $body    = "Name: $name\nEmail: $email\nTopic: $topic\nMessage: $message";
            wp_mail( $to, $subject, $body );

            wp_redirect( add_query_arg( 'form', 'success', get_permalink() ) );
            exit;
        }
    }
}

get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while (have_posts()): the_post()?>
              <?php
              $Phonecontact = get_field('phone_contact') ?: '';
              $EmailContact = get_field('email_contact') ?: '';
              ?>
           
            <section id="contact-us" class="contact-us container-secondary">
                <h2>Masz jakieś pytania?</h2>
                <p> Zadbamy, abyśmy dostarczyli odpowiedzi, które potrzebujesz, tak szybko, jak to możliwe.</p>
                <div class="container">
                    <div class="inner-container contact-icon">
                        <i class="fa-solid fa-phone" style="font-size: 3rem;"></i>
                        <a href="tel:+48 602 480 400"><p><?php echo esc_html( $Phonecontact ); ?></p></a>
                    </div>
                    <div class="inner-container contact-icon">
                        <i class="fa-solid fa-envelope" style="font-size: 3rem;"></i>
                        <a href="mailto:biurouksrar@gmail.com"><p><?php echo esc_html( $EmailContact ); ?></p></a>
                    </div>
                </div>
            </section>

            <!-- Contact Form Section -->
            <section id="contact-form" class="contact-form container-primary">
                <h2>Wyślij do nas wiadomość</h2>
                <?php if ( isset( $_GET['form'] ) && 'success' === sanitize_text_field( wp_unslash( $_GET['form'] ) ) ) : ?>
                    <div class="contact-form-success">
                        <p>Dziękujemy za wiadomość! Skontaktujemy się wkrótce.</p>
                    </div>
                <?php endif; ?>
                <div class="contact-form-card">
                    <form class="contact-form_form" action="<?php echo esc_url( get_permalink() ); ?>" method="post">
                        <?php wp_nonce_field( 'contact_form_nonce', 'contact_nonce' ); ?>
                        <div class="contact-form_fields-row">
                            <label class="contact-form_field">
                                <span>Nazwa <em>(wymagane)</em></span>
                                <input type="text" name="contact_name" required />
                            </label>
                            <label class="contact-form_field">
                                <span>Adres e-mail <em>(wymagane)</em></span>
                                <input type="email" name="contact_email" required />
                            </label>
                        </div>
                        <label class="contact-form_field">
                            <span>Temat</span>
                            <input type="text" name="contact_topic" />
                        </label>
                        <label class="contact-form_field">
                            <span>Wiadomość</span>
                            <textarea name="contact_message" rows="6"></textarea>
                        </label>
                        <button type="submit" class="btn-primary contact-form_submit">Wyślij</button>
                    </form>
                </div>
            </section>
        
            <!-- FAQ Section --> 
            <section id="faq" class=" container-primary faq-section">
                <h2>Najczęściej zadawane pytania</h2>
                <div class="faq-box">
                    <h3>Czy można zapisać się na kurs jazdy na rowerze bez wcześniejszego doświadczenia?</h3>
                    <p>Tak, prowadzimy zajęcia zarówno dla początkujących dzieci, jak i dorosłych. Instruktorzy dopasowują poziom nauki do uczestnika, dzięki czemu każdy może uczyć się w swoim tempie.</p>
                </div>
                <div class="faq-box">
                    <h3>Jakie wydarzenia organizuje akademia rowerowa?</h3>
                    <p>Regularnie organizujemy rodzinne przejazdy rowerowe, warsztaty bezpieczeństwa, treningi grupowe oraz wydarzenia sportowe dla dzieci i dorosłych.</p>
                </div>
                <div class="faq-box">
                    <h3>Co obejmuje letni obóz rowerowy?</h3>
                    <p>Letni obóz rowerowy łączy naukę jazdy, aktywności sportowe oraz wspólne wycieczki rowerowe. Zajęcia są prowadzone w bezpiecznej i przyjaznej atmosferze pod opieką doświadczonych instruktorów.</p>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>