<?php

/**
 * Plugin Name: OBJ-MTL-Viewer
 * Author: Manoj Bahuguna
 * Description: Allows Viewing of 3D models using their Object(.obj) and Material(.mtl) files
 * Version: 1.0.0
 */

class OBJ_MTL_Viewer {

  public function __construct() {
    add_shortcode( 'OBJ_MTL_Viewer', array('OBJ_MTL_Viewer', 'shortcode'));
    add_filter('mime_types', array('OBJ_MTL_Viewer', 'add_custom_mime_types'));
    add_action('init', array(__CLASS__, 'register_styles'));
    add_action('init', array(__CLASS__, 'register_scripts'));
  }

  
	function add_custom_mime_types($mimes){
		return array_merge($mimes,array (
			'obj' => 'text/plain',
      'mtl' => 'text/plain'
		));
  }
  
  public function register_scripts() {
		wp_register_script('omv_threejs', plugins_url('js/libs/Three.js', __FILE__), array(),'1.1', false);
		wp_register_script('omv_obj-loader', plugins_url('js/libs/OBJLoader.js', __FILE__), array(),'1.1', false);
		wp_register_script('omv_mtl-loader', plugins_url('js/libs/MTLLoader.js', __FILE__), array(),'1.1', false);
		wp_register_script('omv_orbital', plugins_url('js/libs/OrbitControls.js', __FILE__), array(),'1.1', false);
    wp_register_script('omv__3dviewer', plugins_url('js/OBJ_MTL_Viewer.js', __FILE__), array(),'1.1', false);
  }

  public function print_scripts() {
	    wp_print_scripts('omv_threejs');
	    wp_print_scripts('omv_obj-loader');
	    wp_print_scripts('omv_mtl-loader');
	    wp_print_scripts('omv_orbital');
	    wp_print_scripts('omv__3dviewer');
  }

  public function register_styles() {
    wp_register_style('omv_3dviewercss', plugins_url('css/style.css', __FILE__), array(),'1.1', false);
  }

  public function print_styles() {
    wp_print_styles('omv_3dviewercss');
  }
  
  public function shortcode($atts, $content = null) {
    self::print_styles();

		ob_start();
    require('output.php');
    
    self::print_scripts();
		return ob_get_clean();
  }
}

 new OBJ_MTL_Viewer();