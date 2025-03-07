<?php

class Disciplina {
    public $nome;
    public $estado;

    public function __construct($nome, $estado) {
        $this->nome = $nome;
        $this->estado = $estado;
    }
}

?>
