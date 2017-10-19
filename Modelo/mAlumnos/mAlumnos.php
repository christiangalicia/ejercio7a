<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mAlumnos
 *
 * @author christian
 */
class mAlumnos extends BD {
   
    public function consultarAlumno($matricula){
        return $this->ConsultarRegistro("alumnos", "matricula=?", array($matricula));
    }
    
    public function consultarAlumnos(){
       return $this->ConsultaAsociativa("alumnos", "estado=?", array(1));
    }
    public function insertarAlumno($matricula, $nombre){
$this->InsertarRegistros("alumnos", "matricula,nombre,estado", array(array($matricula,$nombre,1)));
    }
    public function eliminarAlumno($matricula){
        $this->EliminarRegistro("alumnos", "matricula=?", array($matricula));
    }
    public function editarAlumno($matricula,$nombre){
        
    }
}
