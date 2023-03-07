<?php
/*
Template Name: Главная
*/

$page_id = get_the_ID();

$home_services = carbon_get_post_meta($page_id, 'home_first_services');
$home_services_ids = wp_list_pluck($home_services, 'id');

$home_cases = carbon_get_post_meta($page_id, 'home_cases');
$home_cases_ids = wp_list_pluck($home_cases, 'id');

$home_services = carbon_get_post_meta($page_id, 'home_services');
$home_services_ids = wp_list_pluck($home_services, 'id');

$home_benefits = carbon_get_post_meta($page_id, 'home_benefits');
?>

<?php
get_header();
?>

<main class="frames">
    <div class="frames__item show">
        <section class="first-screen" style="background-image: url('<?php echo bloginfo('template_url'); ?>/assets/images/room.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: right;">
            <div class="container">
                <div class="first-screen__body">
                    <h1 class="first-screen__heading"><?php echo carbon_get_post_meta($page_id, 'home_first_heading'); ?></h1>

                    <ul class="first-screen__services">
                        <?php foreach ($home_services_ids as $h_service_id) : ?>
                            <?php $h_service = get_post($h_service_id); ?>

                            <li>
                                <a href="#"><?php echo $h_service->post_title; ?></a>
                            </li>
                        <?php endforeach ?>
                    </ul>

                    <div class="first-screen__action-wrapper">
                        <a class="action-button" href="tel:<?php echo carbon_get_theme_option('site_phone_digits'); ?>" title="Получить консультацию">
                            Консультация
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="frames__item">
        <section class="cases">
            <div class="swiper swiper-cases">
                <h2 class="section-heading-large cases__heading">
                    <span class="container"><?php echo carbon_get_post_meta($page_id, 'home_cases_heading'); ?></span>
                </h2>

                <div class="swiper-wrapper">
                    <?php foreach ($home_cases_ids as $h_case_id) : ?>
                        <?php $h_case = get_post($h_case_id); ?>

                        <section class="swiper-slide">
                            <div class="cases__item">
                                <div class="container">
                                    <div class="cases__item-content">
                                        <section class="card">
                                            <div class="card__photo" style="
                                            background-image: url('<?php echo get_the_post_thumbnail_url($h_case_id, 'full'); ?>');
                                            background-repeat: no-repeat;
                                            background-position: center;
                                            background-size: cover;"></div>

                                            <h2 class="card__title">
                                                <?php echo $h_case->post_title; ?>
                                            </h2>

                                            <p class="card__descr">
                                                <?php echo carbon_get_post_meta($h_case_id, 'case_short_descr'); ?>
                                            </p>

                                            <div class="card__chart">
                                                <div class="card__bar">
                                                    <span>Рост
                                                        аудитории</span>
                                                </div>
                                                <div class="card__bar">
                                                    <span>Рост
                                                        запросов</span>
                                                </div>
                                                <div class="card__bar">
                                                    <span>Целевые
                                                        запросы</span>
                                                </div>
                                                <div class="card__bar">
                                                    <span>ТОП 10</span>
                                                </div>
                                                <div class="card__bar">
                                                    <span>Увеличение
                                                        конверсии</span>
                                                </div>
                                            </div>

                                            <p class="card__subtitle">
                                                Подробнее
                                            </p>
                                        </section>

                                        <div class="cases__item-info-wrapper">
                                            <section class="cases__item-info">
                                                <h2 class="cases__item-heading">
                                                    <?php echo carbon_get_post_meta($h_case_id, 'case_table_heading'); ?>
                                                </h2>

                                                <ul class="cases__item-list">
                                                    <?php $case_table = carbon_get_post_meta($h_case_id, 'case_table'); ?>

                                                    <?php foreach ($case_table as $c_table_item) : ?>
                                                        <li>
                                                            <span><?php echo $c_table_item['case_table_key'] ?></span>
                                                            <span><?php echo $c_table_item['case_table_value'] ?></span>
                                                        </li>
                                                    <?php endforeach ?>
                                                </ul>
                                            </section>

                                            <img class="cases__item-info-bg" src="<?php echo bloginfo('template_url'); ?>/assets/images/cases-bg.webp" alt="Графическая шкала">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endforeach ?>
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </section>
    </div>

    <div class="frames__item">
        <section class="popular-services">
            <div class="container">
                <h2 class="section-heading-large popular-services__heading">
                    <?php echo carbon_get_post_meta($page_id, 'home_services_heading') ?>
                </h2>

                <ul class="popular-services__list">
                    <?php foreach ($home_services_ids as $h_service_id) : ?>
                        <?php $h_service = get_post($h_service_id); ?>
                        <?php $h_service_price = explode(",", carbon_get_post_meta($h_service_id, 'service_price')); ?>

                        <li class="service-card">
                            <div class="service-card__img">
                                <img src="<?php echo get_the_post_thumbnail_url($h_service_id, 'full'); ?>" alt="Комплексное продвижение" />
                            </div>

                            <div class="service-card__text">
                                <h3 class="service-card__heading">
                                    <a href="<?php echo get_permalink($h_service_id); ?>"><?php echo $h_service->post_title; ?></a>
                                </h3>

                                <div class="service-card__descr">
                                    <?php echo carbon_get_post_meta($h_service_id, 'service_descr'); ?>
                                </div>

                                <div class="service-card__price">
                                    Цена от
                                    <span> <?php echo $h_service_price[0]; ?><sup><?php echo $h_service_price[1]; ?></sup></span> руб.
                                </div>
                            </div>

                            <a class="service-card__action" href="<?php echo get_permalink($h_service_id); ?>">Подробнее</a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </section>
    </div>

    <div class="frames__item">
        <section class="benefits">
            <div class="container">
                <h2 class="section-heading-large benefits__heading">
                    <?php echo carbon_get_post_meta($page_id, 'home_benefits_heading') ?>
                </h2>

                <ul class="benefits__list">
                    <?php foreach ($home_benefits as $h_benefit) : ?>
                        <li class="benefits__list-item">
                            <svg>
                                <use href="<?php echo $h_benefit['home_benefit_svg']; ?>"></use>
                            </svg>

                            <?php echo $h_benefit['home_benefit']; ?>
                        </li>
                    <?php endforeach  ?>
                </ul>
            </div>
        </section>
    </div>

    <div class="frames__item">
        <section class="seo">
            <div class="container">
                <div class="seo__body">
                    <div class="seo__item">
                        <h2 class="section-heading-large seo__heading">Что такое SEO?</h2>

                        <div class="seo__descr">
                            <p>
                                SEO (Search Engine Optimization) –
                                это комплекс методов, нацеленных на
                                продвижение сайта в поисковой
                                системе для привлечения
                                органического трафика.
                            </p>
                            <p>
                                Работа SEO-специалиста строится на
                                понимании алгоритмов ранжирования
                                Интернет-ресурсов в выдаче и
                                усовершенствовании качественных
                                показателей сайта для его выведения
                                в ТОП позиций поисковых систем по
                                запрашиваемым ключевым фразам.
                            </p>
                        </div>
                    </div>
                    <div class="seo__item">
                        <div class="seo__img" style="
                            background-image: url('<?php echo bloginfo('template_url'); ?>/assets/images/seo.jpg');
                            background-repeat: no-repeat;
                            background-position: top right;
                            background-size: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="frames__item">
        <?php if (is_front_page()) : ?>
            <footer class="footer footer--home">
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
                                    <a href="tel:+79514821173">+7 (951) 482-11-73</a>
                                </li>
                                <li>
                                    <a href="mailto:2k.seo.studio@gmail.com">2k.seo.studio@gmail.com</a>
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
    </div>
</main>

<ul class="frames__line">
    <li class="frames__line-item active"></li>
    <li class="frames__line-item"></li>
    <li class="frames__line-item"></li>
    <li class="frames__line-item"></li>
    <li class="frames__line-item"></li>
    <li class="frames__line-item"></li>
</ul>

<?php
get_footer();
?>