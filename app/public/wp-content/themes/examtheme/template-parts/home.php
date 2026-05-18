<?php
$news_args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'post_status' => 'publish',
);
$news_query = new WP_Query($news_args);
$total_posts = $news_query->found_posts;
$show_all_button = $total_posts > 2;
?>
<section id="news" class="news container-secondary">
    <h2>Aktualności</h2>
    <div class="news-container">
        <?php if ($news_query->have_posts()): ?>
            <?php $post_index = 0; ?>
            <?php while ($news_query->have_posts()): $news_query->the_post(); $post_index++; ?>
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
                $hidden_class = $post_index > 2 ? ' hidden-news' : '';
                $hidden_style = $post_index > 2 ? ' style="display:none;"' : '';
                ?>
                <article class="news-card<?php echo $hidden_class; ?>"<?php echo $hidden_style; ?>>
                    <a class="news-card-link" href="<?php echo esc_url($url); ?>">
                        <div class="news-card-image" style="<?php echo esc_attr($image_style); ?>" role="img" aria-label="<?php echo esc_attr( $title ); ?> - artykuł wiadomości"></div>
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
        <?php if ($show_all_button): ?>
            <div class="button-container">
                <button type="button" id="show-more-news" class="btn btn-secondary nb">Więcej</button>
            </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var button = document.getElementById('show-more-news');
        if (!button) {
            return;
        }

        button.addEventListener('click', function() {
            var hiddenCards = document.querySelectorAll('.news-card.hidden-news');
            hiddenCards.forEach(function(card) {
                card.style.display = '';
            });
            button.style.display = 'none';
        });
    });
</script>

