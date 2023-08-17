<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;

class EtiquetasController{

    public static function index(Router $router){

        $router->render('admin/etiquetas/index',[
            'titulo' => 'Administración de etiquetas'
        ]);
    }

    public static function crear(Router $router){
        $alertas = [];

        $router->render('admin/etiquetas/crear',[
            'titulo' => 'Crear de etiqueta',
            'alertas' => $alertas
        ]); 
    }
}