<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;

class RegistradosController{

    public static function index(Router $router){
        if(!is_admin()){ //checa si es admin el usuario
            header('Location: /login');
        }

        $usuarios = Usuario::all();

        $router->render('admin/registrados/index',[
            'titulo' => 'Usuarios de la plataforma',
            'usuarios' => $usuarios
        ]);
    }

    public static function eliminar(Router $router){
        if(!is_admin()){
            header('Location: /login');
        }
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!is_admin()){
                header('Location: /login');
            }

            $id = $_POST['id'];
            $usuario = Usuario::find($id);

            if(!isset($etiqueta)){
                header('Location: /admin/registrados');
            }

            $resultado = $usuario->eliminar();

            if($resultado){
                header('Location: /admin/registrados');
            }
        }
    }
}