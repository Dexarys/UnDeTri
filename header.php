<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Susty
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" sizes="32x32">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'susty' ); ?></a>
	<a class="skip-link screen-reader-text" href="#menu"><?php esc_html_e( 'Menu', 'susty' ); ?></a>
	<header id="masthead">
		<div class="wrapper">
			<?php
			if ( has_custom_logo() ) :
				the_custom_logo(); //option custom_logo
			endif;
			?>
			<div id="menu">
				<?php
					echo ihag_menu('primary');
				?>
			</div>
		</div>
	</header>

	<div id="content">
	<?php if(is_singular()):?>
		<?php the_title( '<h1 class="print">', '</h1>' ); ?>
	<?php elseif(is_archive()):?>
		<h1 class="print"><?php echo single_cat_title( '', false );?></h1>
	<?php endif;?>
