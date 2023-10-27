<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AuthController;
use Controllers\DashboardController;
use Controllers\CursosController;
use Controllers\CategoriasController;
use Controllers\EtiquetasController;
use Controllers\RegistradosController;
use Controllers\PaginasController;

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


// -----------------Area de Administración-----------------
// Dashboard
$router->get('/admin/dashboard', [DashboardController::class, 'index']);

// Cursos
$router->get('/admin/cursos', [CursosController::class, 'index']);
$router->get('/admin/cursos/crear', [CursosController::class, 'crear']);
$router->post('/admin/cursos/crear', [CursosController::class, 'crear']);
$router->get('/admin/cursos/editar', [CursosController::class, 'editar']);
$router->post('/admin/cursos/editar', [CursosController::class, 'editar']);
$router->post('/admin/cursos/eliminar', [CursosController::class, 'eliminar']);

// Bloques
$router->get('/admin/bloques', [CursosController::class, 'index']);
$router->get('/admin/bloques/crear', [CursosController::class, 'crear']);
$router->post('/admin/bloques/crear', [CursosController::class, 'crear']);
$router->get('/admin/bloques/editar', [CursosController::class, 'editar']);
$router->post('/admin/bloques/editar', [CursosController::class, 'editar']);
$router->post('/admin/bloques/eliminar', [CursosController::class, 'eliminar']);

// Categorias
$router->get('/admin/categorias', [CursosController::class, 'index']);
$router->get('/admin/categorias/crear', [CursosController::class, 'crear']);
$router->post('/admin/categorias/crear', [CursosController::class, 'crear']);
$router->get('/admin/categorias/editar', [CursosController::class, 'editar']);
$router->post('/admin/categorias/editar', [CursosController::class, 'editar']);
$router->post('/admin/categorias/eliminar', [CursosController::class, 'eliminar']);
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


// -----------------Area Pública-----------------
$router->get('/', [PaginasController::class, 'index']);
$router->get('/cursos', [PaginasController::class, 'cursos']);
$router->get('/noticias', [PaginasController::class, 'noticias']);
$router->get('/foro', [PaginasController::class, 'foro']);
$router->get('/studentwebcamp', [PaginasController::class, 'studentwebcamp']);


$router->comprobarRutas();