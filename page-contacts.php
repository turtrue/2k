<?php
/*
Template Name: Наши контакты
*/
?>

<?php
get_header();
?>

<main class="contacts-page padding-page" style="background-image: url('<?php echo bloginfo('template_url'); ?>/assets/images/scheme.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <section>
        <div class="container">
            <h1 class="section-heading-large contacts-page__heading">Контакты веб-студии 2k-SEO</h1>

            <div class="contacts-page__row">
                <div class="contacts-page__col">
                    <ul class="contact__list">
                        <li>
                            <a href="tel:<?php echo carbon_get_theme_option('site_phone_digits'); ?>"><?php echo carbon_get_theme_option('site_phone'); ?></a>
                        </li>
                        <li>
                            <a href="mailto:<?php echo carbon_get_theme_option('site_email'); ?>"><?php echo carbon_get_theme_option('site_email'); ?></a>
                        </li>
                    </ul>

                    <div class="contacts-page__action-wrapper">
                        <p>Получите бесплатную консультацию:</p>
                        <a class="action-button" href="tel:+<?php echo carbon_get_theme_option('site_phone_digits'); ?>" title="Получить консультацию">
                            Консультация
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <article class="contacts-page__company">
        <div class="container">
            <h2 class="section-heading-medium contacts-page__company-heading">О нас</h2>

            <div class="contacts-page__company-text">
                <p>Продвижение сайтов - основное направление веб-студии 2k-SEO. Находимся в Казани и продвигаем сайты компаний в поисковой выдаче в Казани и регионам. Мы занимаемся созданием сайтов и их поисковой оптимизацией, добились в этом хороших результатов.</p>

                <p>Считаем главной задачей нашей компании не просто создать сайт и отдать его клиенту в пользование, а вывести его на первые позиции в поисковой выдаче Яндекс и Google по целевым запросам.</p>

                <p>Это позволит нашему клиенту извлечь максимальную выгоду из своего сайта - привлечь новых клиентов из поисковых систем, улучшить репутацию компании в интернете и увеличить количество входящих заявок (лидов), используя дополнительный канал их привлечения.</p>
            </div>
        </div>
    </article>
</main>

<?php
get_footer();
?>