    <footer id="footer" class="p-footer">
        <img src="<?php echo esc_url( get_template_directory_uri()); ?>/image/footerSP.jpg" alt="フッター">
        <div class="p-footer__block">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'footer_nav',
                    'menu_class'    => 'p-footer__text',
                    'container'     => 'ul',
                ));
            ?>
            <p class="p-footer__text p-footer__copy"><small>Copyright: RaiseTech</small></p>
        </div>
    </footer>

    <div id="grayOut" class="p-grayOut--full c-background--gray"></div>
    <?php wp_footer( ); ?>
</body>
</html>