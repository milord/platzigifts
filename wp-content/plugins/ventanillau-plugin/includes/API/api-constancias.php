<?php

function constancia_api_solicitud(){

    register_rest_route(
        "constancia",
        "solicitud",
        array(
            'methods' => 'POST',
            'callback' => 'constancia_solicitud_callback'
        )
        );
}

function contancia_solicitud_callback($request){

    
}