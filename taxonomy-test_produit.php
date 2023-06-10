<?php get_header(); ?>


<title>Tests produits</title>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
</head>

<body>
    <?php get_sidebar(); ?>
    <?php wp_head(); ?>
    <section class="space2"></section>
    <section class="space2"></section>
    <section class="space2"></section>
    <section class="spacephone"></section>
    <section class="spacephone"></section>



    <section class="zonetri">
        <form method="GET" id="form-id">

            <?php
            $order = 'DESC';
            if (isset($_GET['order']) && $_GET['order'] === 'ASC') {
                $order = 'ASC';
            }
            $args = array(
                'post_type' => 'post',
                'orderby' => 'date',
                'order' => $order
            );
            $query = new WP_Query($args);
            ?>

            <div class="slect1">
                <h4 class="legende">Date de publication</h4>
                <select name="order">
                    <option value="DESC" <?php if ($order === 'DESC') {
                                                echo ' selected';
                                            } ?>>Plus récente</option>
                    <option value="ASC" <?php if ($order === 'ASC') {
                                            echo ' selected';
                                        } ?>>Plus ancienne</option>
                </select>
            </div>

            <?php
            $current_term_slug = get_queried_object()->slug; // Récupérer le slug de la catégorie sélectionnée depuis l'URL

            $terms = get_terms([
                'taxonomy' => 'test_produit',
                'hide_empty' => false
            ]);
            ?>

            <div class="slect2">
                <h4 class="legende">
                    Catégorie vêtements
                </h4>
                <select class="select" name="test_produit[]">

                    <?php foreach ($terms as $term) : ?>
                        <option class="option" value="<?php echo $term->slug; ?>" <?php echo ($current_term_slug === $term->slug) ? 'selected' : ''; ?>>
                            <?php echo $term->name; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <a id="submit-button" class="btn btn-primary" target="blank">Appliquer </a>
        </form>
    </section>

    <section class="space1"></section>
    <section class="space1"></section>




    <section class="article-menu">
        <div class="article-menu-container container">

            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?>

                    <div class="article-menu-item">
                        <div class="article-img">
                            <div class="img-container">
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" alt="miniature" />
                                <div class="img-content">
                                    <a href="<?php the_permalink() ?>" class="btn btn-primary" target="blank">Lire !</a>
                                </div>
                            </div>
                        </div>
                        <div class="article-description">
                            <h2 class="article-titile"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>

                <?php
                    $bouchetrou++;
                }
            }
            if ($bouchetrou % 2 != 0) {

                ?>
                <section class="space2"></section>
                <section class="space2"></section>

            <?php
            }
            ?>

            <div class="pagination">
                <?php echo paginate_links(); ?>
            </div>
            <section class="space1"></section>
            <section class="space2"></section>
        </div>
    </section>







    <?php get_footer(); ?>