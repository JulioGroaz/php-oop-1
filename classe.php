<?php

class Movie{
    public $nome;
    public $descrizione;
    public $voto;

    public function __construct($nome, $descrizione, $voto) {
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->voto = $voto;
    }

    public function getDescription() {
        return "Titolo: " . $this->nome . ", Descrizione: " . $this->descrizione . ", Voto: " . $this->voto . "/10";
    }
}





?>