<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_id', '');
$buscador_top_cli_cliente_gral_tipo_personeria_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_gral_tipo_personeria_id', 0);
$buscador_top_cli_cliente_gral_condicion_iva_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_gral_condicion_iva_id', 0);
$buscador_top_cli_cliente_cli_tipo_cliente_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_cli_tipo_cliente_id', 0);
$buscador_top_cli_cliente_gral_tipo_documento_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_gral_tipo_documento_id', 0);
$buscador_top_cli_cliente_cli_grupo_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_cli_grupo_id', 0);
$buscador_top_cli_cliente_cli_categoria_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_cli_cliente_cli_categoria_id', 0);


$criterio = new Criterio(CliCliente::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
CliCliente::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_cli_cliente_id != '') {
        $criterio->add('cli_cliente.id', $buscador_top_cli_cliente_id, Criterio::IGUAL);
    }
    if ($buscador_top_cli_cliente_gral_tipo_personeria_id != 0) {
        $criterio->add('cli_cliente.gral_tipo_personeria_id', $buscador_top_cli_cliente_gral_tipo_personeria_id, Criterio::IGUAL);
    }
    if ($buscador_top_cli_cliente_gral_condicion_iva_id != 0) {
        $criterio->add('cli_cliente.gral_condicion_iva_id', $buscador_top_cli_cliente_gral_condicion_iva_id, Criterio::IGUAL);
    }
    if ($buscador_top_cli_cliente_cli_tipo_cliente_id != 0) {
        $criterio->add('cli_cliente.cli_tipo_cliente_id', $buscador_top_cli_cliente_cli_tipo_cliente_id, Criterio::IGUAL);
    }
    if ($buscador_top_cli_cliente_gral_tipo_documento_id != 0) {
        $criterio->add('cli_cliente.gral_tipo_documento_id', $buscador_top_cli_cliente_gral_tipo_documento_id, Criterio::IGUAL);
    }
    if ($buscador_top_cli_cliente_cli_grupo_id != 0) {
        $criterio->add('cli_cliente.cli_grupo_id', $buscador_top_cli_cliente_cli_grupo_id, Criterio::IGUAL);
    }
    if ($buscador_top_cli_cliente_cli_categoria_id != 0) {
        $criterio->add('cli_cliente.cli_categoria_id', $buscador_top_cli_cliente_cli_categoria_id, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('cli_cliente.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('cli_cliente.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.razon_social', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.cuit', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.domicilio_legal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.numero_casa', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.telefono', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.telefono_whatsapp', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.email', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.codigo_postal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.limite_ctacte_importe', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.limite_ctacte_dias', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.iva_exceptuado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.datos_migracion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.claves', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_personeria.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_personeria.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_personeria.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_condicion_iva.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_condicion_iva.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_condicion_iva.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_tipo_cliente.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_tipo_cliente.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_tipo_cliente.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_documento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_documento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_documento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_zona.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_zona.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_zona.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_grupo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_grupo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_grupo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa_transportadora.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa_transportadora.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa_transportadora.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_categoria.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_categoria.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_categoria.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_subcategoria.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_subcategoria.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_subcategoria.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_tipo_gestion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_tipo_gestion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_tipo_gestion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_periodicidad_gestion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_periodicidad_gestion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_periodicidad_gestion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_tipo_estado_venta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_tipo_estado_venta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_tipo_estado_venta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_tipo_estado_cobro.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_tipo_estado_cobro.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_tipo_estado_cobro.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_tipo_estado_cuenta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_tipo_estado_cuenta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_tipo_estado_cuenta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_tipo_estado_satisfaccion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_tipo_estado_satisfaccion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente_tipo_estado_satisfaccion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'cli_cliente.gral_tipo_personeria_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'cli_cliente.gral_condicion_iva_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_tipo_cliente', 'cli_tipo_cliente.id', 'cli_cliente.cli_tipo_cliente_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'cli_cliente.gral_tipo_documento_id', 'LEFT JOIN');
$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'cli_cliente.geo_localidad_id', 'LEFT JOIN');
$criterio->addRealJoin('geo_zona', 'geo_zona.id', 'cli_cliente.geo_zona_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_grupo', 'cli_grupo.id', 'cli_cliente.cli_grupo_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_empresa_transportadora', 'gral_empresa_transportadora.id', 'cli_cliente.gral_empresa_transportadora_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_categoria', 'cli_categoria.id', 'cli_cliente.cli_categoria_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_subcategoria', 'cli_subcategoria.id', 'cli_cliente.cli_subcategoria_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_cliente_tipo_gestion', 'cli_cliente_tipo_gestion.id', 'cli_cliente.cli_cliente_tipo_gestion_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_cliente_periodicidad_gestion', 'cli_cliente_periodicidad_gestion.id', 'cli_cliente.cli_cliente_periodicidad_gestion_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_cliente_tipo_estado', 'cli_cliente_tipo_estado.id', 'cli_cliente.cli_cliente_tipo_estado_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_cliente_tipo_estado_venta', 'cli_cliente_tipo_estado_venta.id', 'cli_cliente.cli_cliente_tipo_estado_venta_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_cliente_tipo_estado_cobro', 'cli_cliente_tipo_estado_cobro.id', 'cli_cliente.cli_cliente_tipo_estado_cobro_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_cliente_tipo_estado_cuenta', 'cli_cliente_tipo_estado_cuenta.id', 'cli_cliente.cli_cliente_tipo_estado_cuenta_id', 'LEFT JOIN');
$criterio->addRealJoin('cli_cliente_tipo_estado_satisfaccion', 'cli_cliente_tipo_estado_satisfaccion.id', 'cli_cliente.cli_cliente_tipo_estado_satisfaccion_id', 'LEFT JOIN');
    
$criterio->addTabla('cli_cliente');
$criterio->setCriterios();

