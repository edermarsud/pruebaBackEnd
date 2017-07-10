<?php

require_once './vendor/autoload.php';

$app = new \Slim\Slim();


//index, lista de empleados
$app->map("/", 'empleados', function($email = '') use($app) {
    $titulo = 'Lista de Empleados';
    $empleados = empleados();

    if ($app->request->isGet()) {
        $email = '';
        $app->render('lista-empleados.php', compact('titulo', 'empleados', 'email'));
    } elseif ($app->request->isPost()) {
        $email = $app->request->post('txtEmail');
        $app->render('lista-empleados.php', compact('titulo', 'empleados', 'email'));
    } else {
        echo $app->request->post('name');
    }
})->via(['GET', 'POST'])->name('home.listaempleados');

//index, detalle de empleado
$app->map("/detalle-empleado/:id", 'empleados', function($id) use($app) {
    $titulo = 'Detalle de Empleado';
    $empleados = empleados($id);
    $app->render('detalle-empleado.php', compact('titulo', 'empleados'));
})->via(['GET', 'POST'])->name('home.detalleempleado');

$app->run();

function empleados($id = FALSE) {
    $data = file_get_contents("data/employees.json");
    $empleados = json_decode($data, true);

    if ($id != FALSE) {
        foreach ($empleados as $key => $empleado) {
            if ($empleado['id'] == $id) {
                return $empleados[$key];
            }
        }
    } else {
        return $empleados;
    }
}
