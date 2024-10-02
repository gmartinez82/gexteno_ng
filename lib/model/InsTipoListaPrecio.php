<?php

require_once "base/BInsTipoListaPrecio.php";

class InsTipoListaPrecio extends BInsTipoListaPrecio {

    const TIPO_PRECIO_GENERAL = 'PRECIO_GENERAL';
    const TIPO_PRECIO_MAYORISTA = 'PRECIO_MAYORISTA';

    //const TIPO_PRECIO_VENTA_ONLINE = 'PRECIO_VENTA_ONLINE';
    const TIPO_PRECIO_VENTA_ONLINE = 'PRECIO_GENERAL';
    
    public function getPorcentajeIncrementoParaCalculo() {
        $porcentaje = $this->getPorcentajeIncremento();
        $porcentaje = 1 + ($porcentaje / 100);

        return $porcentaje;
    }

    public function saveDesdeBackend() {
        if ($this->getId() != '') {
            $o = self::getOxId($this->getId());
            $this->setOrden($o->getOrden());
        }
        
        parent::saveDesdeBackend();

        // se actualizan masivamente todos los importes de venta de insumos
        $ins_insumos = InsInsumo::getInsInsumos();
        foreach ($ins_insumos as $ins_insumo) {
            $ins_insumo->setActualizarListaPrecios($this);
        }
    }
    
    public function getPorcentajeDescuentoMaximo_OLD() {
        return 10;
    }
    
    /**
     * 
     */
    static function getTipoListaPrecioPorDefaultParaUsuario($us_usuario, $vta_vendedor = false){
        if($vta_vendedor){
            $ins_tipo_lista_precios = $vta_vendedor->getInsTipoListaPreciosHabilitadasParaVendedor();
            if(count($ins_tipo_lista_precios) > 0){
                return $ins_tipo_lista_precio = $ins_tipo_lista_precios[0];
            }
        }

        return $ins_tipo_lista_precio = InsTipoListaPrecio::getOxCodigo(self::TIPO_PRECIO_GENERAL);
    }

}

?>