<footer class="site-footer">
                <div class="container">
                    <div class="copyright">
                        <p><?php echo get_theme_mod('set_copyright', 'Copyright X - All rights reserved'); ?></p>
                    </div>
                    <nav class="footer-menu">
                        <?php  wp_nav_menu(array('theme_location' => 'wp_devs_footer_menu')); ?>
                    </nav>
                </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>