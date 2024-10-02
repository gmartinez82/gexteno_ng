<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
XmlLenguajeTraduccion::setSesPag($pag);

$criterio = new Criterio(XmlLenguajeTraduccion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
XmlLenguajeTraduccion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('xml_lenguaje_traduccion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(XmlLenguajeTraduccion::getSesPagCantidad(), XmlLenguajeTraduccion::getSesPag());
$xml_lenguaje_traduccions = XmlLenguajeTraduccion::getXmlLenguajeTraduccionsDesdeBackend($paginador, $criterio);

include 'xml_lenguaje_traduccion_datos.php';
?>

