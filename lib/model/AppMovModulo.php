<?php

require_once "base/BAppMovModulo.php";

class AppMovModulo extends BAppMovModulo {

    public function getVersionActual() {
        $array = array(
            array('campo' => 'app_mov_modulo_id', 'valor' => $this->getId()),
            array('campo' => 'actual', 'valor' => 1),
        );

        $app_mov_version_actual = AppMovVersion::getOxArray($array);
        if ($app_mov_version_actual) {
            return $app_mov_version_actual;
        }
    }

}

?>