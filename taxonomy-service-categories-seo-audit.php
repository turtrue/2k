<?php
$current_term = get_queried_object();
$term_id = $current_term->term_id;
$term_name = $current_term->name;
$term_descr = $current_term->description;

$service_categories_articles = carbon_get_term_meta($term_id, 'service_categories_articles');

// my_print_r($service_categories_articles);
// die();
?>

<?php
get_header();
?>

<main class="category-page padding-page">
    <section class="service-page__top">
        <img class="service-page__top-bg" src="<?php echo bloginfo('template_url'); ?>/assets/images/abstract.webp" alt="Фоновая абстракция">

        <div class="container">
            <h2 class="section-heading-medium service-page__top-heading"><?php echo $term_name; ?></h2>

            <div class="service-page__top-descr"><?php echo $term_descr; ?></div>

            <a class="service-page__top-action" href="tel:<?php echo carbon_get_theme_option('site_phone_digits'); ?>">Получить предложение</a>
        </div>
    </section>

    <section class="service-page__menu">
        <div class="container">
            <h2 class="section-heading-medium service-page__menu-heading">Заказать <?php echo $term_name; ?></h2>

            <?php
            query_posts(array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'service-categories',
                        'field'    => 'id',
                        'terms'    => $term_id
                    )
                )
            ));
            ?>

            <?php if (have_posts()) : ?>
                <div class="swiper swiper-service-page__menu-list service-page__menu-list">
                    <div class="swiper-wrapper">
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="swiper-slide">
                                <div class="service-page__menu-item">
                                    <img class="service-page__menu-item-bg" src="<?php echo get_the_post_thumbnail_url($post->ID, "full"); ?>" alt="<?php the_title(); ?>">

                                    <h3 class="service-page__menu-item-heading"><?php the_title(); ?></h3>

                                    <p><?php echo carbon_get_post_meta($post->ID, 'service_descr'); ?></p>

                                    <a href="<?php echo get_permalink($post->ID); ?>">Перейти к услуге</a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <?php foreach ($service_categories_articles as $article) : ?>
        <article class="category-page__article">
            <div class="container">
                <h2 class="category-page__article-heading section-heading-medium"><?php echo $article['service_cat_article_heading']; ?></h2>

                <div class="category-page__article-body">
                    <?php echo $article['service_cat_article']; ?>
                </div>
            </div>
        </article>
    <?php endforeach ?>
</main>

<?php
get_footer();
?>