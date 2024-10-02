<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE020GDtipDEGCompPub::setSesPag($pag);

$criterio = new Criterio(EkuDeE020GDtipDEGCompPub::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE020GDtipDEGCompPub::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e020_g_dtip_d_e_g_comp_pub');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE020GDtipDEGCompPub::getSesPagCantidad(), EkuDeE020GDtipDEGCompPub::getSesPag());
$eku_de_e020_g_dtip_d_e_g_comp_pubs = EkuDeE020GDtipDEGCompPub::getEkuDeE020GDtipDEGCompPubsDesdeBackend($paginador, $criterio);

include 'eku_de_e020_g_dtip_d_e_g_comp_pub_datos.php';
?>

