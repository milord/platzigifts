<?php

function extra_api_registro(){

    register_rest_route(
        'extra',
        'inscripcion',
        array(
            'methods' => 'POST',
            'callback' => 'extra_inscripcion_callback'
        )
        );
}

function extra_inscripcion_callback($request){
    
}