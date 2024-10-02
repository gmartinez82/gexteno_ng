<?php 
require_once "base/BPdeTributo.php"; 
class PdeTributo extends BPdeTributo
{
    const TRIBUTO_PERCEPCIONES_IIBB_MNES = 'PERCEPCIONES_IIBB_MNES';
    const TRIBUTO_PERCEPCIONES_IIBB_BSAS = 'PERCEPCIONES_IIBB_BSAS';
    const TRIBUTO_PERCEPCIONES_IVA = 'PERCEPCIONES_IVA';
    const TRIBUTO_PERCEPCIONES_IMPUESTOS_NACIONALES = 'PERCEPCIONES_IMPUESTOS_NACIONALES';
    const TRIBUTO_PERCEPCIONES_IMPUESTOS_MUNICIPALES = 'PERCEPCIONES_IMPUESTOS_MUNICIPALES';
    const TRIBUTO_PERCEPCIONES_GANANCIAS = 'PERCEPCIONES_GANANCIAS';
    const TRIBUTO_NO_GRAVADO = 'NO_GRAVADO';
    const TRIBUTO_OTROS_TRIBUTOS = 'OTROS_TRIBUTOS';
    const TRIBUTO_IVA_ADICIONAL = 'IVA_ADICIONAL';
    const TRIBUTO_IMPUESTOS_INTERNOS = 'IMPUESTOS_INTERNOS';
    const TRIBUTO_IMPUESTOS_MUNICIPALES = 'IMPUESTOS_MUNICIPALES';
    const TRIBUTO_RETENCION_IVA = 'RETENCION_IVA';
    const TRIBUTO_RETENCION_GANANCIAS = 'RETENCION_GANANCIAS';
    const TRIBUTO_RETENCION_IIBB_MNES_196 = 'RETENCION_IIBB_MNES_196';
    const TRIBUTO_RETENCION_IIBB_MNES_331 = 'RETENCION_IIBB_MNES_331';
    const TRIBUTO_RETENCION_TASA_COMERCIO = 'RETENCION_TASA_COMERCIO';
    
    public function getPdeTributoAplica($pde_comprobante, $subtotal_calculado, $omitir_minimo = false) {
        $arr_pde_tributo_aplica = false;

        switch ($this->getCodigo()) {

            // -----------------------------------------------------------------
            // TRIBUTO_RETENCION_IIBB_MNES_331
            // -----------------------------------------------------------------
            case PdeTributo::TRIBUTO_RETENCION_IIBB_MNES_331:

                $prv_proveedor = $pde_comprobante->getPrvProveedor();
                if ($prv_proveedor) {
                    $geo_localidad = $prv_proveedor->getGeoLocalidad();
                    $geo_provincia = $geo_localidad->getGeoProvincia();
                    $gral_condicion_iva = $prv_proveedor->getGralCondicionIva();
                }

                $importe_minimo_tributo_a_aplicar = (!$omitir_minimo) ? ConfVariable::getPdeComprobanteMinimoParaRetencionesIIBB331() : 0;

                // se determina si es proveedor o no
                if ($prv_proveedor) {

                    // se determina la provincia del proveedor y punto de venta
                    if ($geo_provincia->getCodigo() == "MISIONES") {

                        // se determina la condicion de iva del proveedor
                        if ($gral_condicion_iva) {

                            switch ($gral_condicion_iva->getCodigo()) {

                                // solo aplica para RI y Monotributo
                                case GralCondicionIva::TIPO_RESPONSABLE_INSCRIPTO:
                                case GralCondicionIva::TIPO_MONOTRIBUTISTA:

                                    $importe_tributo = $subtotal_calculado * $this->getAlicuotaDecimal();

                                    // se controla que el importe del tributo sea mayor a minimo
                                    if ($importe_tributo > $importe_minimo_tributo_a_aplicar) {
                                        $arr_pde_tributo_aplica = array(
                                            'pde_tributo' => $this,
                                            'aplica' => 1,
                                            'exento' => 0,
                                            'exencion' => 0,
                                            'minimo' => $importe_minimo_tributo_a_aplicar,
                                            'supera_minimo' => 1,
                                        );

                                        // excepcion para exencion
                                        $pde_tributo_exencion = $prv_proveedor->getPdeTributoExencionActiva($this);
                                        if ($prv_proveedor && $pde_tributo_exencion) {
                                            $arr_pde_tributo_aplica = array(
                                                'pde_tributo' => $this,
                                                'aplica' => 1,
                                                'exento' => 1,
                                                'exencion' => $pde_tributo_exencion,
                                                'minimo' => $importe_minimo_tributo_a_aplicar,
                                                'supera_minimo' => 1,
                                            );
                                        }
                                    } else {
                                        $arr_pde_tributo_aplica = array(
                                            'pde_tributo' => $this,
                                            'aplica' => 1,
                                            'exento' => 0,
                                            'exencion' => 0,
                                            'minimo' => $importe_minimo_tributo_a_aplicar,
                                            'supera_minimo' => 0,
                                        );
                                    }

                                    break;
                                default:
                            }
                        }
                    }
                }
                break;
            // -----------------------------------------------------------------
            // TRIBUTO_RETENCION_IIBB_MNES_196
            // -----------------------------------------------------------------
            case PdeTributo::TRIBUTO_RETENCION_IIBB_MNES_196:

                $prv_proveedor = $pde_comprobante->getPrvProveedor();
                if ($prv_proveedor) {
                    $geo_localidad = $prv_proveedor->getGeoLocalidad();
                    $geo_provincia = $geo_localidad->getGeoProvincia();
                    $gral_condicion_iva = $prv_proveedor->getGralCondicionIva();
                }

                $importe_minimo_tributo_a_aplicar = (!$omitir_minimo) ? ConfVariable::getPdeComprobanteMinimoParaRetencionesIIBB196() : 0;

                // se determina si es proveedor o no
                if ($prv_proveedor) {

                    // se determina la provincia del proveedor NO sea misiones, pero se encuentre inscripto a convenio multilateral
                    if ($geo_provincia->getCodigo() != "MISIONES" && $prv_proveedor->getConvenioMultilateral()) {

                        // se determina la condicion de iva del proveedor
                        if ($gral_condicion_iva) {

                            switch ($gral_condicion_iva->getCodigo()) {

                                // solo aplica para RI y Monotributo
                                case GralCondicionIva::TIPO_RESPONSABLE_INSCRIPTO:
                                case GralCondicionIva::TIPO_MONOTRIBUTISTA:

                                    $importe_tributo = $subtotal_calculado * $this->getAlicuotaDecimal();

                                    // se controla que el importe del tributo sea mayor a minimo
                                    if ($importe_tributo > $importe_minimo_tributo_a_aplicar) {
                                        $arr_pde_tributo_aplica = array(
                                            'pde_tributo' => $this,
                                            'aplica' => 1,
                                            'exento' => 0,
                                            'exencion' => 0,
                                            'minimo' => $importe_minimo_tributo_a_aplicar,
                                            'supera_minimo' => 1,
                                        );

                                        // excepcion para exencion
                                        $pde_tributo_exencion = $prv_proveedor->getPdeTributoExencionActiva($this);
                                        if ($prv_proveedor && $pde_tributo_exencion) {
                                            $arr_pde_tributo_aplica = array(
                                                'pde_tributo' => $this,
                                                'aplica' => 1,
                                                'exento' => 1,
                                                'exencion' => $pde_tributo_exencion,
                                                'minimo' => $importe_minimo_tributo_a_aplicar,
                                                'supera_minimo' => 1,
                                            );
                                        }
                                    } else {
                                        $arr_pde_tributo_aplica = array(
                                            'pde_tributo' => $this,
                                            'aplica' => 1,
                                            'exento' => 0,
                                            'exencion' => 0,
                                            'minimo' => $importe_minimo_tributo_a_aplicar,
                                            'supera_minimo' => 0,
                                        );
                                    }

                                    break;
                                default:
                            }
                        }
                    }
                }
                break;                
        }

        return $arr_pde_tributo_aplica;
    }    
    
    /**
     * [getPdeTributosRetencion retorna los tributos de tipo Retencion]
     * @return [coleccion] $pde_tributos
     */
    static function getPdeTributosRetencion()
    {
        $criterio = new Criterio();
        $criterio->add(PdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->add(PdeTributo::GEN_ATTR_ES_RETENCION, 1, Criterio::IGUAL);
        $criterio->addTabla(PdeTributo::GEN_TABLA);
        $criterio->addOrden(PdeTributo::GEN_ATTR_ORDEN, Criterio::_ASC);
        $criterio->addOrden(PdeTributo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $criterio->setCriterios();
        
        $pde_tributos = PdeTributo::getPdeTributos(null, $criterio);
        return $pde_tributos;
    }
    
    
    /**
     * [getPdeTributosPercepcion retorna los tributos de tipo Percepcion]
     * @return [coleccion] $pde_tributos
     */
    static function getPdeTributosPercepcion()
    {
        $criterio = new Criterio();
        $criterio->add(PdeTributo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->add(PdeTributo::GEN_ATTR_ES_PERCEPCION, 1, Criterio::IGUAL);
        $criterio->addTabla(PdeTributo::GEN_TABLA);
        $criterio->addOrden(PdeTributo::GEN_ATTR_ORDEN, Criterio::_ASC);
        $criterio->addOrden(PdeTributo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $criterio->setCriterios();
        
        $pde_tributos = PdeTributo::getPdeTributos(null, $criterio);
        return $pde_tributos;
    }

    public function getRetencionNumeroUltimo($anio){
        $numero = 0;
        
        $criterio = new Criterio();
        $criterio->add(PdeTributo::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $criterio->add(PdeOrdenPagoPdeTributo::GEN_ATTR_ESTADO, $anio, Criterio::IGUAL); // reemplazar luego por el campo anio
        $criterio->addTabla(PdeOrdenPagoPdeTributo::GEN_TABLA);
        $criterio->addRealJoin(PdeTributo::GEN_TABLA, PdeTributo::GEN_ATTR_ID, PdeOrdenPagoPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID);
        $criterio->addOrden(PdeOrdenPagoPdeTributo::GEN_ATTR_ORDEN, Criterio::_DESC);
        $criterio->setCriterios();
        
        $p = new Paginador(1, 1);
        $pde_orden_pago_pde_tributos = PdeOrdenPagoPdeTributo::getPdeOrdenPagoPdeTributos($p, $criterio);
        foreach($pde_orden_pago_pde_tributos as $pde_orden_pago_pde_tributo){
            $numero = $pde_orden_pago_pde_tributo->getOrden(); // reemplazar luego por campo numero
        }
        return $numero;
    }
    
    public function getRetencionNumeroProximo($anio){
        return $this->getRetencionNumeroUltimo($anio) + 1;
    }
    
    public function getArrRetencionNumeroProximoParaCodigo($anio){
        $numero = $this->getRetencionNumeroProximo($anio);
        $codigo = $anio.'-'.$this->getId().'-'.str_pad($numero, 8, 0, STR_PAD_LEFT);
        
        $arr = array(
            'codigo' => $codigo,
            'numero' => $numero,
            'anio' => $anio,
            );
        return $arr;
    }
    
}
?>