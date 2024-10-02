<?php

require_once "base/BAppMovActividad.php";

class AppMovActividad extends BAppMovActividad {

    public function getDescripcion() {
        $texto .= Gral::getFechaHoraToWEB($this->getCreado());

        return $texto;
    }

}

?>