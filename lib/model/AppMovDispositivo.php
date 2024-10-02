<?php

require_once "base/BAppMovDispositivo.php";

class AppMovDispositivo extends BAppMovDispositivo {

    public function getDescripcion() {
        $texto .= ' ';
        $texto .= 'ID: ' . $this->getId();
        $texto .= ' - ';
        $texto .= $this->getMarca();
        $texto .= ' ';
        $texto .= $this->getModelo();
        $texto .= ' - ';
        $texto .= $this->getTitularApellido();
        $texto .= ', ';
        $texto .= $this->getTitularNombre();

        return $texto;
    }

}

?>