<?php

require_once "base/BGralBanco.php";

class GralBanco extends BGralBanco {

    public function control() {
        $error = new DbError();

        // ---------------------------------------------------------------------
        // descripcion
        // ---------------------------------------------------------------------
        if (Ctrl::esVacio($this->getDescripcion())) {
            $error->addError('Debe ingresar una descripcion', '', 'descripcion');
        }
        
        // ---------------------------------------------------------------------
        // codigo numerico
        // ---------------------------------------------------------------------
        if (!Ctrl::esVacio($this->getCodigoNumerico())) {
            $largo_caracteres = 5;
            if (strlen($this->getCodigoNumerico()) != $largo_caracteres) {
                $error->addError('Debe tener ' . $largo_caracteres . ' caracteres de largo', '', 'codigo_numerico');
            } else {
                $o = self::getOxCodigoNumerico($this->getCodigoNumerico());
                if ($o && $o->getId() != $this->getId()) {
                    $error->addError('Ya existe el codigo numerico', '', 'codigo_numerico');
                }
            }
        } else {
            $error->addError('Debe ingresar un codigo numerico', '', 'codigo_numerico');
        }

        return $error;
    }

}

?>