<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('XML_LENGUAJE_PAGINA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $xml_lenguaje_pagina = new XmlLenguajePagina();
    $xml_lenguaje_pagina->setId($id, false);
    $xml_lenguaje_pagina->deleteAll();
}    
?>

