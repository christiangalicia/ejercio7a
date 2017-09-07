<?php


/**
 * Description of Moneda: aplicacion de ejemplo que simula una moneda
 *
 * @author christian
 */
class Moneda {
    //put your code here
    private $valor;

    /**
     * COntructor recibe un valor para iniciar la moneda
     * @param String $valor <p>
     * valor para iniciar la moneda
     * @return void
     */
    public function __construct($valor) {
        $this->valor = $valor;
    }

    /**
     * metodo que me imprime el valor de la moneda
     * @return void
     */
    public function mostrarValor(){
        echo "<b>". $this->valor ."</b>";
    }

    public function actualizarValorMoneda($valor){
        $this->valor=$valor;
    }

	

}
