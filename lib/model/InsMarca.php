<?php 
require_once "base/BInsMarca.php"; 
class InsMarca extends BInsMarca
{
    static function getInsMarcasParaTienda(){
        
        $c = new Criterio();
        $c->add(InsMarca::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(InsMarca::GEN_ATTR_PUBLICA, 1, Criterio::IGUAL);
        $c->addTabla(InsMarca::GEN_TABLA);
        $c->addOrden(InsMarca::GEN_ATTR_RELEVANCIA, Criterio::_DESC);
        $c->setCriterios();
        
        $ins_marcas = InsMarca::getInsMarcas(null, $c);
        
        return $ins_marcas;
    } 
}
?>