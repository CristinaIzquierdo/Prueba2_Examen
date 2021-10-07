<?php


class Coche
{
    private $matricula;
    private $marca;
    private $modelo;
    private $km;

    public function __construct($matricula, $marca, $modelo, $km)
    {
        $this->matricula = $matricula;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->km = $km;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function getKm()
    {
        return $this->km;
    }
}
