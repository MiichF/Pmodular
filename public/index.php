<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AuthController;
use Controllers\DashboardController;
use Controllers\CursosController;
use Controllers\CategoriasController;
use Controllers\EtiquetasController;
use Controllers\RegistradosController;

$router = new Router();


// Login
$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout']);

// Crear Cuenta
$router->get('/registro', [AuthController::class, 'registro']);
$router->post('/registro', [AuthController::class, 'registro']);

// Formulario de olvide mi password
$router->get('/olvide', [AuthController::class, 'olvide']);
$router->post('/olvide', [AuthController::class, 'olvide']);

// Colocar el nuevo password
$router->get('/reestablecer', [AuthController::class, 'reestablecer']);
$router->post('/reestablecer', [AuthController::class, 'reestablecer']);

// Confirmación de Cuenta
$router->get('/mensaje', [AuthController::class, 'mensaje']);
$router->get('/confirmar-cuenta', [AuthController::class, 'confirmar']);


// Area de Administración
// Dashboard
$router->get('/admin/dashboard', [DashboardController::class, 'index']);

// Cursos
$router->get('/admin/cursos', [CursosController::class, 'index']);

// Categorias
$router->get('/admin/categorias', [CategoriasController::class, 'index']);

// Etiquetas
$router->get('/admin/etiquetas', [EtiquetasController::class, 'index']);
$router->get('/admin/etiquetas/crear', [EtiquetasController::class, 'crear']);
$router->post('/admin/etiquetas/crear', [EtiquetasController::class, 'crear']);
$router->get('/admin/etiquetas/editar', [EtiquetasController::class, 'editar']);
$router->post('/admin/etiquetas/editar', [EtiquetasController::class, 'editar']);
$router->post('/admin/etiquetas/eliminar', [EtiquetasController::class, 'eliminar']);

// Registrados
$router->get('/admin/registrados', [RegistradosController::class, 'index']);
$router->post('/admin/registrados/eliminar', [RegistradosController::class, 'eliminar']);


$router->comprobarRutas();