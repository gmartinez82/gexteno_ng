<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_eku_de_eku_de_ope_tipo_estado_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_eku_de_eku_de_ope_tipo_estado_id', 0);


$criterio = new Criterio(EkuDe::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDe::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_eku_de_eku_de_ope_tipo_estado_id != 0) {
        $criterio->add('eku_de.eku_de_ope_tipo_estado_id', $buscador_top_eku_de_eku_de_ope_tipo_estado_id, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.eku_dverfor', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.eku_a002_id_cdc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.eku_a003_ddvid', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.eku_a004_dfecfirma', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.eku_a005_dsisfact', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.eku_de_xml', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.eku_pp02_id_cdc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.eku_pp03_ddecproc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.eku_pp04_ddigval', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.eku_pp050_destres', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.eku_pp051_dprotaut', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_ope_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_ope_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_ope_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de_ope_tipo_estado', 'eku_de_ope_tipo_estado.id', 'eku_de.eku_de_ope_tipo_estado_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de');
$criterio->setCriterios();

