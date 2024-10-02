<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE810GCamEspGGrupSup::setSesPag($pag);

$criterio = new Criterio(EkuDeE810GCamEspGGrupSup::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE810GCamEspGGrupSup::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e810_g_cam_esp_g_grup_sup');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE810GCamEspGGrupSup::getSesPagCantidad(), EkuDeE810GCamEspGGrupSup::getSesPag());
$eku_de_e810_g_cam_esp_g_grup_sups = EkuDeE810GCamEspGGrupSup::getEkuDeE810GCamEspGGrupSupsDesdeBackend($paginador, $criterio);

include 'eku_de_e810_g_cam_esp_g_grup_sup_datos.php';
?>

