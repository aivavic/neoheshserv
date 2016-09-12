<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 12.09.2016
 * Time: 23:53
 */
wp_head();
?>
<header>
    <div class="container">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.jpg" alt="logo" id="logo">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <?php
            wp_nav_menu(array('theme_location' => 'header-menu',
                'container_class' => 'navbar-header',
                'items_wrap' => '<ul id="%1$s" class="nav navbar-nav">%3$s</ul>',
            ));
            ?>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        </div>
    </nav>
    </div>
</header>
