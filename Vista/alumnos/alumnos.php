<?php 
include_once '../../Modelo/BD.php';
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
        <table id="alumnos">
            
         </table>
       
        <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <script>
      $.ajax({url: "../../Controlador/cAlumnos/informacionTiempoReal.php?datos=alumnos", success: function(result){
        $("#alumnos").html(result);
       }});  
      setInterval(function(){ 
    $.ajax({url: "../../Controlador/cAlumnos/informacionTiempoReal.php?datos=alumnos", success: function(result){
        $("#alumnos").html(result);
    }}); 
 
    
    
    }, 1000);       
 </script>
    </body>
</html>
