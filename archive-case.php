<?php
$service_categories = get_terms([
    'taxonomy' => 'service-categories'
]);
?>

<?php
get_header();
?>

<main>
    <section class="cases-page padding-page">
        <div class="container">
            <h1 class="section-heading-large cases-page__heading">Наши кейсы</h1>

            <?php if (have_posts()) : ?>
                <ul class="cases-page__list">
                    <?php while (have_posts()) : the_post(); ?>
                        <li class="cases-page__list-item-wrapper">
                            <a class="cases-page__list-item" href="<?php echo get_permalink($post->ID); ?>">
                                <h2 class="cases-page__list-item-heading"><?php echo carbon_get_post_meta($post->ID, 'case_short_descr') ?></h2>

                                <hr>

                                <p><?php echo carbon_get_post_meta($post->ID, 'case_descr') ?></p>
                            </a>
                        </li>
                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
?>