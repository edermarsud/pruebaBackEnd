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
            <table class="table table-striped">
                <tr>
                    <td>Name</td>
                    <td><?= $empleados['name']; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?= $empleados['email']; ?></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><?= $empleados['phone']; ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?= $empleados['address']; ?></td>
                </tr>
                <tr>
                    <td>Position</td>
                    <td><?= $empleados['position']; ?></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><?= $empleados['salary']; ?></td>
                </tr>
                <tr>
                    <td>Skills</td>
                    <td>
                        <ul>
                            <?php foreach ($empleados['skills'] as $skill): ?>
                                <li><?= $skill['skill'] ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </td>
                </tr>
            </table>
            <a href="/slim">Lista de Empleados</a>
        </div>
    </body>
</html>
