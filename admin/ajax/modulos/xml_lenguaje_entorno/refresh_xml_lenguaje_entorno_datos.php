<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
XmlLenguajeEntorno::setSesPag($pag);

$criterio = new Criterio(XmlLenguajeEntorno::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
XmlLenguajeEntorno::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('xml_lenguaje_entorno');
$criterio->setCriteriosInicial();

$paginador = new Paginador(XmlLenguajeEntorno::getSesPagCantidad(), XmlLenguajeEntorno::getSesPag());
$xml_lenguaje_entornos = XmlLenguajeEntorno::getXmlLenguajeEntornosDesdeBackend($paginador, $criterio);

include 'xml_lenguaje_entorno_datos.php';
?>

