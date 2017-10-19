<?php 
include_once '../../Modelo/bd.php';
include_once '../../Modelo/mAlumnos/mAlumnos.php';
include_once '../../Controlador/cAlumnos/Alumno.php';
include_once '../../Controlador/cAlumnos/cAlumnos.php';
$controlador = new cAlumnos();
$alumno= $controlador->getAlumno();
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
        <h2>Estas seguro de eliminar al alumno?</h2>
        <form method="post" action="eliminarAlumno.php">
            <input type="text" value="<?php echo $alumno->nombre; ?>" readonly="">
            <input type="hidden" name="eliminar" value="1">
            <input type="hidden" value="<?php echo $alumno->matricula; ?>" name="matricula">
            <input type="submit" value="Eliminar">
        </form>
    </body>
</html>
