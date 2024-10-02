<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeCentroRecepcionUsUsuario::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeCentroRecepcionUsUsuario::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_centro_recepcion_us_usuario.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_centro_recepcion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_centro_recepcion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_centro_recepcion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_centro_recepcion_us_usuario.pde_centro_recepcion_id', 'LEFT JOIN');
$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'pde_centro_recepcion_us_usuario.us_usuario_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_centro_recepcion_us_usuario');
$criterio->setCriterios();

