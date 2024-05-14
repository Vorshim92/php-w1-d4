<?php

include_once __DIR__ . '/materiale_bibliotecario.php';

class DVD extends MaterialeBibliotecario
{
    protected $dvdDisponibili = 0;
    protected $dvd = 0;
    protected $regista;
    public function __construct($titolo, $annoPubblicazione, $regista, $numeroDvD)
    {
        parent::__construct($titolo, $annoPubblicazione);
        $this->regista = $regista;
        $this->dvd = $numeroDvD;
        $this->dvdDisponibili = $numeroDvD;
        self::$contatoreDVD += $this->dvd;
        self::$contatoreMateriali += $this->dvd;
    }

    public function presta($numero)
    {
        if ($numero <= $this->dvdDisponibili) {
            $this->dvdDisponibili -=  $numero;
            static::$contatoreMateriali -=  $numero;
            static::$contatoreDVD -= $numero;
        } else {
            echo "<br>" . "non ci sono più dvd di questo tipo"  . "<br>";
        }
    }
    public function restituito($numero)
    {
        if (($this->dvdDisponibili + $numero <= $this->dvd)) {
            $this->dvdDisponibili +=  $numero;
            static::$contatoreMateriali +=  $numero;
            static::$contatoreDVD += $numero;
        } else {
            echo "<br>" . "mi stai ritornando piu dvd di quanti ne posseggo"  . "<br>";
        }
    }
}
