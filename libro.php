<?php

include_once __DIR__ . '/materiale_bibliotecario.php';

class Libro  extends MaterialeBibliotecario
{
    protected $libri;
    protected $autore;
    public function __construct($titolo, $annoPubblicazione, $autore, $numero)
    {
        parent::__construct($titolo, $annoPubblicazione);
        $this->autore = $autore;
        $this->libri = $numero;
        self::$contatoreLibri = $this->libri;
    }

    public function presta($numero)
    {
        static::$contatoreMateriali += $this->libri - $numero;
        static::$contatoreLibri += $this->libri - $numero;
    }
}
