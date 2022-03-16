<?php
/*
Plugin Name: Ventanilla Única
Plugin URI: https://gitlab.com/milord78
Description: Control de todos los trámites que se registran en un plantel educativo de la DGETI
Version: 1.0
Author: Ermilo Dorantes
Author URI: https://gitlab.com/milord78
License: GPL v2 or later
*/

function ventanilla_dash_menu() {

        add_menu_page ( 'Colores', 'Control Escolar', 'read', 'colores.php', '', 'dashicons-welcome-learn-more', 50);
        add_submenu_page( 'colores.php', 'Amarillo', 'Constancias', 'read', 'edit.php?post_type=constancias', '');
        add_submenu_page( 'colores.php', 'Rojo', 'Aspirantes', 'read', 'aspirantes.php', '');
        add_submenu_page( 'colores.php', 'Azul', 'Certificados', 'upload_files', 'certificados.php', '');
        add_submenu_page( 'colores.php', 'Naranja', 'Exámenes', 'read', 'examenes.php', '');
        add_submenu_page( 'colores.php', 'Verde', 'Becas', 'read', 'becas.php', '');
        add_submenu_page( 'colores.php', 'Gris', 'Titulación', 'read', 'titulacion.php', '');
        add_submenu_page( 'colores.php', 'Gris', 'Servicio Social', 'read', 'ssocial.php', '');
        #remove_submenu_page( 'colores.php','colores.php' );
}
        add_action( 'admin_menu', 'ventanilla_dash_menu');


function constancia_add_custom_post_type(){

        $labels = array(
        'name' => 'Constancias',
        'singular_name' => 'Constancia',
        'all_items' => 'Todas las contancias',
        'add_new' => 'Generar constancia'
        );

$args = array (
        'labels'                => $labels,
        'description'           => 'Listado de constancias solicitadas',
        'public'                => true,
        'publicly_queryable'    => true,
        'show_in_menu'          => false,
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'constancias' ),
        'capability_type'       => 'post',
        'has_archive'           => 'true',
        'hierarchical'          => 'false',
        'menu_position'         => 5,
        'supports'              => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'            => array( 'category' ),
        'show_in_rest'          => true,
        'menu_icon'             => 'dashicons-cart'
);

register_post_type('constancias',$args);

}

add_action("init","constancia_add_custom_post_type");

?>