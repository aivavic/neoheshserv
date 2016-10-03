<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 12.09.2016
 * Time: 23:53
 */
?>
<!-- <meta name="viewport" content="initial-scale=1.0"> -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<?php wp_head(); ?>
<header>
	<div class="container">
		<div class="logo-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-min.png" alt="logo" id="logo"></div>
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
			<!-- .widget-area -->
		<?php endif; ?>
	</div>

</header>
	<nav>
<div class="container">

		<a href="#" class="toggle-menu" is-expanded="false">Menu</a>
		<?php
		wp_nav_menu(array(
			'theme_location' => 'header-menu'
			));
			?>

	</div>
		</nav>
