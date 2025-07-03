<?php

class Carro {
    public $cor;
    public $modelo;
    public $marca;

    //MÉTODOS
    public function acelerar() {
        echo "Fuga";
    }

    public function frear() {
        echo "Pare o carro";
    }
}

// HERANÇA = EXTENDS
class CarroEletrico extends Carro {
    // POLIMORFISMO = PUBLIC, PRIVATE ou PROTECTED
    public $autonomia;

    public function recarregar() {
        echo "Carregando!";
    }
}

?>