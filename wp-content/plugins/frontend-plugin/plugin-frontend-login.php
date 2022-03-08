<?php
/**
 * Plugin Name:       Frontend Login
 * Plugin URI:        https://github.com/milord
 * Description:       Formularios de login y registro para YarSale
 * Version:           1.0
 * Requires at least: 5.8
 * Requires PHP:      7.4
 * Author:            Ermilo Dorantes
 * Author URI:        https://github.com/milord
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       yardsales
 */

define("PLZ_PATH", plugin_dir_path(__FILE__));

//API
require_once PLZ_PATH."/includes/API/api-registro.php";
require_once PLZ_PATH."/includes/API/api-login.php";

//Shortcodes
require_once PLZ_PATH."/public/shortcode/form-registro.php";
require_once PLZ_PATH."/public/shortcode/form-login.php";

//Blocks
require_once PLZ_PATH."/blocks/register/index.php";

function plz_plugin_activar(){
    add_role('cliente',"Cliente","read_post");
}

register_activation_hook(__FILE__,"plz_plugin_activar");

function plz_plugin_desactivar(){
    remove_role('cliente');
}

register_deactivation_hook(__FILE__,"plz_plugin_desactivar");