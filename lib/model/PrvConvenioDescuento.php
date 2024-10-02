<?php

require_once "base/BPrvConvenioDescuento.php";

class PrvConvenioDescuento extends BPrvConvenioDescuento {

    public function control() {
        $error = new DbError();

        // ---------------------------------------------------------------------
        // descripcion
        // ---------------------------------------------------------------------
        if (!Ctrl::esVacio($this->getDescripcion())) {
            if (Ctrl::esMaxCaracteres(100, $this->getDescripcion())) {
                $error->addError(505, 'Descripcion', 'descripcion');
            } else {
                $o = self::getOxDescripcion($this->getDescripcion());
                if ($o && $o->getId() != $this->getId()) {
                    //$error->addError(140, 'Descripcion', 'descripcion');
                }
            }
        } else {
            $error->addError(100, 'Descripcion', 'descripcion');
        }

        // ---------------------------------------------------------------------
        // porcentaje descuento
        // ---------------------------------------------------------------------
        if ($this->getPorcentajeDescuento() == 0) {
            $error->addError('Debe ingresar un valor mayor a cero', 'Porcentaje Descuento', 'porcentaje_descuento');
        }

        $this->error = $error;
        return $error;
    }

}

?>