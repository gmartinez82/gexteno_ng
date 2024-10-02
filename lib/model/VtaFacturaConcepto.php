<?php

require_once "base/BVtaFacturaConcepto.php";

class VtaFacturaConcepto extends BVtaFacturaConcepto {

    const TIPO_VENTAS_VARIAS = 'VENTAS_VARIAS';

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
                    $error->addError(140, 'Descripcion', 'descripcion');
                }
            }
        } else {
            $error->addError(100, 'Descripcion', 'descripcion');
        }

        // ---------------------------------------------------------------------
        // codigo
        // ---------------------------------------------------------------------
        if (!Ctrl::esVacio($this->getCodigo())) {
            if (Ctrl::esMaxCaracteres(100, $this->getCodigo())) {
                $error->addError(505, 'Codigo', 'codigo');
            } else {
                $o = self::getOxCodigo($this->getCodigo());
                if ($o && $o->getId() != $this->getId()) {
                    $error->addError(140, 'Codigo', 'codigo');
                }
            }
        } else {
            //$error->addError(100, 'Codigo', 'codigo');
        }

        // ---------------------------------------------------------------------
        // cuenta contable
        // ---------------------------------------------------------------------
        if (Ctrl::esNull($this->getCntbCuentaId())) {
            $error->addError(100, 'CntbCuenta', 'cntb_cuenta_id');
        }


        $this->error = $error;
        return $error;
    }

}

?>