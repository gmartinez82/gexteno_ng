<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE960GDtipDEGTranspGVehTras::setSesPag($pag);

$criterio = new Criterio(EkuDeE960GDtipDEGTranspGVehTras::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE960GDtipDEGTranspGVehTras::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE960GDtipDEGTranspGVehTras::getSesPagCantidad(), EkuDeE960GDtipDEGTranspGVehTras::getSesPag());
$eku_de_e960_g_dtip_d_e_g_transp_g_veh_trass = EkuDeE960GDtipDEGTranspGVehTras::getEkuDeE960GDtipDEGTranspGVehTrassDesdeBackend($paginador, $criterio);

include 'eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_datos.php';
?>

