<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
XmlLenguajePagina::setSesPag($pag);

$criterio = new Criterio(XmlLenguajePagina::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
XmlLenguajePagina::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('xml_lenguaje_pagina');
$criterio->setCriteriosInicial();

$paginador = new Paginador(XmlLenguajePagina::getSesPagCantidad(), XmlLenguajePagina::getSesPag());
$xml_lenguaje_paginas = XmlLenguajePagina::getXmlLenguajePaginasDesdeBackend($paginador, $criterio);

include 'xml_lenguaje_pagina_datos.php';
?>

