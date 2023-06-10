<?php get_header(); ?>

<title> <?php the_title(); ?></title>

<body>

    <?php get_sidebar(); ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <section class="showcase-area" style="
      background: 
         url('<?php the_post_thumbnail_url('large') ?>'),
         no-repeat;   
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      ">

                <div class="showcase-container">
                    <h1 class="main-title"><?php the_title(); ?></h1>
                    <section class="space2"></section>
                    <h4 class="sylvain"> Par <?php the_author(); ?> le <?php the_time('d-m-Y'); ?></h4>
                </div>

            </section>



            <div class="articleTexte">

                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry clear">
                        <h6></h6>
                        <?php the_content(); ?>
                        <?php edit_post_link(); ?>
                        <?php wp_link_pages(); ?>
                    </div>

                    <div class="post-footer">
                    </div>
                </div>
            <?php endwhile; ?>
            <div class="navigation index">
                <div class="alignleft"><?php next_posts_link('Older Entries'); ?></div>
                <div class="alignright"><?php previous_posts_link('Newer Entries'); ?></div>
            </div>
        <?php else : ?>
        <?php endif; ?>

            </div>

            <section class="space2"></section>

            <?php get_footer(); ?>