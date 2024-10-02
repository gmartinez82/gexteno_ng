<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
XmlLenguajeCodigo::setSesPag($pag);

$criterio = new Criterio(XmlLenguajeCodigo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
XmlLenguajeCodigo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('xml_lenguaje_codigo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(XmlLenguajeCodigo::getSesPagCantidad(), XmlLenguajeCodigo::getSesPag());
$xml_lenguaje_codigos = XmlLenguajeCodigo::getXmlLenguajeCodigosDesdeBackend($paginador, $criterio);

include 'xml_lenguaje_codigo_datos.php';
?>

