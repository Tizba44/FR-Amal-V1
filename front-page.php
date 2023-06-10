<?php get_header(); ?>
<title>Amalgames</title>

<body>
    <?php get_sidebar(); ?>

    <!--=============== HOME ===============-->

    <?php
    $the_query = new WP_Query([
        'posts_pera_page' => 1,
        'offset' => $offset,
    ]);

    if ($the_query->have_posts()) : $the_query->the_post();
    ?>


        <section class="showcase-area" style="
    background: url('<?php the_post_thumbnail_url('large'); ?>') no-repeat;   
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
">
            <div class="showcase-container">
                <h1 class="main-title"><?php the_title(); ?></h1>
            </div>
        </section>
    <?php
    endif;
    ?>


    <section class="space2"></section>

    <section class="article-menu">
        <h2 class="article-menu-heading">Derniers articles</h2>
        <section class="space1"></section>
        <div class="article-menu-container container">


            <?php
            function display_article($offset)
            {
                // Define our WP Query Parameters
                $the_query = new WP_Query([
                    'posts_per_page' => 1,
                    'offset' => $offset,
                ]);

                // Start our WP Query
                while ($the_query->have_posts()) : $the_query->the_post();
                    // Display the Post Title with Hyperlink
            ?>
                    <div class="article-menu-item">
                        <div class="article-img">
                            <div class="img-container">
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" <?php the_title(); ?>" alt="miniature" />
                                <div class=" img-content">
                                    <a href="<?php the_permalink() ?>" class="btn btn-primary" target="blank">Lire !</a>
                                </div>
                            </div>
                        </div>
                        <div class="article-description">
                            <h2 class="article-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                            <!-- ===============P========== -->
                            <?php
                            // Display the Post Excerpt
                            the_excerpt(__('(more…)'));
                            ?>
                        </div>
                    </div>
            <?php
                // Repeat the process and reset once it hits the limit
                endwhile;
                wp_reset_postdata();
            }
            ?>

            <?php
            for ($i = 0; $i < 6; $i++) {
                display_article($i);
            }
            ?>

        </div>
    </section>
    <section class="space2"></section>

    <?php get_footer(); ?>