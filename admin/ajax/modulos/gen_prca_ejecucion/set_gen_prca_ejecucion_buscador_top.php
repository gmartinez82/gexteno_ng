<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(GenPrcaEjecucion::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
GenPrcaEjecucion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('gen_prca_ejecucion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('gen_prca_ejecucion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_prca_ejecucion.fechahora_inicio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_prca_ejecucion.fechahora_fin', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_prca_ejecucion.iniciado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_prca_ejecucion.finalizado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_prca_ejecucion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_prca_ejecucion.confirmado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_prca_ejecucion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_api_proyecto.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_api_proyecto.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_api_proyecto.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_prca_proceso.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_prca_proceso.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_prca_proceso.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gen_api_proyecto', 'gen_api_proyecto.id', 'gen_prca_ejecucion.gen_api_proyecto_id', 'LEFT JOIN');
$criterio->addRealJoin('gen_prca_proceso', 'gen_prca_proceso.id', 'gen_prca_ejecucion.gen_prca_proceso_id', 'LEFT JOIN');
    
$criterio->addTabla('gen_prca_ejecucion');
$criterio->setCriterios();

