<?php

require_once "base/BGralFpCuota.php";

class GralFpCuota extends BGralFpCuota {

    /**
     * 
     */
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
        // medio de pago
        // ---------------------------------------------------------------------
        if (Ctrl::esNull($this->getGralFpMedioPagoId())) {
            $error->addError(100, 'GralFpMedioPago', 'gral_fp_medio_pago_id');
        }

        // ---------------------------------------------------------------------
        // cantidad
        // ---------------------------------------------------------------------
        if ($this->getCantidad() <= 0) {
            $error->addError('La cantidad debe ser mayor a cero', 'Cantidad', 'cantidad');
        }
        

        return $error;
    }
    
    /**
     * 
     */
    static function getGralFpCuotasFullCmb($estado = true){
        $criterio = new Criterio();
        $criterio->addSelect(GralFpFormaPago::GEN_ATTR_DESCRIPCION.' AS gral_fp_forma_pago_descripcion');
        $criterio->addSelect(GralFpMedioPago::GEN_ATTR_DESCRIPCION.' AS gral_fp_medio_pago_descripcion');
        if($estado) { 
            $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        }
        $criterio->addTabla(self::GEN_TABLA);
        $criterio = GralFpCuota::setAplicarFiltrosDeAlcance($criterio);  
        $criterio->addRealJoin(GralFpMedioPago::GEN_TABLA, GralFpMedioPago::GEN_ATTR_ID, GralFpCuota::GEN_ATTR_GRAL_FP_MEDIO_PAGO_ID);
        $criterio->addRealJoin(GralFpFormaPago::GEN_TABLA, GralFpFormaPago::GEN_ATTR_ID, GralFpMedioPago::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID);
        $criterio->addOrden(GralFpFormaPago::GEN_ATTR_DESCRIPCION);
        $criterio->addOrden(GralFpMedioPago::GEN_ATTR_DESCRIPCION);
        $criterio->addOrden(GralFpCuota::GEN_ATTR_DESCRIPCION);
        $criterio->setCriterios();

        $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
        
        $col = GralFpCuota::getGralFpCuotas($paginador, $criterio);

        $cont = 0;
        $arr = array();
        foreach($col as $o){
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcionCompleta();			
        }
        return $arr;
    }
    
    /**
     * 
     */
    public function getDescripcionCompleta(){
        $descripcion = $this->getDescripcion();
        $descripcion_medio_pago = $this->getGralFpMedioPago()->getDescripcion();
        $descripcion_forma_pago = $this->getGralFpMedioPago()->getGralFpFormaPago()->getDescripcion();
        
        return $descripcion_forma_pago.' > '.$descripcion_medio_pago.' > '.$descripcion;
    }
    
    /**
     * 
     */
    static function getOsxGralFpMedioPagoId($valor){
        $criterio = new Criterio();
        $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->add(self::GEN_ATTR_GRAL_FP_MEDIO_PAGO_ID, $valor, Criterio::IGUAL);
        $criterio->addTabla(self::GEN_TABLA);
        $criterio->addOrden(self::GEN_ATTR_DESCRIPCION);
        $criterio->addOrden(self::GEN_ATTR_ORDEN);
        $criterio->setCriterios();

        $obs = self::getGralFpCuotas(null, $criterio);
        return $obs;
    }

}

?>