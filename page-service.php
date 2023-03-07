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

            <h2 class="section-heading-medium service-page__top-heading">
                <?php echo carbon_get_post_meta(57, 'service-name') ?>
            </h2>

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
            <h2 class="section-heading-medium service-page__success-heading">Успехи наших клиентов</h2>

            <div class="service-page__success-tabs">
                <ul class="service-page__success-tabs-menu">
                    <li><button class="service-page__success-tabs-button active" data-content-src="<?php echo bloginfo('template_url'); ?>/assets/images/graph-1.webp">Первый сайт</button></li>
                    <li><button class="service-page__success-tabs-button" data-content-src="<?php echo bloginfo('template_url'); ?>/assets/images/graph-2.webp">Второй сайт</button></li>
                    <li><button class="service-page__success-tabs-button" data-content-src="<?php echo bloginfo('template_url'); ?>/assets/images/graph-3.webp">Третий сайт</button></li>
                </ul>

                <div class="service-page__success-tabs-content">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/images/graph-1.webp" alt="График">
                </div>
            </div>
    </section>

    <section class="service-page__price">
        <div class="container">
            <h2 class="section-heading-medium service-page__price-heading">Сколько стоит настройка контекстной рекламы</h2>

            <div class="service-page__price-row">
                <div class="service-page__price-col">
                    <ul class="service-page__price-list">
                        <li class="service-page__price-item">
                            <h3 class="service-page__price-table-heading open">Одностраничный сайт, тарифы</h3>

                            <div class="service-page__price-table-wrapper">
                                <table class="service-page__price-table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Количество продвигаемых направлений, товаров, услуг
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Стоимость создания рекламной кампании
                                            </td>
                                            <td class="text-no-wrap">
                                                20 000 руб.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Стоимость ведения рекламной кампании
                                            </td>
                                            <td class="text-no-wrap">
                                                16 000 руб.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Стоимость расширенного аналитического отчета
                                            </td>
                                            <td class="text-no-wrap">
                                                6 500 руб.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Количество объявлений
                                            </td>
                                            <td>
                                                350
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>

                        <li class="service-page__price-item">
                            <h3 class="service-page__price-table-heading">Корпоративный сайт, тарифы</h3>

                            <div class="service-page__price-table-wrapper">
                                <table class="service-page__price-table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Количество продвигаемых направлений, товаров, услуг
                                            </td>
                                            <td>
                                                До 5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Стоимость создания рекламной кампании
                                            </td>
                                            <td class="text-no-wrap">
                                                30 000 руб.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Стоимость ведения рекламной кампании
                                            </td>
                                            <td class="text-no-wrap">
                                                18 000 руб.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Стоимость расширенного аналитического отчета
                                            </td>
                                            <td class="text-no-wrap">
                                                6 500 руб.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Количество объявлений
                                            </td>
                                            <td>
                                                850
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>

                        <li class="service-page__price-item">
                            <h3 class="service-page__price-table-heading">Интернет магазин, тарифы</h3>

                            <div class="service-page__price-table-wrapper">
                                <table class="service-page__price-table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Количество продвигаемых направлений, товаров, услуг
                                            </td>
                                            <td>
                                                До 10
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Стоимость создания рекламной кампании
                                            </td>
                                            <td class="text-no-wrap">
                                                35 000 руб.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Стоимость ведения рекламной кампании
                                            </td>
                                            <td class="text-no-wrap">
                                                25 000 руб.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Стоимость расширенного аналитического отчета
                                            </td>
                                            <td class="text-no-wrap">
                                                Бесплатно
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Количество объявлений
                                            </td>
                                            <td>
                                                2 600
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="service-page__price-col">
                    <div class="form">
                        <h2 class="form__heading">Оставить заявку:</h2>

                        <p class="form__descr">Заполните форму сейчас - наш специалист свяжется с вами для консультации и составит персональное предложение</p>

                        <form>
                            <div class="form__group">
                                <label>Телефон:<span>*</span></label>
                                <input name="phone" type="text" class="form__control" required />
                            </div>

                            <div class="form__group">
                                <label>Адрес сайта (если имеется):</label>
                                <input name="site" type="text" class="form__control" />
                            </div>

                            <div class="form__group">
                                <button type="submit" class="action-button">
                                    Получить предложение
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-page__benefits">
        <div class="container">
            <h2 class="section-heading-medium service-page__benefits-heading">Преимущества рекламы в Яндекс Директ и Google Adwords</h2>

            <div class="service-page__benefits-body">
                <div class="service-page__benefits-item">
                    <h3 class="section-heading-small service-page__benefits-item-heading">Плюсы контекстной рекламы в Google Ads</h3>

                    <ul class="service-page__benefits-item-list">
                        <li>Показ объявлений на самом популярном веб-ресурсе интернета</li>
                        <li>Реклама таргетируется на весь мир</li>
                        <li>Возможность показывать рекламу на YouTube</li>
                        <li>Более низкая стоимость клика по сравнению с Директом</li>
                    </ul>
                </div>

                <div class="service-page__benefits-item">
                    <h3 class="section-heading-small service-page__benefits-item-heading">Преимущества контекстной рекламы в Яндекс&nbsp;Директ</h3>

                    <ul class="service-page__benefits-item-list">
                        <li>Объявления на самом посещаемом сайте Рунета</li>
                        <li>Директ - изначально русскоязычный сервис, поэтому запросов на русском языке больше и сервис понимает их лучше</li>
                        <li>Возможность использовать РСЯ - партнерские веб-ресурсы для публикации объявлений</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>