<?php

require_once "base/BInsInsumoBulto.php";

class InsInsumoBulto extends BInsInsumoBulto {

    public function getDescripcion() {
        $texto = '';
        $texto .= $this->getInsUnidadMedida()->getDescripcion();
        $texto .= ' de ' . $this->getCantidad();

        return $texto;
    }

    /* Control de BInsInsumoBulto */

    public function control() {
        $error = new DbError();


        $this->error = $error;
        return $error;
    }

}

?>