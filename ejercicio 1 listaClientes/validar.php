<?php
$xmlDocument = new DOMDocument();

libxml_use_internal_errors(true); // NO LIBXML WARNINGS


$xmlDocument->load('listaclientes.xml');

if($xmlDocument->validate()){
    echo '<h1>¡Este documento es válido!</h1>';
} else {
    echo '<h1>¡Error en la validación!</h1>';
}