<?php

namespace Controllers;

use MVC\Router;
use Model\Etiqueta;

class EtiquetasController{

    public static function index(Router $router){
        $etiquetas = Etiqueta::all();


        $router->render('admin/etiquetas/index',[
            'titulo' => 'Administración de etiquetas',
            'etiquetas' => $etiquetas
        ]);
    }

    public static function crear(Router $router){
        $alertas = [];
        $etiqueta = new Etiqueta;

        //si se envia el form
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $etiqueta->sincronizar($_POST);
            //validar
            $alertas = $etiqueta->validar();
        }

        //crear objetoss
        $router->render('admin/etiquetas/crear',[
            'titulo' => 'Crear de etiqueta',
            'alertas' => $alertas,
            'etiqueta' => $etiqueta
        ]); 
    }
}