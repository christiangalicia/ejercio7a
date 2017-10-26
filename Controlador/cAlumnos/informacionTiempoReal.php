<?php
include_once '../../Modelo/BD.php';
include_once '../../Modelo/mAlumnos/mAlumnos.php';
include_once '../cAlumnos/cAlumnos.php';
$modelo = new mAlumnos();
$cAlumnos = new cAlumnos();
if(isset($_GET["datos"])){
    if($_GET["datos"]=="alumnos"){
    echo $cAlumnos->mostrarAlumnos();
    }
    else if($_GET["datos"]=="alumnas"){
        
    }
}
if($_POST){
    if(isset ($_POST["insertar"])){
           if( $modelo->insertarAlumno($_POST["matricula"], $_POST["nombre"])){
               echo "<div style='background:green'>Rregistro Insertado</div>";
           }else{
                 echo "<div style='background:red'>error</div>";
             
           }
            //header("location: alumnos.php");
    }
}

