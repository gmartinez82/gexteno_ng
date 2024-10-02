<?php 
require_once "base/BVtaVendedorDescuento.php"; 
class VtaVendedorDescuento extends BVtaVendedorDescuento
{ 
    static function getVtaVendedorDescuentoXInsEtiquetaIdYVtaVendedorId($ins_etiqueta_id, $vta_vendedor_id){
        $c = new Criterio();
        $c->add(VtaVendedorDescuento::GEN_ATTR_INS_ETIQUETA_ID, $ins_etiqueta_id, Criterio::IGUAL);
        $c->add(VtaVendedorDescuento::GEN_ATTR_VTA_VENDEDOR_ID, $vta_vendedor_id, Criterio::IGUAL);
        $c->addTabla(VtaVendedorDescuento::GEN_TABLA);
        $c->addOrden(2);
        $c->setCriterios();

        $vta_vendedor_descuentos = VtaVendedorDescuento::getVtaVendedorDescuentos(null, $c);
        foreach ($vta_vendedor_descuentos as $vta_vendedor_descuento){
            return $vta_vendedor_descuento;
        }
        return false;
    }

    static function setVtaVendedorDescuentoXInsEtiquetaIdYVtaVendedorId($ins_etiqueta_id, $vta_vendedor_id, $descuento_maximo){
        $vta_vendedor_descuento = new VtaVendedorDescuento();
        $vta_vendedor_descuento->setVtaVendedorId($vta_vendedor_id);
        $vta_vendedor_descuento->setInsEtiquetaId($ins_etiqueta_id);
        $vta_vendedor_descuento->setDescuentoMaximo($descuento_maximo);
        $vta_vendedor_descuento->setEstado(1);
        $vta_vendedor_descuento->save();
        
        return $vta_vendedor_descuento;
    }
}
?>