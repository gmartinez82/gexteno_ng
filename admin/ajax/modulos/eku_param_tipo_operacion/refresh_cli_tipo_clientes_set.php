<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$padre_clase = Gral::getVars(1, 'padre_clase');
$relacion = Gral::getVars(1, 'relacion');
$palabra = Gral::getVars(1, 'palabra');
$pagina = Gral::getVars(1, 'pagina', 1);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$o_ids = eval('return $o_padre->getEkuParamTipoOperacionCliTipoClientesId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = CliTipoCliente::setAplicarFiltrosDeAlcance($c);
$c->add('eku_param_tipo_operacion_cli_tipo_cliente.eku_param_tipo_operacion_id', $padre_id, Criterio::IGUAL);
$c->addTabla('cli_tipo_cliente');
$c->addRealJoin('eku_param_tipo_operacion_cli_tipo_cliente', 'eku_param_tipo_operacion_cli_tipo_cliente.cli_tipo_cliente_id', 'cli_tipo_cliente.id', 'LEFT JOIN');

$c->addOrden('cli_tipo_cliente.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$cli_tipo_clientes_relacionados = CliTipoCliente::getCliTipoClientes(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('CliTipoClientes') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($cli_tipo_clientes_relacionados) > 0){
    foreach($cli_tipo_clientes_relacionados as $cli_tipo_cliente_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$cli_tipo_cliente_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_cli_tipo_cliente_<?php echo $cli_tipo_cliente_relacionado->getId() ?>' >
            <?php
            include 'uno_cli_tipo_cliente_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('CliTipoClientes') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = CliTipoCliente::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('cli_tipo_cliente.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('cli_tipo_cliente.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('cli_tipo_cliente.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('cli_tipo_cliente.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('cli_tipo_cliente.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('cli_tipo_cliente.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('cli_tipo_cliente.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('cli_tipo_cliente.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('cli_tipo_cliente.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('cli_tipo_cliente.estado', 1, Criterio::IGUAL);

$c->addTabla('cli_tipo_cliente');

$c->addOrden('cli_tipo_cliente.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$cli_tipo_clientes_relacionados = CliTipoCliente::getCliTipoClientes($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('CliTipoClientes') ?></div>
<?php
if(count($cli_tipo_clientes_relacionados) > 0){    
    foreach($cli_tipo_clientes_relacionados as $cli_tipo_cliente_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_cli_tipo_cliente_<?php echo $cli_tipo_cliente_relacionado->getId() ?>' >
            <?php
            include 'uno_cli_tipo_cliente_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('CliTipoClientes') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>
