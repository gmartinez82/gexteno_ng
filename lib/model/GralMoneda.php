<?php 
require_once "base/BGralMoneda.php"; 
class GralMoneda extends BGralMoneda
{
    const MONEDA_PESO_AR = 'PESO_AR';
    const MONEDA_DOLAR_USD = 'DOLAR_USD';
    const MONEDA_REAL_BR = 'REAL_BR';
    const MONEDA_GUARANI_PY = 'GUARANI_PY';
    
    const API_EXCHANGE_RATE_TOKEN = 'f7f278b05d45fd82f1ab396b';
    
    static function getGralMonedaBase(){
        //$gral_moneda_base = GralMoneda::getOxCodigo(GralMoneda::MONEDA_PESO_AR);
        $gral_moneda_base = GralMoneda::getOxCodigo(GralMoneda::MONEDA_GUARANI_PY);
        return $gral_moneda_base; 
    }
    
    public function setActualizarTipoCambio($fecha, $gral_moneda_comparada, $tipo_cambio, $coeficiente_ajuste = false, $observacion = ''){

        if(!$coeficiente_ajuste){
            // -----------------------------------------------------------------
            // se consulta la ultima para transportar coeficiente de ajuste
            // -----------------------------------------------------------------
            $array = array(
                array('campo' => 'gral_moneda_id', 'valor' => $this->getId()),
                array('campo' => 'gral_moneda_comparada', 'valor' => $gral_moneda_comparada->getId()),
                array('campo' => 'actual', 'valor' => 1),
                array('campo' => 'estado', 'valor' => 1),
            );
            $gral_moneda_tipo_cambio = GralMonedaTipoCambio::getOxArray($array);
            if($gral_moneda_tipo_cambio){
                $coeficiente_ajuste = $gral_moneda_tipo_cambio->getCoeficienteAjuste();
            }
        }
        
        if(trim($coeficiente_ajuste) == ''){
            $coeficiente_ajuste = 1;
        }
        
        // -----------------------------------------------------------------
        // se cambia el estado de las actuales de la misma fecha
        // -----------------------------------------------------------------
        $array = array(
            //array('campo' => 'fecha', 'valor' => date('Y-m-d')),
            array('campo' => 'gral_moneda_id', 'valor' => $this->getId()),
            array('campo' => 'gral_moneda_comparada', 'valor' => $gral_moneda_comparada->getId()),
            array('campo' => 'actual', 'valor' => 1),
            array('campo' => 'estado', 'valor' => 1),
        );
        $gral_moneda_tipo_cambio = GralMonedaTipoCambio::getOxArray($array);
        if($gral_moneda_tipo_cambio){
            $gral_moneda_tipo_cambio->setActual(0);
            $gral_moneda_tipo_cambio->setEstado(0);
            $gral_moneda_tipo_cambio->save();
        }
        
        // ---------------------------------------------------------------------
        // se fuerza calculo de tipo de cambio real
        // ---------------------------------------------------------------------
        $tipo_cambio_real = $tipo_cambio * $coeficiente_ajuste;
        
        $gral_moneda_tipo_cambio = new GralMonedaTipoCambio();
        $gral_moneda_tipo_cambio->setGralMonedaId($this->getId());
        $gral_moneda_tipo_cambio->setGralMonedaComparada($gral_moneda_comparada->getId());
        $gral_moneda_tipo_cambio->setFecha($fecha);
        $gral_moneda_tipo_cambio->setTipoCambio($tipo_cambio);
        $gral_moneda_tipo_cambio->setCoeficienteAjuste($coeficiente_ajuste);
        $gral_moneda_tipo_cambio->setTipoCambioReal($tipo_cambio_real);
        $gral_moneda_tipo_cambio->setActual(1);
        $gral_moneda_tipo_cambio->setObservacion($observacion);
        $gral_moneda_tipo_cambio->setEstado(1);
        $gral_moneda_tipo_cambio->save();
        //Gral::prr($gral_moneda_tipo_cambio);                
    }
    
    static function getActualizarTipoCambioDesdeAPIExchangeRate($nuevo = false){
        $gral_monedas = GralMoneda::getGralMonedas(null, null, true, array(array('campo' => 'orden', 'orden' => 'asc')));
        $gral_monedas_comparadas = GralMoneda::getGralMonedas(null, null, true, array(array('campo' => 'orden', 'orden' => 'asc')));
        
        foreach($gral_monedas as $gral_moneda){
            $arr = $gral_moneda->getArrTipoCambioDesdeAPIExchangeRate();
            //Gral::prr($arr);
            
            // -----------------------------------------------------------------
            // se cambia el estado de las actuales
            // -----------------------------------------------------------------
            
            foreach($gral_monedas_comparadas as $gral_moneda_comparada){
                $codigo_iso = $gral_moneda_comparada->getCodigoIso();
                $tipo_cambio = $arr->conversion_rates->$codigo_iso;                    
                
                $fecha = date('Y-m-d');
                $observacion = 'Actualizado desde API Exchange Rate';
                
                $gral_moneda->setActualizarTipoCambio($fecha, $gral_moneda_comparada, $tipo_cambio, $coeficiente_ajuste = false, $observacion);                                
            }
            
        }
    }
    
    public function getArrTipoCambioDesdeAPIExchangeRate(){
        $req_url = 'https://v6.exchangerate-api.com/v6/'.self::API_EXCHANGE_RATE_TOKEN.'/latest/'.$this->getCodigoIso();
        $response_json = file_get_contents($req_url);
        
        if($response_json !== false) {
            $response = json_decode($response_json);
            
            if($response->result === 'success') {
                return $response;            
            }
        }  
        return false;
    }
    
    static function getGralMonedasActivas(){
        $c = new Criterio();
        $c->add(GralMoneda::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addTabla(GralMoneda::GEN_TABLA);
        $c->addOrden(GralMoneda::GEN_ATTR_ORDEN, Criterio::_ASC);
        $c->setCriterios();
        
        $p = null;
        
        $gral_monedas = GralMoneda::getGralMonedas($p, $c);
        return $gral_monedas;
    }

    public function getGralMonedasTipoCambiosActual($gral_moneda_comparada = false){
        $c = new Criterio();
        $c->addDistinct(true);
        $c->addSelect('gral_moneda_comparada.orden');
        $c->add(GralMoneda::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add('gral_moneda_comparada.estado', 1, Criterio::IGUAL);
        $c->add(GralMonedaTipoCambio::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        if($gral_moneda_comparada){
            $c->add(GralMonedaTipoCambio::GEN_ATTR_GRAL_MONEDA_COMPARADA, $gral_moneda_comparada->getId(), Criterio::IGUAL);            
        }
        $c->addTabla(GralMonedaTipoCambio::GEN_TABLA);
        $c->addRealJoin(GralMoneda::GEN_TABLA, GralMoneda::GEN_ATTR_ID, GralMonedaTipoCambio::GEN_ATTR_GRAL_MONEDA_ID);
        $c->addRealJoin(GralMoneda::GEN_TABLA.' AS gral_moneda_comparada', 'gral_moneda_comparada.id', GralMonedaTipoCambio::GEN_ATTR_GRAL_MONEDA_COMPARADA);
        $c->addOrden('gral_moneda_comparada.orden', Criterio::_ASC);
        $c->setCriterios();
        
        $p = null;
        
        $gral_moneda_tipo_cambios = GralMonedaTipoCambio::getGralMonedaTipoCambios($p, $c);
        return $gral_moneda_tipo_cambios;        
    }
    
    public function getGralMonedaTipoCambioActual($gral_moneda_comparada){
        $gral_moneda_tipo_cambios = $this->getGralMonedasTipoCambiosActual($gral_moneda_comparada);
        foreach($gral_moneda_tipo_cambios as $gral_moneda_tipo_cambio){
            return $gral_moneda_tipo_cambio;
        }
        return false;
    }

    public function getGralMonedaTipoCambioValorActual($gral_moneda_comparada){
        $gral_moneda_tipo_cambio = $this->getGralMonedaTipoCambioActual($gral_moneda_comparada);
        if($gral_moneda_tipo_cambio){
            return $gral_moneda_tipo_cambio->getTipoCambioReal();
        }
        return 1;
    }
    
    static function getGralMonedasActivasMinCmb(){
        $criterio = new Criterio();
        $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->addTabla(self::GEN_TABLA);
        $criterio->addOrden(self::GEN_ATTR_ORDEN);
        $criterio->setCriterios();

        $paginador = null;
        
        $col = GralMoneda::getGralMonedas($paginador, $criterio);

        $cont = 0;
        $arr = array();
        foreach($col as $o){
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getSimbolo();			
        }
        return $arr;
    }
    
    static function getInfoBtnVolver($indice = false) {
        $array = array(
            'url' => 'gral_moneda_gestion.php',
            'label' => 'Volver al Listado',
        );

        return ($indice) ? $array[$indice] : $array;
    }
    
}
?>