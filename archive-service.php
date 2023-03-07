<?php
$service_categories = get_terms([
    'taxonomy' => 'service-categories'
]);
?>

<?php
get_header();
?>

<main>
    <section class="services-page padding-page">
        <div class="container">
            <h1 class="section-heading-large services-page__heading">Наши услуги</h1>

            <ul class="services-page__list">
                <?php foreach ($service_categories as $category) : ?>
                    <li>
                        <a href="<?php echo get_term_link($category->term_id); ?>">
                            <?php echo $category->name; ?>
                        </a>

                        <?php
                        query_posts(array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'service-categories',
                                    'field'    => 'id',
                                    'terms'    => $category->term_id
                                )
                            )
                        ));
                        ?>

                        <?php if (have_posts()) : ?>
                            <ul>
                                <?php while (have_posts()) : the_post(); ?>
                                    <li>
                                        <a href="<?php echo get_permalink($post->ID); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
</main>

<?php
get_footer();
?>