<?php

include_once __DIR__ . '/prestito.php';

abstract class MaterialeBibliotecario implements Prestito
{
    protected static $contatoreMateriali = 0;
    protected static $contatoreLibri = 0;
    protected static $contatoreDVD = 0;
    protected $titolo;
    protected $annoPubblicazione;
    protected $prestato = false;



    public function __construct($titolo, $annoPubblicazione,)
    {
        $this->titolo = $titolo;
        $this->annoPubblicazione = $annoPubblicazione;
    }

    public static function contaTotale()
    {
        return static::$contatoreMateriali;
    }

    public static function contaLibri()
    {
        return static::$contatoreLibri;
    }

    public static function contaDVD()
    {
        return static::$contatoreDVD;
    }
}
