<?php 
    require_once 'cliente.php';
    require_once 'ProductoFisico.php';
    $c1 = new Cliente("Lolito Fernandez");
    $c2 = new Cliente("Alva Majo");

    $productofisico = new ProductoFisico("Laptop",1000,8);
    echo "Nombre: ".$productofisico->getNombre(). ", precio: ".$productofisico->getPrecio().", peso: ".$productofisico->calcularPrecioFinal();


?>

<ol>
    <li><?= $c1->getNombre()?></li>
    <li><?= $c2->getNombre()?></li>
    
</ol>