<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_us_navegacion_us_usuario_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_us_navegacion_us_usuario_id', 0);


$criterio = new Criterio(UsNavegacion::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
UsNavegacion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_us_navegacion_us_usuario_id != 0) {
        $criterio->add('us_navegacion.us_usuario_id', $buscador_top_us_navegacion_us_usuario_id, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('us_navegacion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('us_navegacion.session', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_navegacion.ip', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_navegacion.navegador', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_navegacion.pagina', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_navegacion.url', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_navegacion.url_referer', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_navegacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_navegacion.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'us_navegacion.us_usuario_id', 'LEFT JOIN');
    
$criterio->addTabla('us_navegacion');
$criterio->setCriterios();

