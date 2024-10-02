<?php

require_once "base/BInsMatriz.php";

class InsMatriz extends BInsMatriz {

    public function getPathImagenPrincipal($thumb = false) {
        $ins_insumo = $this->getInsInsumo();
        if($ins_insumo){
            return $ins_insumo->getPathImagenPrincipal($thumb);
        }
        return Gral::getPath('path_http').'imgs/no-imagen.jpg';        
    }
    
    static function getInsInsumosSugeridos($descripcion, $codigo_pieza) {
        $descripcion = (trim($descripcion) != '') ? $descripcion : '---------';
        $codigo_pieza = (trim($codigo_pieza) != '') ? $codigo_pieza : '---------';
        
        // se buscan directamente en ins insumo
        $criterio_matriz = new Criterio();
        $criterio_matriz->setAmbiguo(true);
        
        //$criterio_matriz->add(InsMatriz::GEN_ATTR_DESCRIPCION, $descripcion, Criterio::LIKE, false, Criterio::_OR);
        $criterio_matriz->add(InsMatriz::GEN_ATTR_CODIGO_PIEZA, $codigo_pieza, Criterio::LIKE, false, Criterio::_OR);
        
        $criterio_matriz->addTabla(InsMatriz::GEN_TABLA);
        $criterio_matriz->setCriterios();

        $ins_matrizs = InsMatriz::getInsMatrizs($p = new Paginador(10, 1), $criterio_matriz);
        return $ins_matrizs;
    }     

}

?>