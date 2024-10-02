<?php 
require_once "base/BGralTipoIva.php"; 
class GralTipoIva extends BGralTipoIva
{    
    //const TIPO_0 = '0';
    //const TIPO_105 = '10.5';
    //const TIPO_21 = '21';
    //const TIPO_27 = '27';
    const TIPO_NO_GRAVADO = 'NO_GRAVADO';
    //const TIPO_EXENTO = 'EXENTO';
    
    const TIPO_10 = '10';
    const TIPO_5 = '5';
    const TIPO_EXENTO = 'EXENTO';
    
    /**
     * 
     */
    static function getGralTipoIvaCodigoDefault(){
        return self::TIPO_10;
    }
    
    /**
     * 
     */
    static function getGralTipoIvaPorDefault(){
        return $gral_tipo_iva = GralTipoIva::getOxCodigo(self::getGralTipoIvaCodigoDefault());
    }
    
    /**
     * 
     */
    public function getValorIvaDecimal(){
        $valor_iva = $this->getValorIva();
        $valor_iva_decimal = ($valor_iva / 100);
        
        return $valor_iva_decimal;
    }

    /**
     * 
     */
    public function getValorIvaDecimalParaSumarEnCalculo($porcentaje_iva = 100){
        $valor_iva = $this->getValorIva();
        $valor_iva_decimal = (($valor_iva / 100) * ($porcentaje_iva / 100)) + 1;
        
        return $valor_iva_decimal;
    }
    
    /**
     * 
     */
    public function getDescripcionCorta() {
        $texto = str_replace('IVA ', '', $this->getDescripcion());
        return $texto;
    }

    /**
     * 
     */
    static function getGralTipoIvasParaComprasCmb(){
        $c = new Criterio();
        $c->add(GralTipoIva::GEN_ATTR_PARA_COMPRA, 1, Criterio::IGUAL);
        $c->addTabla(GralTipoIva::GEN_TABLA);
        $c->addOrden(GralTipoIva::GEN_ATTR_ORDEN, Criterio::_ASC);
        $c->setCriterios();
        
        return GralTipoIva::getGralTipoIvasCmbF(null, $c);
    }

    /**
     * 
     */
    static function getGralTipoIvasParaVentasCmb(){
        $c = new Criterio();
        $c->add(GralTipoIva::GEN_ATTR_PARA_VENTA, 1, Criterio::IGUAL);
        $c->addTabla(GralTipoIva::GEN_TABLA);
        $c->addOrden(GralTipoIva::GEN_ATTR_ORDEN, Criterio::_ASC);
        $c->setCriterios();
        
        return GralTipoIva::getGralTipoIvasCmbF(null, $c);
    }

    /**
     * 
     */
    static function getGralTipoIvasParaVentasZCmb(){
        $c = new Criterio();
        $c->add(GralTipoIva::GEN_ATTR_ID, array(1, 6), Criterio::IN_ARRAY);
        $c->addTabla(GralTipoIva::GEN_TABLA);
        $c->addOrden(GralTipoIva::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $c->setCriterios();
        
        return GralTipoIva::getGralTipoIvasCmbF(null, $c);
    }
    
    /**
     * 
     */
    static function getGralTipoIvasGravados(){
        $c = new Criterio();
        $c->add(GralTipoIva::GEN_ATTR_GRAVADO, 1, Criterio::IGUAL);
        $c->addTabla(GralTipoIva::GEN_TABLA);
        $c->addOrden(GralTipoIva::GEN_ATTR_ORDEN, Criterio::_ASC);
        $c->setCriterios();
        
        return GralTipoIva::getGralTipoIvas(null, $c);
    }
    
    /**
     * 
     */
    static function getOxCodigo($valor){
        // ---------------------------------------------------------------------
        // se concatenan comillas para transformar el 0 a '0' para los casos de IVA 0 (Cero)
        // ---------------------------------------------------------------------
        $valor = ''.$valor.''; 
        
        return parent::getOxCodigo($valor);
    }
}
?>
