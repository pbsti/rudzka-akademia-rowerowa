<?php
$news_args = array(
    'post_type' => 'post',
    'posts_per_page' => 2,
    'post_status' => 'publish',
);
$news_query = new WP_Query($news_args);
?>
<section id="news" class="news container-secondary">
    <h2>LATEST NEWS</h2>
    <div class="news-container">
        <?php if ($news_query->have_posts()): ?>
            <?php while ($news_query->have_posts()): $news_query->the_post(); ?>
                <?php
                $url = get_permalink();
                $title = get_the_title();
                $date = get_the_date('j F Y');
                $author = get_the_author();
                $excerpt = get_the_excerpt();
                $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                if (!$thumb_url) {
                    $content = get_the_content();
                    if (preg_match('/<img[^>]+src=[\"\']([^\"\']+)[\"\']/i', $content, $matches)) {
                        $thumb_url = $matches[1];
                    }
                }
                $image_style = $thumb_url ? "background: url('" . esc_url($thumb_url) . "') no-repeat center center/cover;" : 'background: #222;';
                ?>
                <article class="news-card">
                    <a class="news-card-link" href="<?php echo esc_url($url); ?>">
                        <div class="news-card-image" style="<?php echo esc_attr($image_style); ?>"></div>
                        <div class="news-card-content">
                            <div class="news-card-details"><?php echo esc_html($date); ?> • <?php echo esc_html($author); ?></div>
                            <h3><?php echo esc_html($title); ?></h3>
                            <p><?php echo esc_html(wp_trim_words($excerpt, 22, '...')); ?></p>
                        </div>
                    </a>
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Brak aktualności do wyświetlenia.</p>
        <?php endif; ?>
    </div>
    <?php wp_reset_postdata(); ?>
</section>

