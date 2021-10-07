<?php
include '../entities/Coche.php';
include '../DAO/DAOFactory.php';
include '../DAO/Coches/DAOCoches.php';
include '../DAO/Coches/DAOCochesRAM.php';

$daoCoches = DAOFactory::getInstance()->getDAOCoches()->getAll();
$arrCoches = array();

foreach ($daoCoches as $coches) {
    array_push($arrCoches, array("matricula" => $coches->getMatricula(), "marca" => $coches->getMarca(), "modelo" => $coches->getModelo(), "km" => $coches->getKm()));
}
echo json_encode($arrCoches);
