<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package resto_wp
 */

get_header();
?>

<main id="primary" class="site-main">
    <div id="main-banner">
        <img src="<?php echo(get_template_directory_uri());?>/Images/head-banner.jpg" alt="welcome to Resto">
    </div>
    <div class="wrapper">
        <section id="home-menu">
            <h2>Menu</h2>
            <ul>
                <li>
                    <span class="dish">
                        Voluptate Cillum fugiat
                    </span>
                    <span class="price">
                        $30
                    </span>
                    <span class="desc">
                        Cheese, tomato, mushrooms, onions
                    </span>
                </li>
                <li>
                    <span class="dish">
                        Voluptate Cillum fugiat
                    </span>
                    <span class="price">
                        $30
                    </span>
                    <span class="desc">
                        Cheese, tomato, mushrooms, onions
                    </span>
                </li>
                <li>
                    <span class="dish">
                        Voluptate Cillum fugiat
                    </span>
                    <span class="price">
                        $30
                    </span>
                    <span class="desc">
                        Cheese, tomato, mushrooms, onions
                    </span>
                </li>
                <li>
                    <span class="dish">
                        Voluptate Cillum fugiat
                    </span>
                    <span class="price">
                        $30
                    </span>
                    <span class="desc">
                        Cheese, tomato, mushrooms, onions
                    </span>
                </li>
                <li>
                    <span class="dish">
                        Voluptate Cillum fugiat
                    </span>
                    <span class="price">
                        $30
                    </span>
                    <span class="desc">
                        Cheese, tomato, mushrooms, onions
                    </span>
                </li>
                <li>
                    <span class="dish">
                        Voluptate Cillum fugiat
                    </span>
                    <span class="price">
                        $30
                    </span>
                    <span class="desc">
                        Cheese, tomato, mushrooms, onions
                    </span>
                </li>
                <li>
                    <span class="dish">
                        Voluptate Cillum fugiat
                    </span>
                    <span class="price">
                        $30
                    </span>
                    <span class="desc">
                        Cheese, tomato, mushrooms, onions
                    </span>
                </li>
                <li>
                    <span class="dish">
                        Voluptate Cillum fugiat
                    </span>
                    <span class="price">
                        $30
                    </span>
                    <span class="desc">
                        Cheese, tomato, mushrooms, onions
                    </span>
                </li>
            </ul>
        </section>
        <section id="featured">
            <ul>
                <li>
                    <img src="<?php echo(get_template_directory_uri());?>/images/Resto_13.jpg">
                    <a href="#">Fugiat nulla sint</a>
                    <span>$30</span>
                    <span class="rating"></span>
                </li>
                <li>
                    <img src="<?php echo(get_template_directory_uri());?>/images/Resto_15.jpg">
                    <a href="#">Fugiat nulla sint</a>
                    <span>$30</span>
                    <span class="rating"></span>
                </li>
                <li>
                    <img src="<?php echo(get_template_directory_uri());?>/images/Resto_18.jpg">
                    <a href="#">Fugiat nulla sint</a>
                    <span>$30</span>
                    <span class="rating"></span>
                </li>
                <li>
                    <img src="<?php echo(get_template_directory_uri());?>/images/Resto_20.jpg">
                    <a href="#">Fugiat nulla sint</a>
                    <span>$30</span>
                    <span class="rating"></span>
                </li>
            </ul>
        </section>
        
    </div>

    <section id="col-gallery">
        <div class="wrapper">
            <h1>Specially for you!</h1>
            <div class="gallery" id="gallery">
                <div class="gallery-item">
                    <div class="content"><img src="<?php echo(get_template_directory_uri());?>/Images/Resto_36.jpg" alt=""></div>
                </div>
                <div class="gallery-item">
                    <div class="content"><img src="<?php echo(get_template_directory_uri());?>/Images/Resto_13.jpg" alt=""></div>
                </div>
                <div class="gallery-item">
                    <div class="content"><img src="<?php echo(get_template_directory_uri());?>/Images/Resto_37.jpg" alt=""></div>
                </div>
                <div class="gallery-item">
                    <div class="content"><img src="<?php echo(get_template_directory_uri());?>/Images/Resto_15.jpg" alt=""></div>
                </div>
                <div class="gallery-item">
                    <div class="content"><img src="<?php echo(get_template_directory_uri());?>/Images/Resto_38.jpg" alt=""></div>
                </div>
                <div class="gallery-item">
                    <div class="content"><img src="<?php echo(get_template_directory_uri());?>/Images/Resto_20.jpg" alt=""></div>
                </div>
                <div class="gallery-item">
                    <div class="content"><img src="<?php echo(get_template_directory_uri());?>/Images/Resto_39.jpg" alt=""></div>
                </div>
                <div class="gallery-item">
                    <div class="content"><img src="<?php echo(get_template_directory_uri());?>/Images/Resto_18.jpg" alt=""></div>
                </div>
            </div>
        </div>
        <script src="<?php echo(get_template_directory_uri());?>/js/script.js"></script>
    </section>

</main><!-- #main -->

<?php

get_footer();
