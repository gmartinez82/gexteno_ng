<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('XML_LENGUAJE_TRADUCCION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $xml_lenguaje_traduccion = XmlLenguajeTraduccion::getOxId($id);
    if($xml_lenguaje_traduccion->getEstado() == 1){
        $xml_lenguaje_traduccion->setEstado(0);
    }else{
        $xml_lenguaje_traduccion->setEstado(1);
    }
    $xml_lenguaje_traduccion->cambiarEstado();
}        
?>

