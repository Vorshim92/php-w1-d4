<?php

include_once __DIR__ . '/materiale_bibliotecario.php';

class DVD extends MaterialeBibliotecario
{

    protected $dvd = 0;
    protected $regista;
    public function __construct($titolo, $annoPubblicazione, $regista, $numero)
    {
        parent::__construct($titolo, $annoPubblicazione);
        $this->regista = $regista;
        $this->dvd = $numero;
        self::$contatoreLibri = $this->dvd;
    }

    public function presta($numero)
    {
        static::$contatoreMateriali += $this->dvd - $numero;
        static::$contatoreDVD += $this->dvd - $numero;
    }
}
