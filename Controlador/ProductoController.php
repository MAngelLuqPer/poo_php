<?php
class ProductoController{
    //private $Servicio;

    public function __construct(){
        //Aqui creamos la construccion del objeto del Servicio

    }
    public function listarProducto(){
        //Usar el atributo servicio y traerse los datos de BBDD para mostrarlo
}

public function ejecuta(){
    $producto = $this->listarProducto();
    //Cargar la lista y guarda los productos
    require_once("Vista/Main.php");
}

?>