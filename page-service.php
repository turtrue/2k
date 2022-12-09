<?php
/*
Template Name: Услуга
*/
?>

<?php
get_header();
?>

<main class="service-page">
    <section class="service-page__top">
        <img class="service-page__top-bg" src="<?php echo bloginfo('template_url'); ?>/assets/images/abstract.webp" alt="Абстракция">

        <div class="container">
            <h2 class="section-heading-medium service-page__top-heading">Контекстная реклама</h2>

            <div class="service-page__top-descr">
                Один из самых эффективных методов продвижения вашего бизнеса, которая приводит на сайт большое количество горячей аудитории и позволяет увеличить число продаваемых товаров и услуг.
            </div>

            <a class="service-page__top-action" href="#">Получить предложение</a>
        </div>
    </section>

    <section class="service-page__menu">
        <div class="container">
            <h2 class="section-heading-medium service-page__menu-heading">Заказать контекстную рекламу</h2>

            <div class="swiper swiper-service-page__menu-list service-page__menu-list">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service-page__menu-item">
                            <img class="service-page__menu-item-bg" src="<?php echo bloginfo('template_url'); ?>/assets/images/yandex.webp" alt="Логотип Яндекс">

                            <h3 class="service-page__menu-item-heading">Контекстная реклама в Яндекс Директ</h3>

                            <p>Контекстная реклама в Директе помогает быстро выходить на клиентов среди посетителей самого популярного в России сайта - yandex.ru. Это будет выгодно для бизнеса, который работает на территории стран СНГ.</p>

                            <a href="#">Перейти к услуге</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="service-page__menu-item">
                            <img class="service-page__menu-item-bg" src="<?php echo bloginfo('template_url'); ?>/assets/images/google.webp" alt="Логотип Яндекс">

                            <h3 class="service-page__menu-item-heading">Контекстная реклама в Google Ads</h3>

                            <p>Контекстная реклама сайта в Гугл позволяет использовать в маркетинговых целях самый посещаемый веб-ресурс в мировом интернете - google.com. Если ваш бизнес не ограничен рамками России и стран СНГ, у вас есть офисы и/или доставка по всему миру, то Google Ads поможет вам привлечь новых клиентов и удержать уже имеющихся.</p>

                            <a href="#">Перейти к услуге</a>
                        </div>
                    </div>
                </div>

                <!-- If we need navigation buttons -->
                <!-- <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div> -->

                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- <li>
                    <a href="#">Контекстная реклама в Google Ads</a>
                </li>
                <li>
                    <a href="#">Ретаргетинг и ремаркетинг</a>
                </li>
                <li>
                    <a href="#">Реклама в РСЯ и КМС</a>
                </li>
                <li>
                    <a href="#">Аудит контекстной рекламы</a>
                </li> -->
            </div>
        </div>
    </section>

    <section class="service-page__success">
        <div class="container">
            <h2 class="section-heading-medium">Каких успехов добились с нами клиенты?</h2>


        </div>
    </section>
</main>

<?php
get_footer();
?>