<?php

require_once "base/BVtaPoliticaDescuento.php";

class VtaPoliticaDescuento extends BVtaPoliticaDescuento {
    /* Método getInfoBtnVolver */

    static function getInfoBtnVolver($indice = false) {
        $array = array(
            'url' => 'vta_politica_descuento_gestion.php',
            'label' => 'Volver al Listado',
        );

        return ($indice) ? $array[$indice] : $array;
    }

}

?>