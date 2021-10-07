<!DOCTYPE html>
<html lang="es">

<?php
include './components/head.php';
?>

<body>
    <main>
        <?php
        include './entities/Coche.php';
        include './DAO/DAOFactory.php';
        include './DAO/Coches/DAOCoches.php';
        include './DAO/Coches/DAOCochesRAM.php';
        ?>
        <?php
        include './components/buscador.php';

        ?>
        <ul>
            <?php

            if (isset($_POST['matricula'])) {
                $matricula = $_POST['matricula'];
                $marca = $_POST['marca'];
                $modelo = $_POST['modelo'];
                $km = $_POST['km'];

                echo
                "<li>Matrícula: " . $matricula . "<p>
                        </p>Marca: " . $marca  . "</p><p>
                        </p>Modelo: " . $modelo .  "</p><p>
                        </p>Km: " . $km . "
                    </li>";
            }
            include './components/listaCoches.php';

            ?>
        </ul>


    </main>
</body>

<?php
?>

</html>