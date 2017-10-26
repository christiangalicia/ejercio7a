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
        <form id="formulario">
            <input type="hidden" name="insertar" value="1">
            Nombre <input type="text" name="nombre"><br>
            Matricula<input type="text" name="matricula">
            <a id="enviar" href="#">Registrar Alumno</a>
        </form>
        <div id="mensaje"></div>
        
              <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <script>
  $("#enviar").click(function(){

      $.post( "../../Controlador/cAlumnos/informacionTiempoReal.php",
      $( "#formulario" ).serialize() )
        .done(function( data ) {
       $("#mensaje").html(data);
  });
    });
  </script>
    </body>
</html>
