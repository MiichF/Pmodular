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
}