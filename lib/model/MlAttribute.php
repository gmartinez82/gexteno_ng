<?php

require_once "base/BMlAttribute.php";

class MlAttribute extends BMlAttribute {
    /* Método que retorna un array con la descripcion extendida del objeto */

    public function getArrDescripcionExtendidaParaBackend() {
        $array = array();

        $array = array(
            'tooltip' => array(
                'label' => 'Tooltip',
                'dato' => $this->getTooltip(),
            ),
            'observacion' => array(
                'label' => 'Obs',
                'dato' => $this->getObservacion(),
            ),
        );

        return $array;
    }

}

?>