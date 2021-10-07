<?php

class DAOFactory
{
    private static $daoFactory;
    private $daoCoches;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!isset($daoFactory)) {
            $daoFactory = new DAOFactory();
        }
        return $daoFactory;
    }

    public function getDAOCoches()
    {
        if (!isset($daoCoches)) {
            $daoCoches = new DAOCochesRAM();
        }
        return $daoCoches;
    }
}
