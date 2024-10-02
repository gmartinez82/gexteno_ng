<?php
require_once "base/BCatCatalogo.php";

class CatCatalogo extends BCatCatalogo {

    public function getDescripcionParaTienda() {
        $texto = $this->getDescripcion();

        $texto = str_replace(strtoupper($this->getInsMarca()->getDescripcion()) . ' - ', '', $texto);

        return $texto;
    }

    /**
     * Metodo que retorna los catalogos publicos
     * @return type
     */
    static function getCatCatalogosPublicos() {
        $criterio = new Criterio();
        $criterio->add(CatCatalogo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->add(CatTipoCatalogo::GEN_ATTR_CODIGO, CatTipoCatalogo::TIPO_PUBLICO, Criterio::IGUAL);
        $criterio->addTabla(CatCatalogo::GEN_TABLA);
        $criterio->addRealJoin(CatTipoCatalogo::GEN_TABLA, CatTipoCatalogo::GEN_ATTR_ID, CatCatalogo::GEN_ATTR_CAT_TIPO_CATALOGO_ID);
        $criterio->addOrden(CatCatalogo::GEN_ATTR_ORDEN, Criterio::_ASC);
        $criterio->setCriterios();

        $cat_catalogos = CatCatalogo::getCatCatalogos(null, $criterio);
        return $cat_catalogos;
    }

    static function getCatCatalogosPublicosAgrupadosPorMarca() {
        $arr_catalogos_agrupados_por_marca = array();
        
        $cat_catalogos = CatCatalogo::getCatCatalogosPublicos();
        foreach ($cat_catalogos as $cat_catalogo) {
            $ins_marca = $cat_catalogo->getInsMarca();
            $arr_catalogos_agrupados_por_marca[$ins_marca->getId()][] = $cat_catalogo;
        }
        
        return $arr_catalogos_agrupados_por_marca;
    }

    /**
     * Metodo que retorna los catalogos privados
     * @return type
     */
    static function getCatCatalogosPrivados($cli_cliente) {
        $criterio = new Criterio();
        if ($cli_cliente) {
            $criterio->add(CliCliente::GEN_ATTR_ID, $cli_cliente->getId(), Criterio::IGUAL);
        }
        $criterio->add(CatCatalogo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->add(CatTipoCatalogo::GEN_ATTR_CODIGO, CatTipoCatalogo::TIPO_PRIVADO, Criterio::IGUAL);
        $criterio->addTabla(CatCatalogo::GEN_TABLA);
        $criterio->addRealJoin(CatTipoCatalogo::GEN_TABLA, CatTipoCatalogo::GEN_ATTR_ID, CatCatalogo::GEN_ATTR_CAT_TIPO_CATALOGO_ID);
        $criterio->addRealJoin(CatCatalogoCliCliente::GEN_TABLA, CatCatalogoCliCliente::GEN_ATTR_CAT_CATALOGO_ID, CatCatalogo::GEN_ATTR_ID);
        $criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, CatCatalogoCliCliente::GEN_ATTR_CLI_CLIENTE_ID);
        $criterio->addOrden(CatCatalogo::GEN_ATTR_ORDEN, Criterio::_ASC);
        $criterio->setCriterios();

        $cat_catalogos = CatCatalogo::getCatCatalogos(null, $criterio);
        return $cat_catalogos;
    }

}

?>