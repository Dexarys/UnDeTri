<?php
//retirer le menu généré par le theme parent susty
function ihag_remove_parent_theme_locations()
{
    unregister_nav_menu( 'menu-1' );
}
add_action( 'after_setup_theme', 'ihag_remove_parent_theme_locations', 20 );


// Register menus
register_nav_menus(
	array(
		'primary' => __( 'Principal', 'ihag' ), // Secondary nav in footer
	)
);

// The Top Menu
/*function menu_top_nav($nav, $instagram, $facebook, $sites) {
	$extra_links = '';

	// Extra menu other site links
	if ( $sites ) :
		$extra_links = '<li class="menu-more">';
		$extra_links .= '<span class="menu-desc">'.__("Découvrez aussi :", "arpdl").'</span>';
		$extra_links .= '<ul>';
		foreach ($sites as $site) :
			$extra_links .= '<li class="'.($site["ban"] ? 'menu-mobile' : '').'">';
			$extra_links .= '<a href="'.$site["url"].'" target="_blank" itemprop="url">';
			$extra_links .= getIcon("menu-fleche");
			$extra_links .= '<span itemprop="name">'.$site["nom"].'</span>';
			$extra_links .= '</a>';
			$extra_links .= '</li>';
		endforeach;
		$extra_links .= '</ul></li>';
	endif;

	// Extra menu social links
	if ( $instagram || $facebook ) :
		$extra_links .= '<li class="menu-social"><ul>';
		if ( $instagram ) :
			$extra_links .= '<li class="instagram"><a href="'.$instagram.'" target="_blank" itemprop="url">'.getIcon("instagram", "Voir la page Instagram").'</a></li>';
		endif;
		if ( $facebook ) :
			$extra_links .= '<li class="facebook"><a href="'.$facebook.'" target="_blank" itemprop="url">'.getIcon("facebook", "Voir la page Facebook").'</a></li>';
		endif;
		$extra_links .= '</ul></li>';
	endif;

   wp_nav_menu(array(
    'container' => false,                           // Remove nav container
    'menu_class' => 'main-menu',       // Adding custom nav class
		'link_before'     => '<span itemprop="name">',
		'link_after'      => '</span>',
    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s'.$extra_links.'</ul>',
    'theme_location' => $nav,                 // Where it's located in the theme
    'depth' => 2,                                   // Limit the depth of the nav
    'fallback_cb' => false,                         // Fallback function (see below)
    'walker' => new Topbar_Menu_Walker()
  ));
}*/

// The footer Menu
function ihag_menu($nav = 'primary') {
   wp_nav_menu(array(
    'container' => false,                           // Remove nav container
    'menu_class' => $nav,       // Adding custom nav class
    'items_wrap' => '<ul id="%1$s" class="%2$s" >%3$s</ul>',
    'theme_location' => $nav,                 // Where it's located in the theme
    'depth' => 2,                                   // Limit the depth of the nav
    'fallback_cb' => false,                         // Fallback function (see below)
    'walker' => new Walker_Nav_Menu()
  ));
}


// Add active class to menu
function required_active_nav_class( $classes, $item ) {
  if ( $item->current == 1 || $item->current_item_ancestor == true ) {
    $classes[] = 'active';
  }
  return $classes;
}
add_filter( 'nav_menu_css_class', 'required_active_nav_class', 10, 2 );


// Ajoute les itemprop de schema.org aux menus
add_filter( 'nav_menu_link_attributes', 'add_menu_link_atts', 10, 3 );
function add_menu_link_atts( $atts, $item, $args ) {
  $atts['itemprop'] = 'url';
  return $atts;
}
add_filter( 'nav_menu_attributes', 'add_menu_atts', 10, 3 );
function add_menu_atts( $atts, $item, $args ) {
  $atts['itemprop'] = 'url';
  return $atts;
}
