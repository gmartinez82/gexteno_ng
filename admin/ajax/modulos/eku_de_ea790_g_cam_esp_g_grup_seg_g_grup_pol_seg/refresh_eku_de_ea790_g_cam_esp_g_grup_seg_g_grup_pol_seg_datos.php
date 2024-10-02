<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeEa790GCamEspGGrupSegGGrupPolSeg::setSesPag($pag);

$criterio = new Criterio(EkuDeEa790GCamEspGGrupSegGGrupPolSeg::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeEa790GCamEspGGrupSegGGrupPolSeg::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeEa790GCamEspGGrupSegGGrupPolSeg::getSesPagCantidad(), EkuDeEa790GCamEspGGrupSegGGrupPolSeg::getSesPag());
$eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_segs = EkuDeEa790GCamEspGGrupSegGGrupPolSeg::getEkuDeEa790GCamEspGGrupSegGGrupPolSegsDesdeBackend($paginador, $criterio);

include 'eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_datos.php';
?>

