<?php

class DAOCochesRAM implements DAOCoches
{

    public function getAll()
    {
        return array(
            new Coche(123, "Opel", "Corsa", 100000),
            new Coche(456, "Renault", "Megane", 5000),
            new Coche(789, "Ford", "Focus", 25000)
        );
    }

    public function getBusqueda($busqueda)
    {
        $coches = $this->getAll();
        $cochesRelacion = array();

        foreach ($coches as $currCoche) {
            if (strpos($currCoche->getMatricula(), $busqueda) !== false) {
                array_push($cochesRelacion, $currCoche);
            }
        }
        return $cochesRelacion;
    }
}
