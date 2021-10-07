<section>
    <ul>
        <?php
        $daoCoches = DAOFactory::getInstance()->getDAOCoches();
        $coches = array();

        if (isset($_POST['busqueda'])) {
            $busqueda = $_POST['busqueda'];
            if ($busqueda != "") {
                $coches = $daoCoches->getBusqueda($busqueda);
            } else {
                $coches = $daoCoches->getAll();
            }
        } else {
            $coches = $daoCoches->getAll();
        }

        foreach ($coches as $currCoche) {
            echo
            "<li>Matrícula: " . $currCoche->getMatricula() . "<p>
                </p>Marca: " . $currCoche->getMarca() . "</p><p>
                </p>Modelo: " . $currCoche->getModelo() .  "</p><p>
                </p>Km: " . $currCoche->getKm() . "
            </li>";
        }
        ?>

    </ul>
</section>