<section id="post-<?php the_ID(); ?>" <?php post_class('p-item-card'); ?>>
    <?php if(has_post_thumbnail()): ?>
    <?php the_post_thumbnail( 'archive_thumbnail' ); ?>
    <?php else: ?>
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/archive-content.jpg" alt="">
    <?php endif; ?>
    <div class="p-item-card__text">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <button class="c-button--circleWhite-white p-item-card__button"
            onclick="location.href='<?php the_permalink(); ?>'">詳しく見る</button>
    </div>
</section>