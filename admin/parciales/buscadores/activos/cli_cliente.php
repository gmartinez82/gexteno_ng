<?php
$filtros = array();

if ($criterio->getAmbiguo()) {
    $valor = $criterio->getValorDeCampoXPos(0);
    if ($valor == '')
        return;

    $comparador = Criterio::LIKE;

    $filtros['cli_cliente.buscador_top'] = array('campo' => 'Criterios Varios', 'valor' => $valor, 'comparador' => $comparador);
}

if (!$criterio->getAmbiguo()) {

    if ($criterio->getValorDeCampo('cli_cliente.id') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.id');
        $comparador = $criterio->getComparadorDeCampo('cli_cliente.id');

        $filtros['cli_cliente.id'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.descripcion') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.descripcion');
        $comparador = $criterio->getComparadorDeCampo('cli_cliente.descripcion');

        $filtros['cli_cliente.descripcion'] = array('campo' => 'Descripcion', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.gral_tipo_personeria_id') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.gral_tipo_personeria_id');
        $o = GralTipoPersoneria::getOxId($criterio->getValorDeCampo('cli_cliente.gral_tipo_personeria_id'));
        $valor = $o->getDescripcion();

        $comparador = $criterio->getComparadorDeCampo('cli_cliente.gral_tipo_personeria_id');

        $filtros['cli_cliente.gral_tipo_personeria_id'] = array('campo' => 'GralTipoPersoneria', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.gral_condicion_iva_id') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.gral_condicion_iva_id');
        $o = GralCondicionIva::getOxId($criterio->getValorDeCampo('cli_cliente.gral_condicion_iva_id'));
        $valor = $o->getDescripcion();

        $comparador = $criterio->getComparadorDeCampo('cli_cliente.gral_condicion_iva_id');

        $filtros['cli_cliente.gral_condicion_iva_id'] = array('campo' => 'GralCondicionIva', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.razon_social') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.razon_social');
        $comparador = $criterio->getComparadorDeCampo('cli_cliente.razon_social');

        $filtros['cli_cliente.razon_social'] = array('campo' => 'Razon Social', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.gral_tipo_documento_id') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.gral_tipo_documento_id');
        $o = GralTipoDocumento::getOxId($criterio->getValorDeCampo('cli_cliente.gral_tipo_documento_id'));
        $valor = $o->getDescripcion();

        $comparador = $criterio->getComparadorDeCampo('cli_cliente.gral_tipo_documento_id');

        $filtros['cli_cliente.gral_tipo_documento_id'] = array('campo' => 'GralTipoDocumento', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.cuit') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.cuit');
        $comparador = $criterio->getComparadorDeCampo('cli_cliente.cuit');

        $filtros['cli_cliente.cuit'] = array('campo' => 'Documento', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.domicilio_legal') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.domicilio_legal');
        $comparador = $criterio->getComparadorDeCampo('cli_cliente.domicilio_legal');

        $filtros['cli_cliente.domicilio_legal'] = array('campo' => 'Domicilio Legal', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.telefono') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.telefono');
        $comparador = $criterio->getComparadorDeCampo('cli_cliente.telefono');

        $filtros['cli_cliente.telefono'] = array('campo' => 'Telefono', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.email') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.email');
        $comparador = $criterio->getComparadorDeCampo('cli_cliente.email');

        $filtros['cli_cliente.email'] = array('campo' => 'Email', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.codigo_postal') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.codigo_postal');
        $comparador = $criterio->getComparadorDeCampo('cli_cliente.codigo_postal');

        $filtros['cli_cliente.codigo_postal'] = array('campo' => 'Codigo Postal', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('geo_provincia.geo_pais_id') != '') {
        $o = GeoPais::getOxId($criterio->getValorDeCampo('geo_provincia.geo_pais_id'));
        $valor = $o->getDescripcion();
        $comparador = $criterio->getComparadorDeCampo('geo_provincia.geo_pais_id');

        $filtros['geo_provincia.geo_pais_id'] = array('campo' => 'Pais', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('geo_localidad.geo_provincia_id') != '') {
        $o = GeoProvincia::getOxId($criterio->getValorDeCampo('geo_localidad.geo_provincia_id'));
        $valor = $o->getDescripcion();
        $comparador = $criterio->getComparadorDeCampo('geo_localidad.geo_provincia_id');

        $filtros['geo_localidad.geo_provincia_id'] = array('campo' => 'Provincia', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.geo_localidad_id') != '') {
        $o = GeoLocalidad::getOxId($criterio->getValorDeCampo('cli_cliente.geo_localidad_id'));
        $valor = $o->getDescripcion();
        $comparador = $criterio->getComparadorDeCampo('cli_cliente.geo_localidad_id');

        $filtros['cli_cliente.geo_localidad_id'] = array('campo' => 'Localidad', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.codigo') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.codigo');
        $comparador = $criterio->getComparadorDeCampo('cli_cliente.codigo');

        $filtros['cli_cliente.codigo'] = array('campo' => 'Codigo', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.limite_ctacte_importe') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.limite_ctacte_importe');
        $comparador = $criterio->getComparadorDeCampo('cli_cliente.limite_ctacte_importe');

        $filtros['cli_cliente.limite_ctacte_importe'] = array('campo' => 'Limite Ctacte Imp', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.limite_ctacte_dias') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.limite_ctacte_dias');
        $comparador = $criterio->getComparadorDeCampo('cli_cliente.limite_ctacte_dias');

        $filtros['cli_cliente.limite_ctacte_dias'] = array('campo' => 'Limite Ctacte Dias', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.cli_grupo_id') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.cli_grupo_id');
        $o = CliGrupo::getOxId($criterio->getValorDeCampo('cli_cliente.cli_grupo_id'));
        $valor = $o->getDescripcion();

        $comparador = $criterio->getComparadorDeCampo('cli_cliente.cli_grupo_id');

        $filtros['cli_cliente.cli_grupo_id'] = array('campo' => 'CliGrupo', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.cli_categoria_id') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.cli_categoria_id');
        $o = CliCategoria::getOxId($criterio->getValorDeCampo('cli_cliente.cli_categoria_id'));
        $valor = $o->getDescripcion();

        $comparador = $criterio->getComparadorDeCampo('cli_cliente.cli_categoria_id');

        $filtros['cli_cliente.cli_categoria_id'] = array('campo' => 'CliCategoria', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.observacion') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.observacion');
        $comparador = $criterio->getComparadorDeCampo('cli_cliente.observacion');

        $filtros['cli_cliente.observacion'] = array('campo' => 'Observaciones', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.datos_migracion') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.datos_migracion');
        $comparador = $criterio->getComparadorDeCampo('cli_cliente.datos_migracion');

        $filtros['cli_cliente.datos_migracion'] = array('campo' => 'Datos Migracion', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.claves') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.claves');
        $comparador = $criterio->getComparadorDeCampo('cli_cliente.claves');

        $filtros['cli_cliente.claves'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.orden') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.orden');
        $comparador = $criterio->getComparadorDeCampo('cli_cliente.orden');

        $filtros['cli_cliente.orden'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.estado') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.estado');
        $o = GralSiNo::getOxId($criterio->getValorDeCampo('cli_cliente.estado'));
        $valor = $o->getDescripcion();

        $comparador = $criterio->getComparadorDeCampo('cli_cliente.estado');

        $filtros['cli_cliente.estado'] = array('campo' => 'Estado', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.creado') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.creado');
        $comparador = $criterio->getComparadorDeCampo('cli_cliente.creado');

        $filtros['cli_cliente.creado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.creado_por') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.creado_por');
        $comparador = $criterio->getComparadorDeCampo('cli_cliente.creado_por');

        $filtros['cli_cliente.creado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.modificado') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.modificado');
        $comparador = $criterio->getComparadorDeCampo('cli_cliente.modificado');

        $filtros['cli_cliente.modificado'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
    }

    if ($criterio->getValorDeCampo('cli_cliente.modificado_por') != '') {
        $valor = $valor = $criterio->getValorDeCampo('cli_cliente.modificado_por');
        $comparador = $criterio->getComparadorDeCampo('cli_cliente.modificado_por');

        $filtros['cli_cliente.modificado_por'] = array('campo' => '', 'valor' => $valor, 'comparador' => $comparador);
    }
} // cierre IF no ambiguo
?>

<?php if (count($filtros) > 0) { ?>
    <div class='filtros'>
        <div class='titulo'><?php Lang::_lang('Criterios de Busqueda Activos') ?></div>
        <?php if ($filtros['cli_cliente.buscador_top']) { ?>
            <div class='filtro'>
                <div class='criterios-varios'>Hay filtros aplicados que podrian estar limitando los resultados visualizados</div>
                <div class='eliminar'><a class="filtro-eliminar" href='?qf=1&c=cli_cliente.buscador_top' title='Quitar Filtro'><img src='imgs/btn_elim.gif' height='16' align='absmiddle' border='0'></a></div>
            </div>
        <?php } else { ?>
            <?php foreach ($filtros as $i => $v) { ?>
                <div class='filtro'>
                    <div class='campo'><?php Gral::_echo($v['campo']) ?></div>
                    <div class='comparador'><?php Gral::_echo(Criterio::getComparadorDescripcion($v['comparador'])) ?></div>
                    <div class='valor'><?php Gral::_echo($v['valor']) ?></div>
                    <div class='eliminar'><a class="filtro-eliminar" href='?qf=1&c=<?php Gral::_echo($i) ?>' title='Quitar Filtro'><img src='imgs/btn_elim.gif' height='16' align='absmiddle' border='0'></a></div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
<?php } ?>

