<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$xml_lenguaje_pagina = XmlLenguajePagina::getOxId($id);

$estado = ($xml_lenguaje_pagina->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'xml_lenguaje_pagina_uno.php';
?>

