<?php

// Definición de rutas de la Aplicación Web

$app->get('/',['app\Controladores\Inicio\Controlador', 'paginaInicio'])->setName('inicio')