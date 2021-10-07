<?php
include './components/head.php';
include './components/buscador.php';

?>
<section>
    <form action="index.php" method="POST">
        <p><label>Matricula: </label> <input type="text" name="matricula"></p>
        <p><label>Marca: </label> <input type="text" name="marca"></p>
        <p><label>Modelo: </label> <input type="text" name="modelo"></p>
        <p><label>Km: </label> <input type="text" name="km"></p>
        <input type="submit" value="Añadir">
    </form>
</section>