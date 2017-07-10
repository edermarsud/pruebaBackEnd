<?php
//echo "<pre>";
//print_r($empleados);
//echo "</pre>";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Developers SAC :: <?= $titulo ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <head>
    <body>
        <div class="container">


            <h1><?= $titulo ?></h1>

            <form name="frmBucarEmpleado" action="/slim/" method="post" >
                Buscar por email:
                <input type="text" name="txtEmail" >
                <button>Buscar</button>
            </form>

            <table class="table table-striped">
                <thead>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Position</th>
                <th>Salary</th>
                <th></th>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                    <?php foreach ($empleados as $empleado): ?>
                        <?php
                        if (!empty($email)) {
                            $buscar = strstr($empleado['email'], $email);
                            if (empty($buscar)) {
                                continue;
                            }
                        }
                        $i++
                        ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $empleado['name']; ?></td>
                            <td><?= $empleado['email']; ?></td>
                            <td><?= $empleado['position']; ?></td>
                            <td><?= $empleado['salary']; ?></td>
                            <td>
                                <a href="detalle-empleado/<?= $empleado['id']; ?>">
                                    Detalle
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
