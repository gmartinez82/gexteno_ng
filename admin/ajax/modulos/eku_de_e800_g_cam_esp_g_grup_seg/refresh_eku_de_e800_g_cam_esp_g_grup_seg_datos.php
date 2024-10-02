<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE800GCamEspGGrupSeg::setSesPag($pag);

$criterio = new Criterio(EkuDeE800GCamEspGGrupSeg::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE800GCamEspGGrupSeg::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e800_g_cam_esp_g_grup_seg');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE800GCamEspGGrupSeg::getSesPagCantidad(), EkuDeE800GCamEspGGrupSeg::getSesPag());
$eku_de_e800_g_cam_esp_g_grup_segs = EkuDeE800GCamEspGGrupSeg::getEkuDeE800GCamEspGGrupSegsDesdeBackend($paginador, $criterio);

include 'eku_de_e800_g_cam_esp_g_grup_seg_datos.php';
?>

