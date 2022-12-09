<?php
/*
Template Name: Наши контакты
*/
?>

<?php
get_header();
?>

<main>
    <section class="contacts-page">
        <div class="container">
            <h1 class="section-heading contacts-page__heading">Наши контакты</h1>

            <ul class="contact__list">
                <li>
                    Телефон:
                    <a href="tel:+79514821173">+7 (951) 482-11-73</a>
                </li>
                <li>
                    Email:
                    <a href="mailto:2k.seo.studio@gmail.com">2k.seo.studio@gmail.com</a>
                </li>
            </ul>

            <div class="contacts-page__action-wrapper">
                <p>Получите бесплатную консультацию:</p>
                <a class="action-button" href="tel:+79514821173" title="Получить консультацию">
                    Консультация
                </a>
            </div>

            <div class="contacts-page__form">
                <h2 class="contacts-page__form-heading">
                    Оставить заявку:
                </h2>

                <form class="form">
                    <div class="form__group">
                        <label>Имя:</label>
                        <input name="name" type="text" class="form__control" />
                    </div>

                    <div class="form__group">
                        <label>Телефон:<span>*</span></label>
                        <input name="phone" type="text" class="form__control" required />
                    </div>

                    <div class="form__group">
                        <label>E-mail:<span>*</span></label>
                        <input name="email" type="email" class="form__control" required />
                    </div>

                    <div class="form__group">
                        <label>Адрес сайта:<span>*</span></label>
                        <input name="site-url" type="text" class="form__control" required />
                    </div>

                    <div class="form__group">
                        <label>Приложить файл:</label>
                        <input name="file" type="file" class="form__control" />
                    </div>

                    <div class="form__group">
                        <button type="submit" class="action-button">
                            Заказать SEO
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>