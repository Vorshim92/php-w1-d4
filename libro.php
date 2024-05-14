<?php

include_once __DIR__ . '/materiale_bibliotecario.php';

class Libro  extends MaterialeBibliotecario
{
    protected $libriDisponibili = 0;
    protected $libri = 0;
    protected $autore;
    public function __construct($titolo, $annoPubblicazione, $autore, $numeroLibri)
    {
        parent::__construct($titolo, $annoPubblicazione);
        $this->autore = $autore;
        $this->libri = $numeroLibri;
        $this->libriDisponibili = $numeroLibri;
        self::$contatoreLibri += $this->libri;
        self::$contatoreMateriali += $this->libri;
    }

    public function presta($numero)
    {
        if ($numero <= $this->libriDisponibili) {
            $this->libriDisponibili -=  $numero;
            static::$contatoreMateriali -=  $numero;
            static::$contatoreLibri -= $numero;
        } else {
            echo "<br>" . "non ci sono più libri di questo tipo"  . "<br>";
        }
    }
    public function restituito($numero)
    {
        if (($this->libriDisponibili + $numero <= $this->libri)) {
            $this->libriDisponibili +=  $numero;
            static::$contatoreMateriali +=  $numero;
            static::$contatoreLibri += $numero;
        } else {
            echo "<br>" . "mi stai ritornando piu libri di quanti ne posseggo"  . "<br>";
        }
    }
}
