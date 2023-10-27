<?php

namespace Controllers;

use MVC\Router;
use Model\Categoria;

class CategoriasController{

    public static function index(Router $router){
        if(!is_admin()){ //checa si es admin el usuario
            header('Location: /login');
        }

        $etiquetas = Etiqueta::all();

        $router->render('admin/categorias/index',[
            'titulo' => 'Administración de categorias',
            'categorias' => $categorias
        ]);
    }
}