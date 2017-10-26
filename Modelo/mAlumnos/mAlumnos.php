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
       $res=  $this->ConsultaPreparada("select * from alumnos where matricula=?", array($matricula));
       return $res[0];
    }
    
    public function consultarAlumnos(){
        return $this->ConsultaPreparada("select * from alumnos where estado=?", array(1));
    
    }
    public function insertarAlumno($matricula, $nombre){
       return $this->InsertarRegistrosPreparada("insert into alumnos (matricula, nombre, estado) values(?,?,?)", array($matricula,$nombre,1));
      }
    public function eliminarAlumno($matricula){
        $this->ModificarRegistrosPreparada("update alumnos set estado=0 where matricula=?", array($matricula));
    }
    public function editarAlumno($matricula,$nombre){
        
    }
}
