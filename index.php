<?php

include_once __DIR__ . '/dvd.php';
include_once __DIR__ . '/libro.php';



$libro1 = new Libro("Il signore degli anelli", 1954, "J.R.R. Tolkien", 10);
$libro1->presta(8);
// $libro1->presta(1);
// $libro1->presta(1);
// $libro1->presta(1);
$libro1->restituito(8);

$libro2 = new Libro("Il signore degli anelli 2", 1954, "J.R.R. Tolkien", 10);
// $libro2->presta(2);
// $libro2->presta(1);
// $libro2->restituito(3);
// $libro2->presta(10);


$dvd1 = new DVD("Inception", 2010,  "Christopher Nolan", 10);
$dvd1->presta(10);
// $dvd1->restituito(3);

echo "Numero di Libri nella biblioteca: " . MaterialeBibliotecario::contaLibri() . "<br>";

echo "Numero di DVD nella biblioteca: " . MaterialeBibliotecario::contaDVD() . "<br>";

echo "Numero di Materiali nella biblioteca: " . MaterialeBibliotecario::contaTotale() . "<br>";
