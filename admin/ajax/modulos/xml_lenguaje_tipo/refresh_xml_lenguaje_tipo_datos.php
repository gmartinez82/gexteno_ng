<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
XmlLenguajeTipo::setSesPag($pag);

$criterio = new Criterio(XmlLenguajeTipo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
XmlLenguajeTipo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('xml_lenguaje_tipo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(XmlLenguajeTipo::getSesPagCantidad(), XmlLenguajeTipo::getSesPag());
$xml_lenguaje_tipos = XmlLenguajeTipo::getXmlLenguajeTiposDesdeBackend($paginador, $criterio);

include 'xml_lenguaje_tipo_datos.php';
?>

