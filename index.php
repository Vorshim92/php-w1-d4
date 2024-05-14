<?php

include_once __DIR__ . '/dvd.php';
include_once __DIR__ . '/libro.php';



$libro1 = new Libro("Il signore degli anelli", 1954, "J.R.R. Tolkien", 2);
// $libro1->presta(1);
$libro2 = new Libro("Il signore degli anelli 2", 1954, "J.R.R. Tolkien", 2);
// $libro2->presta(2);
// $libro2->presta(3);


$dvd1 = new DVD("Inception", 2010,  "Christopher Nolan", 1);

echo "Numero di Libri nella biblioteca: " . MaterialeBibliotecario::contaLibri() . "<br>";

echo "Numero di DVD nella biblioteca: " . MaterialeBibliotecario::contaDVD() . "<br>";

echo "Numero di Materiali nella biblioteca: " . MaterialeBibliotecario::contaTotale() . "<br>";
