<?php get_header( ); ?>

            <main class="p-main">
                <div class="p-main-visual p-main-visual--archive-search">
                    <img src="<?php echo esc_url( get_template_directory_uri()); ?>/image/archive-main.jpg" alt="サーチページ">
                    <h1>Search:</h1>
                    <p><?php the_search_query( ); ?></p>
                    <div class="c-background--gray p-main-visual--archive__layer"></div>
                </div>

                <section class="p-hamburger-menuList c-margin--LR">
                    <div class="p-hamburger-menuList__title">
                        <h1>検索結果：<?php echo $wp_query->found_posts; ?>件</h1>
                    </div>

                    <?php if( have_posts()): ?>
                        <?php
                        while ( have_posts( )):
                            the_post( );
                            ?>

                            <?php get_template_part( 'template-parts/loop','post' ); ?>
                        <?php endwhile; ?>
                        <?php else: ?>
                        <p class="p-hamburger-menuList__title">検索単語に一致するものは見つかりませんでした。</p>
                    <?php endif; ?>

                    <div class="p-page-move">
                        <?php
                            $prev = get_previous_posts_link('＜＜前へ');
                            $next = get_next_posts_link('次へ＞＞');?>
                            <div class="p-page-move__prev">
                            <?php if($prev){
                                echo $prev;
                            }?>
                            </div>
                            <div class="p-page-move__next">
                            <?php if($next){
                                echo $next;
                            }?>
                            </div>
                    </div>
                    <?php if (function_exists( 'custom_wp_pagenavi' )){
                        custom_wp_pagenavi();
                    } ?>
                </section>


            </main>
        </div>
    <?php get_sidebar( ); ?>
    </div>

<?php get_footer( ); ?>