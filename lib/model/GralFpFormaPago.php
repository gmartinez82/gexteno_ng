<?php

require_once "base/BGralFpFormaPago.php";

class GralFpFormaPago extends BGralFpFormaPago {

    CONST TIPO_EFECTIVO = 'CONTADO';
    CONST TIPO_CONTADO = 'CONTADO';
    CONST TIPO_CUENTA_CORRIENTE = 'CUENTA_CORRIENTE';
    CONST TIPO_CHEQUE = 'CHEQUE';

    /* Control */

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
        // cuenta contable compra
        // ---------------------------------------------------------------------
        if ($this->getCntbCuentaCompra() == 'null') {
            $error->addError(100, 'CntbCuentaCompra', 'cntb_cuenta_compra');
        }

        // ---------------------------------------------------------------------
        // cuenta contable venta
        // ---------------------------------------------------------------------
        if ($this->getCntbCuentaVenta() == 'null') {
            $error->addError(100, 'CntbCuentaVenta', 'cntb_cuenta_venta');
        }
        

        return $error;
    }

    static function getGralFpFormaPagosCmbDeCompra($estado = true) {
        $criterio = new Criterio();

        if ($estado) {
            $criterio->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        }

        $criterio->add(GralFpFormaPago::GEN_ATTR_PARA_COMPRA, 1, Criterio::IGUAL);
        $criterio->addTabla(GralFpFormaPago::GEN_TABLA);
        $criterio->addOrden(GralFpFormaPago::GEN_ATTR_DESCRIPCION, Criterio::_ASC);        
        $criterio->setCriterios();

        $arr = self::getGralFpFormaPagosCmbF(null, $criterio);

        return $arr;
    }

    static function getGralFpFormaPagosCmbDeVenta($estado = true) {
        $criterio = new Criterio();

        if ($estado) {
            $criterio->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        }

        $criterio->add(GralFpFormaPago::GEN_ATTR_PARA_VENTA, 1, Criterio::IGUAL);
        $criterio->addTabla(GralFpFormaPago::GEN_TABLA);
        $criterio->addOrden(GralFpFormaPago::GEN_ATTR_DESCRIPCION, Criterio::_ASC);        
        $criterio->setCriterios();

        $arr = self::getGralFpFormaPagosCmbF(null, $criterio);

        return $arr;
    }

    static function getGralFpFormaPagosCmbDeCobro($estado = true) {
        $criterio = new Criterio();

        if ($estado) {
            $criterio->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        }

        $criterio->add(GralFpFormaPago::GEN_ATTR_PARA_COBRO, 1, Criterio::IGUAL);
        $criterio->addTabla(GralFpFormaPago::GEN_TABLA);
        $criterio->addOrden(GralFpFormaPago::GEN_ATTR_DESCRIPCION, Criterio::_ASC);        
        $criterio->setCriterios();

        $arr = self::getGralFpFormaPagosCmbF(null, $criterio);

        return $arr;
    }

    static function getGralFpFormaPagosCmbDePago($estado = true) {
        $criterio = new Criterio();

        if ($estado) {
            $criterio->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        }

        $criterio->add(GralFpFormaPago::GEN_ATTR_PARA_PAGO, 1, Criterio::IGUAL);
        $criterio->addTabla(GralFpFormaPago::GEN_TABLA);
        $criterio->addOrden(GralFpFormaPago::GEN_ATTR_DESCRIPCION, Criterio::_ASC);        
        $criterio->setCriterios();

        $arr = self::getGralFpFormaPagosCmbF(null, $criterio);

        return $arr;
    }

    static function getGralFpFormaPagosCmbRequiereConciliacion($estado = true) {
        $criterio = new Criterio();
        if ($estado) {
            $criterio->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        }
        $criterio->add(GralFpFormaPago::GEN_ATTR_REQUIERE_CONCILIACION, 1, Criterio::IGUAL);
        $criterio->addTabla(GralFpFormaPago::GEN_TABLA);
        $criterio->addOrden(GralFpFormaPago::GEN_ATTR_DESCRIPCION, Criterio::_ASC);        
        $criterio->setCriterios();

        $arr = self::getGralFpFormaPagosCmbF(null, $criterio);

        return $arr;
    }
    
    static function getGralFpFormaPagosParaTiendaCmb($cli_categoria) {
        $criterio = new Criterio();
        $criterio->add(GralFpFormaPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        if ($cli_categoria) {
            $criterio->add(CliCategoria::GEN_ATTR_ID, $cli_categoria->getId(), Criterio::IGUAL);
        }
        $criterio->addTabla(GralFpFormaPago::GEN_TABLA);
        $criterio->addRealJoin(CliCategoriaGralFpFormaPago::GEN_TABLA, CliCategoriaGralFpFormaPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID, GralFpFormaPago::GEN_ATTR_ID);
        $criterio->addRealJoin(CliCategoria::GEN_TABLA, CliCategoria::GEN_ATTR_ID, CliCategoriaGralFpFormaPago::GEN_ATTR_CLI_CATEGORIA_ID);
        $criterio->addOrden(GralFpFormaPago::GEN_ATTR_ORDEN, Criterio::_ASC);
        $criterio->setCriterios();

        $arr = self::getGralFpFormaPagosCmbF(null, $criterio);

        return $arr;
    }

}

?>