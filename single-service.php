<?php
$post_id = get_the_ID();

$clients_success = carbon_get_post_meta($post_id, 'clients_success');
$service_rates = carbon_get_post_meta($post_id, 'service_rates');
$service_benefits = carbon_get_post_meta($post_id, 'service_benefits');
?>

<?php
get_header();
?>

<main class="service-page padding-page">
    <section class="service-page__top">
        <img class="service-page__top-bg" src="<?php echo bloginfo('template_url'); ?>/assets/images/abstract.webp" alt="Фоновая абстракция">

        <div class="container">
            <h2 class="section-heading-medium service-page__top-heading"><?php the_title(); ?></h2>

            <div class="service-page__top-descr"><?php echo carbon_get_post_meta($post_id, 'service_descr'); ?></div>

            <a class="service-page__top-action" href="tel:<?php echo carbon_get_theme_option('site_phone_digits'); ?>">Получить предложение</a>
        </div>
    </section>

    <section class="service-page__success">
        <div class="container">
            <h2 class="section-heading-medium service-page__success-heading"><?php echo carbon_get_post_meta($post_id, 'clients_success_heading'); ?></h2>

            <div class="service-page__success-tabs">
                <ul class="service-page__success-tabs-menu">
                    <?php $first = true; ?>

                    <?php foreach ($clients_success as $c_success) : ?>
                        <?php if ($first) : ?>
                            <li><button class="service-page__success-tabs-button active" data-content-src="<?php echo wp_get_attachment_image_url($c_success['client_site_graph'], 'full') ?>"><?php echo $c_success['client_site_domain'] ?></button></li>

                            <?php $first = false; ?>
                        <?php else : ?>
                            <li><button class="service-page__success-tabs-button" data-content-src="<?php echo wp_get_attachment_image_url($c_success['client_site_graph'], 'full') ?>"><?php echo $c_success['client_site_domain'] ?></button></li>
                        <?php endif ?>
                    <?php endforeach; ?>
                </ul>

                <div class="service-page__success-tabs-content">
                    <img src="<?php echo wp_get_attachment_image_url($clients_success[0]['client_site_graph'], 'full') ?>" alt="График">
                </div>
            </div>
    </section>

    <section class="service-page__price">
        <div class="container">
            <h2 class="section-heading-medium service-page__price-heading"><?php echo carbon_get_post_meta($post_id, 'service_rates_heading'); ?></h2>

            <div class="service-page__price-row">
                <div class="service-page__price-col">
                    <ul class="service-page__price-list">
                        <?php $first = true; ?>

                        <?php foreach ($service_rates as $s_rate) : ?>
                            <?php if ($first) : ?>
                                <li class="service-page__price-item">
                                    <h3 class="service-page__price-table-heading open"><?php echo $s_rate['service_table_heading']; ?></h3>

                                    <div class="service-page__price-table-wrapper">
                                        <table class="service-page__price-table">
                                            <tbody>
                                                <?php foreach ($s_rate['service_table'] as $item) : ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $item['service_table_key']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $item['service_table_value']; ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </li>

                                <?php $first = false; ?>
                            <?php else : ?>
                                <li class="service-page__price-item">
                                    <h3 class="service-page__price-table-heading"><?php echo $s_rate['service_table_heading']; ?></h3>

                                    <div class="service-page__price-table-wrapper">
                                        <table class="service-page__price-table">
                                            <tbody>
                                                <?php foreach ($s_rate['service_table'] as $item) : ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $item['service_table_key']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $item['service_table_value']; ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </li>
                            <?php endif ?>
                        <?php endforeach; ?>
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
            <h2 class="section-heading-medium service-page__benefits-heading"><?php echo carbon_get_post_meta($post_id, 'service_benefits_heading'); ?></h2>

            <div class="service-page__benefits-body">
                <?php foreach ($service_benefits as $s_benefit) : ?>
                    <div class="service-page__benefits-item">
                        <h3 class="section-heading-small service-page__benefits-item-heading"><?php echo carbon_get_post_meta($post_id, $s_benefit['service_benefits_list_heading']); ?></h3>

                        <ul class="service-page__benefits-item-list">
                            <?php foreach ($s_benefit['service_benefits_list'] as $item) : ?>
                                <li><?php echo $item['service_benefit']; ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>