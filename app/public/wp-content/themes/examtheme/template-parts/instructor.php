<?php

$arguments = array(
"post_type" => "cycling-instructor",
"posts_per_page" => -1
);

$loop = new WP_Query($arguments);
?>
<div class="container">
    <?php if($loop->have_posts()): ?>
            <?php while ($loop->have_posts()): $loop->the_post()?>
            <?php
            $instructorphoto = get_field('instructor_photo') ?: '';
            $instructorname = get_field('instructor_name') ?: '';
            $instructordescription = get_field('instructor_description') ?: '';
                ?>
                <div class="image-container instructor-card">
                    <div class= "instructor-card-inner instructor">
                        <div class="instructor_front" style="background: url(<?php echo esc_url( $instructorphoto['url'] ?? '' ); ?>) no-repeat center center/cover;" role="img" aria-label="Bartłomiej Warzecha - członek zespołu">
                            <h3><i class="fa-solid fa-hand-pointer" style="font-size: 3rem;"></i> <br> Kliknij po więcej!</h3>
                        </div>
                        <div class= "instructor_back">
                            <h3><?php echo esc_html($instructorname); ?></h3>
                            <p><?php echo esc_html($instructordescription); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No instructors found.</p>
    <?php endif; wp_reset_postdata(); ?>
</div>
