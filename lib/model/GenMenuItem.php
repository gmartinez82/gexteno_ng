<?php

require_once "base/BGenMenuItem.php";

class GenMenuItem extends BGenMenuItem {
    /* Control de BGenMenuItem */

    public function control() {
        $error = new DbError();

        // ---------------------------------------------------------------------
        // descripcion
        // ---------------------------------------------------------------------
        if (!Ctrl::esVacio(trim($this->getDescripcion()))) {
            if (Ctrl::esMaxCaracteres(100, $this->getDescripcion())) {
                $error->addError(505, 'Descripcion', 'descripcion');
            } else {
                $o = self::getOxDescripcion(trim($this->getDescripcion()));
                if ($o && $o->getId() != $this->getId()) {
                    //$error->addError(140, 'Descripcion', 'descripcion');
                }
            }
        } else {
            $error->addError(100, 'Descripcion', 'descripcion');
        }

        // ---------------------------------------------------------------------
        // codigo
        // ---------------------------------------------------------------------
        if (!Ctrl::esVacio(trim($this->getCodigo()))) {
            if (Ctrl::esMaxCaracteres(100, $this->getCodigo())) {
                $error->addError(505, 'Codigo', 'codigo');
            } else {
                $o = self::getOxCodigo(trim($this->getCodigo()));
                if ($o && $o->getId() != $this->getId()) {
                    $error->addError(140, 'Codigo', 'codigo');
                }
            }
        } else {
            //$error->addError(100, 'Codigo', 'codigo');
        }


        $this->error = $error;
        return $error;
    }

}

?>