<?php

namespace Controllers;

use MVC\Router;

class CursosController{

    public static function index(Router $router){

        $router->render('admin/cursos/index',[
            'titulo' => 'Cursos de la plataforma'
        ]);
    }
}