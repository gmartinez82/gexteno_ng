<?php

require_once "base/BCntbDiarioAsientoCuenta.php";

class CntbDiarioAsientoCuenta extends BCntbDiarioAsientoCuenta {

    public function getTipoAfectacionDeCuenta() {
        $texto = '';

        $cntb_cuenta = $this->getCntbCuenta();
        $cntb_tipo_cuenta = $cntb_cuenta->getCntbTipoCuenta();
        $cnt_tipo_clasificacion = $cntb_tipo_cuenta->getCntbTipoClasificacion();

        switch ($cntb_tipo_cuenta->getCodigo()) {
            case CntbTipoCuenta::TIPO_ACTIVO:
                $texto = ($this->getImporteDebe() > 0) ? 'A+' : 'A-';
                break;
            case CntbTipoCuenta::TIPO_PASIVO:
                $texto = ($this->getImporteDebe() > 0) ? 'P-' : 'P+';
                break;
            case CntbTipoCuenta::TIPO_PATRIMONIO_NETO:
                $texto = ($this->getImporteDebe() > 0) ? 'PN+' : 'PN-';
                break;
            case CntbTipoCuenta::TIPO_INGRESOS:
                $texto = ($this->getImporteDebe() > 0) ? 'RI+' : 'RI-';
                break;
            case CntbTipoCuenta::TIPO_EGRESOS:
                $texto = ($this->getImporteDebe() > 0) ? 'RI-' : 'RE+';
                break;
        }

        return $texto;
    }

}

?>