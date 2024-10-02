<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_us_usuario_auditoria_us_usuario_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_us_usuario_auditoria_us_usuario_id', 0);


$criterio = new Criterio(UsUsuarioAuditoria::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
UsUsuarioAuditoria::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_us_usuario_auditoria_us_usuario_id != 0) {
        $criterio->add('us_usuario_auditoria.us_usuario_id', $buscador_top_us_usuario_auditoria_us_usuario_id, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('us_usuario_auditoria.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('us_usuario_auditoria.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario_auditoria.tabla', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario_auditoria.accion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario_auditoria.pagina', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario_auditoria.url', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario_auditoria.comando', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario_auditoria.dato_before', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario_auditoria.dato_after', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario_auditoria.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario_auditoria.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario_auditoria.creado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('us_usuario.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'us_usuario_auditoria.us_usuario_id', 'LEFT JOIN');
    
$criterio->addTabla('us_usuario_auditoria');
$criterio->setCriterios();

