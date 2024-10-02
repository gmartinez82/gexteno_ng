<?php

require_once "base/BVtaTributoExencion.php";

class VtaTributoExencion extends BVtaTributoExencion {

    public function getDescripcion() {
        $texto = '';

        $texto .= 'Exento ';
        $texto .= $this->getVtaTributo()->getDescripcion();

        return $texto;
    }

    public function control() {
        $error = new DbError();

        // ---------------------------------------------------------------------
        // tributo
        // ---------------------------------------------------------------------
        if (Ctrl::esNull($this->getVtaTributoId())) {
            $error->addError(100, 'Tributo', 'vta_tributo_id');
        }
        
        $this->error = $error;
        return $error;
    }

}

?>