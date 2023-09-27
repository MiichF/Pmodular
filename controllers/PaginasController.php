<?php

namespace Controllers;
use MVC\Router;

class PaginasController {
    public static function index(Router $router) {

        $router->render('paginas/index', [
            'titulo' => 'Inicio'
        ]);
    
    }

    public static function cursos(Router $router) {

        $router->render('paginas/cursos', [
            'titulo' => 'Cursos'
        ]);
    
    }

    public static function noticias(Router $router) {

        $router->render('paginas/noticias', [
            'titulo' => 'Noticias'
        ]);
    
    }

    public static function foro(Router $router) {

        $router->render('paginas/foro', [
            'titulo' => 'Foro'
        ]);
    
    }

    public static function studentwebcamp(Router $router) {

        $router->render('paginas/studentwebcamp', [
            'titulo' => 'Sobre nosotros'
        ]);
    
    }
}