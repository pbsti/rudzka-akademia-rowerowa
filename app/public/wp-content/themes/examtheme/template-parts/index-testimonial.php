<?php

$arguments = array(
"post_type" => "testimonial_card",
"posts_per_page" => -1
);

$loop = new WP_Query($arguments);
?>
<div class="container">
    <?php if($loop->have_posts()): ?>
            <?php while ($loop->have_posts()): $loop->the_post()?>
            <?php
            $testimonialtext = get_field('testimonial_text') ?: '';
            $testimonialname = get_field('testimonial_name') ?: '';
                ?>
                <div class="testimonial-card">
                    <p>"<?php echo esc_html($testimonialtext); ?>"</p>
                    <h3><?php echo esc_html($testimonialname); ?></h3>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No testimonials found.</p>
    <?php endif; wp_reset_postdata(); ?>
</div>

