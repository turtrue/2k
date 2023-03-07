<?php if (!is_front_page()) : ?>
    <footer class="footer">
        <div class="container">
            <div class="footer__row">
                <div class="footer__col">
                    <h3 class="section-heading-small footer__heading">2k-SEO создание и продвижение сайтов</h3>

                    <div class="footer__descr">
                        <p>Веб-студия «2k-SEO» предлагает весь комплекс профессиональных услуг по созданию и SEO продвижению сайтов с 2009 года. За время работы мы вывели в ТОП поисковиков более сотни проектов разных тематик и уровней сложности. Наша веб-студия стремится к максимально эффективному и долгосрочному сотрудничеству с клиентами.</p>
                    </div>
                </div>

                <div class="footer__col">
                    <h3 class="section-heading-small footer__heading">Контакты</h3>

                    <ul class="footer__contacts-list">
                        <li>
                            <a href="tel:<?php echo carbon_get_theme_option('site_phone_digits'); ?>"><?php echo carbon_get_theme_option('site_phone'); ?></a>
                        </li>
                        <li>
                            <a href="mailto:<?php echo carbon_get_theme_option('site_email'); ?>"><?php echo carbon_get_theme_option('site_email'); ?></a>
                        </li>
                    </ul>
                </div>
            </div>

            <nav class="nav">
                <?php
                wp_nav_menu([
                    'theme_location'  => '',
                    'menu'            => 'main',
                    'container'       => false,
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'items_wrap'      => '<ul>%3$s</ul>',
                    'depth'           => 1
                ]);
                ?>
            </nav>
        </div>
    </footer>
<?php endif; ?>

</div> <!-- /WRAPPER -->

<?php wp_footer(); ?>
</body>

</html>