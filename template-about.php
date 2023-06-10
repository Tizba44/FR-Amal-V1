<?php

/**
 * Template Name: About Page
 * 
 */
?>
<title>À propos</title>
<?php get_header(); ?>

<body>

    <?php get_sidebar(); ?>
    <section class="space2"></section>
    <section class="aabout">
        < <div class="about-section" style="background: url(<?php the_post_thumbnail_url('large'); ?>) no-repeat left;">
            <div class="inner-container">
                <h1><?php echo get_the_title(); ?></h1>
                <p class="text">
                    <?php the_content(); ?>
                </p>
            </div>
            </div>

    </section>
    <section class="space1"></section>
    <?php get_footer(); ?>