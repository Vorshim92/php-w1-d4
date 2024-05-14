<?php

include_once __DIR__ . '/materiale_bibliotecario.php';

class Libro  extends MaterialeBibliotecario
{
    protected $libri = 0;
    protected $autore;
    public function __construct($titolo, $annoPubblicazione, $autore, $numeroLibri)
    {
        parent::__construct($titolo, $annoPubblicazione);
        $this->autore = $autore;
        $this->libri = $numeroLibri;
        self::$contatoreLibri += $this->libri;
        self::$contatoreMateriali += $this->libri;
    }

    public function presta($numero)
    {
        if ($numero <= $this->libri) {
            $this->libri -=  $numero;
            static::$contatoreMateriali -=  $numero;
            static::$contatoreLibri -= $numero;
        } else {
            echo "<br>" . "non ci sono più libri di questo tipo"  . "<br>";
        }
    }
}
