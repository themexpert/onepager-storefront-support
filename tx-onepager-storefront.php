<?php
/**
 * Plugin Name:       Onepager Storefront Support
 * Plugin URI:        http://getonepager.com/
 * Description:       Onepager storefront support
 * Version:           0.1
 * Author:            ThemeXpert
 * Author URI:        http://www.themexpert.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       tx-onepager-storefront
 * Domain Path:       /languages
 */

add_action('onepager_init', 'onepager_storefront_theme_support_plugin_init');

function onepager_storefront_theme_support_plugin_init(){
	add_action('wp_loaded', 'add_onepager_storefront_template');
	add_action('wp_enqueue_scripts', 'add_storefront_theme_support');	
}


function add_storefront_theme_support(){
	if(!onepager()->content()->isOnepage()) return;
	$template = get_post_meta( get_the_ID(), '_wp_page_template', true );
	if($template !== 'onepager-storefront.php') return;
	add_theme_support('onepager');
}

function add_onepager_storefront_template(){
	$pageTemplateManager = new ThemeXpert\WordPress\PageTemplater();
  $template = locate_template( 'onepager/onepager-storefront.php' ) 
  	?: __DIR__ . "/templates/onepager-storefront.php";

  $pageTemplateManager->addTemplate( 'OnePager StoreFront', $template );
}