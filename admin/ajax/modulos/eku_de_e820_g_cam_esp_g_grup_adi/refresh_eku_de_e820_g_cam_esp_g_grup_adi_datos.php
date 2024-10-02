<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE820GCamEspGGrupAdi::setSesPag($pag);

$criterio = new Criterio(EkuDeE820GCamEspGGrupAdi::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE820GCamEspGGrupAdi::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e820_g_cam_esp_g_grup_adi');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE820GCamEspGGrupAdi::getSesPagCantidad(), EkuDeE820GCamEspGGrupAdi::getSesPag());
$eku_de_e820_g_cam_esp_g_grup_adis = EkuDeE820GCamEspGGrupAdi::getEkuDeE820GCamEspGGrupAdisDesdeBackend($paginador, $criterio);

include 'eku_de_e820_g_cam_esp_g_grup_adi_datos.php';
?>

