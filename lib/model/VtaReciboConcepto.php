<?php

require_once "base/BVtaReciboConcepto.php";

class VtaReciboConcepto extends BVtaReciboConcepto {

    const TIPO_COBRO_FACTURA = 'COBRO_FACTURA';
    const TIPO_COBRO_ND = 'COBRO_ND';
    const TIPO_GASTOS_ADMINISTRATIVOS = 'GASTOS_ADMINISTRATIVOS';
    const TIPO_RETENCION_IIBB_MNES = 'RETENCION_IIBB_MNES';
    const TIPO_RETENCION_IIBB_BSAS = 'RETENCION_IIBB_BSAS';
    const TIPO_RETENCIONES_IVA = 'RETENCIONES_IVA';
    const TIPO_RETENCIONES_GANANCIAS = 'RETENCIONES_GANANCIAS';
    const TIPO_RETENCIONES_SUSS = 'RETENCIONES_SUSS';
    const TIPO_OTRO = 'OTRO';
    const TIPO_COMPENSACION = 'COMPENSACION';

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