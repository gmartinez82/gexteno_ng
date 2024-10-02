<?php
require_once "base/BGralEmpresaTransportadora.php";

class GralEmpresaTransportadora extends BGralEmpresaTransportadora {

    static function getGralEmpresaTransportadorasParaTiendaCmb() {
        $criterio = new Criterio();
        $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->add(self::GEN_ATTR_PUBLICA, 1, Criterio::IGUAL);
        $criterio->addTabla(self::GEN_TABLA);
        $criterio->addOrden(self::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $criterio->setCriterios();

        $p = null;

        $col = GralEmpresaTransportadora::getGralEmpresaTransportadoras($p, $criterio);

        $cont = 0;
        $arr = array();
        foreach ($col as $o) {
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();
        }
        return $arr;
    }
    

}

?>