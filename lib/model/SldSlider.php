<?php 
require_once "base/BSldSlider.php"; 
class SldSlider extends BSldSlider
{
    /* Control de PrdProducto */
    public function control() {
        $error = new DbError();

        // descripcion
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
        
        return $error;
    }
    
    /**
     * Metodo que retorna el array para mostrar en el ADM
     * @return array
     */
    public function getArrDescripcionExtendidaParaBackend(){
        $array = array();
        
        $array = array(
            'ins_insumo' => array(
                'label' => 'Producto',
                'dato' => $this->getInsInsumo()->getDescripcion(),
                ),
            'url' => array(
                'label' => 'URL',
                'dato' => $this->getUrl(),
                ),
            'observacion' => array(
                'label' => 'Obs',
                'dato' => $this->getObservacion(),
                ),
        );
        
        return $array;
    }
    
    public function getPathImagenPrincipalParaTiendaXTipoImagen($sld_tipo_imagen_codigo, $thumb = false) {
        $c = new Criterio();
        $c->add(SldTipoImagen::GEN_ATTR_CODIGO, $sld_tipo_imagen_codigo, Criterio::IGUAL);
        $c->add(SldSliderImagen::GEN_ATTR_SLD_SLIDER_ID, $this->getId(), Criterio::IGUAL);
        $c->add(SldSliderImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addTabla(SldSliderImagen::GEN_TABLA);
        $c->addRealJoin(SldTipoImagen::GEN_TABLA, SldTipoImagen::GEN_ATTR_ID, SldSliderImagen::GEN_ATTR_SLD_TIPO_IMAGEN_ID);
        $c->addOrden(SldSliderImagen::GEN_ATTR_ORDEN, Criterio::_ASC);
        $c->setCriterios();
        
        $sld_slider_imagens = SldSliderImagen::getSldSliderImagens(null, $c);
        foreach($sld_slider_imagens as $sld_slider_imagen){
            return $sld_slider_imagen->getPathImagenParaTienda($thumb);
        }
        
        return false;
    }
    
    public function getUrlFinal(){
        
        if($this->getInsInsumoId() != 'null'){
            // -----------------------------------------------------------------
            // si esta vinculado a un producto
            // -----------------------------------------------------------------
            return 'urldelproducto';
        }elseif(trim($this->getUrl()) != ''){
            // -----------------------------------------------------------------
            // si tiene cargada una url particular
            // -----------------------------------------------------------------
            return $this->getUrl();
        }
        return false;
    }

}
?>