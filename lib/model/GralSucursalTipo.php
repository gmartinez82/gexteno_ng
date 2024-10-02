<?php
require_once "base/BGralSucursalTipo.php";

class GralSucursalTipo extends BGralSucursalTipo {
    const TIPO_FISICA = 'FISICA';
    const TIPO_FICTICIA = 'FICTICIA';
    const TIPO_VIRTUAL = 'VIRTUAL';
    
    static function getGralSucursalTipoPorDefault(){
        return GralSucursalTipo::getOxId(1); // fisica
    }
}

?>