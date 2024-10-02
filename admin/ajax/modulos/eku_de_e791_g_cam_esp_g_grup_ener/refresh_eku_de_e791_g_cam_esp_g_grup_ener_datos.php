<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE791GCamEspGGrupEner::setSesPag($pag);

$criterio = new Criterio(EkuDeE791GCamEspGGrupEner::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE791GCamEspGGrupEner::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e791_g_cam_esp_g_grup_ener');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE791GCamEspGGrupEner::getSesPagCantidad(), EkuDeE791GCamEspGGrupEner::getSesPag());
$eku_de_e791_g_cam_esp_g_grup_eners = EkuDeE791GCamEspGGrupEner::getEkuDeE791GCamEspGGrupEnersDesdeBackend($paginador, $criterio);

include 'eku_de_e791_g_cam_esp_g_grup_ener_datos.php';
?>

