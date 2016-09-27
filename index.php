<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 12.09.2016
 * Time: 23:40
 */
get_header();
?>
    <div class="content">
        <div class="container">
            <?php
            if (have_posts()):
                while (have_posts()): the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>
    </div>
<?php
get_footer();
