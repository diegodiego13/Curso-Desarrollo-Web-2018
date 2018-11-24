<?php

// Definición de rutas de la Aplicación Web

$app->get('/',['app\Controladores\inicioControlador', 'paginaInicio'])->setName('inicio');
