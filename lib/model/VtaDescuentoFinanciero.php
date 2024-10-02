<?php

require_once "base/BVtaDescuentoFinanciero.php";

class VtaDescuentoFinanciero extends BVtaDescuentoFinanciero {

    public function getValorDFDecimal() {
        $descuento_porcentual = $this->getPorcentajeDescuento();
        $descuento_decimal = ($descuento_porcentual / 100);

        return $descuento_decimal;
    }

    public function getValorDFDecimalParaSumarEnCalculo() {
        $descuento_porcentual = $this->getPorcentajeDescuento();
        $descuento_decimal = 1 - ($descuento_porcentual / 100);

        return $descuento_decimal;
    }

}

?>