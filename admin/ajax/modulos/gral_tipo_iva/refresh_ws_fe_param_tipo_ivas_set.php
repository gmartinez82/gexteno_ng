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
$o_ids = eval('return $o_padre->getGralTipoIvaWsFeParamTipoIvasId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = WsFeParamTipoIva::setAplicarFiltrosDeAlcance($c);
$c->add('gral_tipo_iva_ws_fe_param_tipo_iva.gral_tipo_iva_id', $padre_id, Criterio::IGUAL);
$c->addTabla('ws_fe_param_tipo_iva');
$c->addRealJoin('gral_tipo_iva_ws_fe_param_tipo_iva', 'gral_tipo_iva_ws_fe_param_tipo_iva.ws_fe_param_tipo_iva_id', 'ws_fe_param_tipo_iva.id', 'LEFT JOIN');

$c->addOrden('ws_fe_param_tipo_iva.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$ws_fe_param_tipo_ivas_relacionados = WsFeParamTipoIva::getWsFeParamTipoIvas(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('WsFeParamTipoIvas') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($ws_fe_param_tipo_ivas_relacionados) > 0){
    foreach($ws_fe_param_tipo_ivas_relacionados as $ws_fe_param_tipo_iva_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$ws_fe_param_tipo_iva_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_ws_fe_param_tipo_iva_<?php echo $ws_fe_param_tipo_iva_relacionado->getId() ?>' >
            <?php
            include 'uno_ws_fe_param_tipo_iva_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('WsFeParamTipoIvas') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = WsFeParamTipoIva::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('ws_fe_param_tipo_iva.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('ws_fe_param_tipo_iva.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('ws_fe_param_tipo_iva.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ws_fe_param_tipo_iva.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ws_fe_param_tipo_iva.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('ws_fe_param_tipo_iva.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('ws_fe_param_tipo_iva.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ws_fe_param_tipo_iva.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ws_fe_param_tipo_iva.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('ws_fe_param_tipo_iva.estado', 1, Criterio::IGUAL);

$c->addTabla('ws_fe_param_tipo_iva');

$c->addOrden('ws_fe_param_tipo_iva.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$ws_fe_param_tipo_ivas_relacionados = WsFeParamTipoIva::getWsFeParamTipoIvas($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('WsFeParamTipoIvas') ?></div>
<?php
if(count($ws_fe_param_tipo_ivas_relacionados) > 0){    
    foreach($ws_fe_param_tipo_ivas_relacionados as $ws_fe_param_tipo_iva_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_ws_fe_param_tipo_iva_<?php echo $ws_fe_param_tipo_iva_relacionado->getId() ?>' >
            <?php
            include 'uno_ws_fe_param_tipo_iva_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('WsFeParamTipoIvas') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>
