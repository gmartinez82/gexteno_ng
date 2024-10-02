<?php

require_once "base/BPdeTributoExencion.php";

class PdeTributoExencion extends BPdeTributoExencion {

    public function getDescripcion() {
        $texto = '';

        $texto .= 'Exento ';
        $texto .= $this->getPdeTributo()->getDescripcion();

        return $texto;
    }

    public function control() {
        $error = new DbError();

        // ---------------------------------------------------------------------
        // tributo
        // ---------------------------------------------------------------------
        if (Ctrl::esNull($this->getPdeTributoId())) {
            $error->addError(100, 'Tributo', 'pde_tributo_id');
        }

        $this->error = $error;
        return $error;
    }

}

?>