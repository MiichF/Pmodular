<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;

class CategoriasController{

    public static function index(Router $router){

        $router->render('admin/categorias/index',[
            'titulo' => 'Categorias de cursos'
        ]);
    }
}