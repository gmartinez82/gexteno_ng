<?php 
require_once "base/BGralCentroCosto.php"; 
class GralCentroCosto extends BGralCentroCosto
{
    static function getGralCentroCostosParaImputacion(){
        $c = new Criterio();
        $c->add(GralCentroCosto::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addTabla(GralCentroCosto::GEN_TABLA);
        $c->addOrden(GralCentroCosto::GEN_ATTR_ORDEN, Criterio::_ASC);
        $c->addOrden(GralCentroCosto::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $c->setCriterios();
        
        $gral_centro_costos = GralCentroCosto::getGralCentroCostos(null, $c);
        return $gral_centro_costos;
    }
}
?>