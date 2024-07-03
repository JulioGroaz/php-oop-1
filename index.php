<?php
    
    include 'Classe.php';

    
    $movie1 = new Movie("Inception", "Un thriller che sfida la mente su sogni dentro sogni.", 9);
    $movie2 = new Movie("The Matrix", "Un futuro distopico dove la realtà non è come sembra.", 10);
    
    echo $movie1->getDescription() . "<br>";
    echo $movie2->getDescription() . "<br>";
?>