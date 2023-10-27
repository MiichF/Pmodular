<?php

namespace Controllers;

use Model\Bloque;
use Model\Categoria;
use MVC\Router;

class BloquesController {
    public static function index(Router $router){
        if(!is_admin()){ //checa si es admin el usuario
            header('Location: /login');
        }

        $alertas = [];
        //validar id de objeto
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        
        //si no hay id
        if(!$id){
            header('Location: /admin/cursos');
        }

        //obtener objeto a editar
        $etiqueta = Categoria::find($id);

        $bloques = Bloque::all();

        $router->render('admin/cursos/id/bloques/index',[
            'titulo' => 'Bloques del curso',
            'etiquetas' => $etiquetas
        ]);
    }
}
