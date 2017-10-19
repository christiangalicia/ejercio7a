<?php 
include_once '../../Modelo/bd.php';
include_once '../../Modelo/mAlumnos/mAlumnos.php';
include_once '../../Controlador/cAlumnos/cAlumnos.php';
$controlador = new cAlumnos();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../asset/estilo.css">
    </head>
    <body>
        <table>
            <tr><td>Matricula</td>
                <td>Nombre</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
            <?php echo $controlador->mostrarAlumnos(); ?>
            
        </table>
       
        
    </body>
</html>
