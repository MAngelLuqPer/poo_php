<?php 
    require_once 'cliente.php';
    $c1 = new Cliente("Lolito Fernandez");
    $c2 = new Cliente("Alva Majo");

?>

<ol>
    <li><?= $c1->getNombre()?></li>
    <li><?= $c2->getNombre()?></li>
    
</ol>