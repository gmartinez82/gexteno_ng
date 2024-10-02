<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('XML_LENGUAJE_TRADUCCION_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $xml_lenguaje_traduccion = XmlLenguajeTraduccion::getOxId($id);
    $xml_lenguaje_traduccion->duplicarXmlLenguajeTraduccion();
}    

