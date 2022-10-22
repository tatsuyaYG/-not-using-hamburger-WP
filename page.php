<?php get_header( ); ?>
            <main class="p-main">
                <div class="p-main-visual p-main-visual--single">
                    <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail( 'main_thumbnail' ); ?>
                    <?php else: ?>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/page-main.jpg" alt="">
                    <?php endif; ?>
                    <h1><?php the_title( ); ?></h1>
                </div>

                <section class="p-single-page c-margin--LR">
                <?php 
                    $content = get_the_content( );
                    $content = str_replace('<blockquote','<blockquote class="p-quote c-background--gray-Opacity" ',$content);
                    $content = str_replace('<table','<table class="c-table p-table"',$content);
                    $content = str_replace('wp-block-buttons','c-button--search p-button--single',$content);
                    $content = str_replace('wp-block-button','',$content);
                    $content = str_replace('wp-block-gallery has-nested-images columns-default is-cropped','p-grid-picture c-grid',$content);
                    $content = str_replace('wp-block-group alignwide','p-single-page__top',$content);
                    $content = str_replace('wp-block-image','',$content);
                    $content = str_replace('wp-block-media-text alignwide is-stacked-on-mobile','',$content);
                    $content = str_replace('wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile','',$content);
                    echo $content; 
                ?>
                </section>
            </main>
        </div>
    <?php get_sidebar( ); ?>
    </div>

<?php get_footer( ); ?>