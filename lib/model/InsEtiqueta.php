<?php 
require_once "base/BInsEtiqueta.php"; 
class InsEtiqueta extends BInsEtiqueta
{
    const ETIQUETA_SORTEO_ANIVERSARIO_2021 = 'SORTEO_ANIVERSARIO_2021';

    const ETIQUETA_MAYORISTA = 'MAYORISTA';

    static function getInsEtiquetasParaTienda(){
        $c = new Criterio();
        $c->add(InsEtiqueta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(InsEtiqueta::GEN_ATTR_PUBLICA, 1, Criterio::IGUAL);
        $c->addTabla(InsEtiqueta::GEN_TABLA);
        $c->addOrden(InsEtiqueta::GEN_ATTR_RELEVANCIA, Criterio::_DESC);
        $c->setCriterios();
        
        $ins_etiquetas = InsEtiqueta::getInsEtiquetas(null, $c);
        
        return $ins_etiquetas;
    }
    
    public function getInsInsumosVinculadosAEtiquetaDesdeColeccionDeInsumos($ins_insumos){
        $arr = array();
        foreach($ins_insumos as $ins_insumo){
            $ins_etiquetas_del_insumo = $ins_insumo->getInsEtiquetasXInsInsumoInsEtiqueta();
            foreach($ins_etiquetas_del_insumo as $ins_etiqueta_del_insumo){
                if($ins_etiqueta_del_insumo->getId() == $this->getId()){
                    $arr[] = $ins_insumo;
                }
            }
        }
        return $arr;
    }
}
?>