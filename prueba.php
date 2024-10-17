<?php 
    require_once 'Modelo/cliente.php';
    require_once 'Modelo/ProductoFisico.php';
    $c1 = new Cliente("Lolito Fernandez");
    $c2 = new Cliente("Alva Majo");

    $productofisico = new ProductoFisico("Laptop",1000,8);
    echo "Nombre: ".$productofisico->getNombre(). ", precio: ".$productofisico->getPrecio().", peso: ".$productofisico->calcularPrecioFinal();


?>

<ol>
    <li><?= $c1->getNombre()?></li>
    <li><?= $c2->getNombre()?></li>
    
</ol>