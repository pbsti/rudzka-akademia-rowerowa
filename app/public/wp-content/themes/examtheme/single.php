<?php get_header(); ?>
    <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ): the_post(); ?>
            <section class="single-post container-primary">
                <?php if ( has_post_thumbnail() ): ?>
                    <div class="single-post-image">
                        <?php the_post_thumbnail( 'large' ); ?>
                    </div>
                <?php endif; ?>

                <header class="single-post-header">
                    <h1><?php the_title(); ?></h1>
                    <p class="post-details"><?php echo esc_html( get_the_date( 'j F Y' ) ); ?> • <?php echo esc_html( get_the_author() ); ?></p>
                </header>

                <div class="single-post-content">
                    <?php the_content(); ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>
