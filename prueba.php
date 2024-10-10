<?php 
    require_once 'cliente.php';
    $c1 = new Cliente("Lolito Fernandez");
    $c2 = new Cliente("Alva Majo");

?>

<ol>
    <li><?= $c1->getNombre()?></li>
</ol>