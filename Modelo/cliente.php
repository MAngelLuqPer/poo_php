<?php 
class Cliente {
    private $nonbre;

    public function __construct($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
}
}
?>