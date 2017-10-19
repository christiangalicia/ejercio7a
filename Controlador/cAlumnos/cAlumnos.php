<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cAlumnos
 *
 * @author christian
 */
class cAlumnos {
    private $modelo;
    public function __construct() {
        $this->modelo= new mAlumnos();
        if(isset($_POST["eliminar"])){
            $m = (int)$_POST["matricula"];
            $this->modelo->eliminarAlumno($m);
            header("location: alumnos.php");
        }else if(isset ($_POST["insertar"])){
            $this->modelo->insertarAlumno($_POST["matricula"], $_POST["nombre"]);
           header("location: alumnos.php");
        }
        
    }
    public function getAlumno(){
        $alumno = new Alumno();
        
        if (isset($_GET["m"])){
            $matricula= (int)$_GET["m"];
            $r=$this->modelo->consultarAlumno($matricula);
            $alumno->matricula=$r["matricula"];
            $alumno->nombre= $r["nombre"];
            $alumno->estado= $r["estado"];
        }else{
            $alumno->matricula=0;
            $alumno->nombre="";
            $alumno->estado=0;
        }
        return $alumno;
    }
    
    public function mostrarAlumnos(){
       $reg= $this->modelo->consultarAlumnos();
       $acu="";
       foreach ($reg as $r) {
         $acu .='<tr><td>'.$r["matricula"].'</td>
                <td>'.$r["nombre"].'</td>
                <td><a href="editarAlumno.php?m='.$r["matricula"].'">Editar</a></td>
                <td><a href="eliminarAlumno.php?m='.$r["matricula"].'">Eliminar</a></td>
                
            </tr>' ; 
       }
       return $acu;
       
    }
    
}
