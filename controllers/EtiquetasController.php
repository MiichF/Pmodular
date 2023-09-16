<?php

namespace Controllers;

use MVC\Router;
use Model\Etiqueta;

class EtiquetasController{

    public static function index(Router $router){
        if(!is_admin()){ //checa si es admin el usuario
            header('Location: /login');
        }

        $etiquetas = Etiqueta::all();

        $router->render('admin/etiquetas/index',[
            'titulo' => 'Administración de etiquetas',
            'etiquetas' => $etiquetas
        ]);
    }

    public static function crear(Router $router){
        if(!is_admin()){
            header('Location: /login');
        }

        $alertas = [];
        $etiqueta = new Etiqueta;

        //si se envia el form
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!is_admin()){
                header('Location: /login');
            }

            $etiqueta->sincronizar($_POST);

            //validar
            $alertas = $etiqueta->validar();

            //almacenar
            if(empty($alertas)){
                $resultado = $etiqueta->guardar();

                if($resultado){
                    header('Location: /admin/etiquetas');
                }
            }
        }

        //crear objetoss
        $router->render('admin/etiquetas/crear',[
            'titulo' => 'Crear de etiqueta',
            'alertas' => $alertas,
            'etiqueta' => $etiqueta
        ]); 
    }

    public static function editar(Router $router){
        if(!is_admin()){
            header('Location: /login');
        }

        $alertas = [];
        //validar id de objeto
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        
        //si no hay id
        if(!$id){
            header('Location: /admin/etiquetas');
        }

        //obtener objeto a editar
        $etiqueta = Etiqueta::find($id);

        //si no encuentra objeto
        if(!$etiqueta) {
            header('Location: /admin/etiquetas');
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!is_admin()){
                header('Location: /login');
            }

            $etiqueta->sincronizar($_POST);

            //validar
            $alertas = $etiqueta->validar();

            //almacenar
            if(empty($alertas)){
                $resultado = $etiqueta->guardar();

                if($resultado){
                    header('Location: /admin/etiquetas');
                }
            }
        }

        $router->render('admin/etiquetas/editar',[
            'titulo' => 'Editar etiqueta',
            'alertas' => $alertas,
            'etiqueta' => $etiqueta
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
            $etiqueta = Etiqueta::find($id);

            if(!isset($etiqueta)){
                header('Location: /admin/etiquetas');
            }

            $resultado = $etiqueta->eliminar();

            if($resultado){
                header('Location: /admin/etiquetas');
            }
        }
    }
}