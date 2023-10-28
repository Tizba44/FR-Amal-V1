<div class="nav__menu" id="nav-menu">
    <ul class="nav__list">
        <li class="nav__item">
            <a href="<?php echo home_url(); ?>/" class="nav__link">
                <i id="b" class="bx bxs-home nav__icon"></i><i id="a" class="bx bx-home-alt nav__icon"></i>
                <span class="nav__name">Accueil</span>
            </a>
        </li>
        <li class="nav__item">
            <a href="<?php
                        $conseil = get_terms(['taxonomy' => 'conseil']);
                        $first = true;
                        foreach ($conseil as $conseil) :
                            if ($conseil->name == 'Tous (taper ici)') {
                                echo get_term_link($conseil);
                                break;
                            }
                        endforeach; ?>" class="nav__link">
                <i id="d" class='bx bxs-book-reader nav__icon'></i><i id="c" class='bx bx-book-reader nav__icon'></i>
                <span class="nav__name">Conseil</span>
            </a>
        </li>
        <li class="nav__item">
            <a href="<?php
                        $actu_mode = get_terms(['taxonomy' => 'actu_mode']);
                        $first = true;
                        foreach ($actu_mode as $actu_mode) :
                            if ($actu_mode->name == 'Tous (taper ici)') {
                                echo get_term_link($actu_mode);
                                break;
                            }
                        endforeach; ?>" class="nav__link">
                <i id="f" class='bx bxs-news nav__icon'></i><i id="e" class='bx bx-news nav__icon'></i>
                <span class="nav__name">Actu-mode</span>
            </a>
        <li class="nav__item">
            <a href="<?php
                        $test_produit = get_terms(['taxonomy' => 'test_produit']);
                        $first = true;
                        foreach ($test_produit as $test_produit) :
                            if ($test_produit->name == 'Tous (taper ici)') {
                                echo get_term_link($test_produit);
                                break;
                            }
                        endforeach; ?>" class="nav__link">
                <i id="h" class='bx bxs-purchase-tag nav__icon'></i><i id="g" class='bx bx-purchase-tag nav__icon'></i>
                <span class="nav__name">Tests-produits</span>
            </a>
        </li>
    </ul>
</div>




<nav class="navbar">
    <div class="navbar-container container">
        <div class="logo" id="logo-container">
            <a href="<?php echo home_url(); ?>">
                <img src=" <?php bloginfo('template_url'); ?>/assets/img/Logo Amalgames black.png" class="logoBot" alt="logo noire">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/Logo Amalgames white.png" class="logoBotWhite" alt="logo blanc">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/Logo Amalgames hover.png" class="logoTop" alt="logo quand on passe dessue">
            </a>
        </div>
        <ul class="menu-items">
            </li>
            <li><a class="zig" href="<?php
                                        $conseil = get_terms(['taxonomy' => 'conseil']);
                                        $first = true;
                                        foreach ($conseil as $conseil) :
                                            if ($conseil->name == 'Tous (taper ici)') {
                                                echo get_term_link($conseil);
                                                break;
                                            }
                                        endforeach; ?>">Conseil</a></li>




            <li><a class="zig" href="<?php
                                        $actu_mode = get_terms(['taxonomy' => 'actu_mode']);
                                        $first = true;
                                        foreach ($actu_mode as $actu_mode) :
                                            if ($actu_mode->name == 'Tous (taper ici)') {
                                                echo get_term_link($actu_mode);
                                                break;
                                            }
                                        endforeach; ?>">Actu-mode</a></li>



            <li><a class="zig" href="<?php
                                        $test_produit = get_terms(['taxonomy' => 'test_produit']);
                                        $first = true;
                                        foreach ($test_produit as $test_produit) :
                                            if ($test_produit->name == 'Tous (taper ici)') {
                                                echo get_term_link($test_produit);
                                                break;
                                            }
                                        endforeach; ?>">Tests-produits</a>






            <li><a class="zig" href="https://amalgames.baptisteaudeon.com/a-propos/">À propos</a>
        </ul>

        <div class="darkLight">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/light_mode.png" class="lightBot" alt="logo soleil" target="blank">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/dark_mode.png" class="darkTop" alt="logo lune" target="blank">


            <a id='frUk' href="https://amalgames.uk.baptisteaudeon.com/"><img src="<?php bloginfo('template_url'); ?>/assets/img/fr.png" class="frBot" alt="link to french site"></a>

        </div>

    </div>

    <div class="btnElevator" target="blank">
        <i class='bx bxs-chevron-up'></i>
    </div>
    <div class="navbarboxshadow"></div>
</nav>