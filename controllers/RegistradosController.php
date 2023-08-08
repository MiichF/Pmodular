<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;

class RegistradosController{

    public static function index(Router $router){

        $router->render('admin/registrados/index',[
            'titulo' => 'Usuarios de la plataforma'
        ]);
    }
}