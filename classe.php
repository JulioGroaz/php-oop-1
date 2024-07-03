<?php

class Movie{
    public $nome;
    public $descrizione;
    public $voto;
    /**
     * Costruttore per la classe
     *
     * @param [string] $nome
     * @param [string] $descrizione
     * @param [int] $voto
     */
    public function __construct($nome, $descrizione, $voto) {
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->voto = $voto;
    }
    

    /**
     * Questa function ritorna la descrizione del film
     *
     * @return string Titolo, descrizione e voto
     */
    public function getDescription() {
        return "Titolo: " . $this->nome . ", Descrizione: " . $this->descrizione . ", Voto: " . $this->voto . "/10";
    }
    

    /**
     * Questa function restituisce il titolo del film
     *
     * @return string Il titolo del libro
     */
    public function getTitle() {
        return $this->nome;
    }

    /**
     * Questa function restituisce la descrizione del film
     *
     * @return string La descrizione del film
     */
    public function getDescriptionText() {
        return $this->descrizione;
    }

    /**
     * Questa function restituisce il voto del film
     *
     * @return int voto del film
     */
    public function getRating() {
        return $this->voto;
    }
}





?>