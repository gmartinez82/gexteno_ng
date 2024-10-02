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
$o_ids = eval('return $o_padre->getEkuParamTipoPagoGralFpFormaPagosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = GralFpFormaPago::setAplicarFiltrosDeAlcance($c);
$c->add('eku_param_tipo_pago_gral_fp_forma_pago.eku_param_tipo_pago_id', $padre_id, Criterio::IGUAL);
$c->addTabla('gral_fp_forma_pago');
$c->addRealJoin('eku_param_tipo_pago_gral_fp_forma_pago', 'eku_param_tipo_pago_gral_fp_forma_pago.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');

$c->addOrden('gral_fp_forma_pago.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$gral_fp_forma_pagos_relacionados = GralFpFormaPago::getGralFpFormaPagos(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('GralFpFormaPagos') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($gral_fp_forma_pagos_relacionados) > 0){
    foreach($gral_fp_forma_pagos_relacionados as $gral_fp_forma_pago_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$gral_fp_forma_pago_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_gral_fp_forma_pago_<?php echo $gral_fp_forma_pago_relacionado->getId() ?>' >
            <?php
            include 'uno_gral_fp_forma_pago_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('GralFpFormaPagos') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = GralFpFormaPago::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('gral_fp_forma_pago.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('gral_fp_forma_pago.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('gral_fp_forma_pago.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('gral_fp_forma_pago.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('gral_fp_forma_pago.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('gral_fp_forma_pago.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('gral_fp_forma_pago.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('gral_fp_forma_pago.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('gral_fp_forma_pago.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('gral_fp_forma_pago.estado', 1, Criterio::IGUAL);

$c->addTabla('gral_fp_forma_pago');

$c->addOrden('gral_fp_forma_pago.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$gral_fp_forma_pagos_relacionados = GralFpFormaPago::getGralFpFormaPagos($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('GralFpFormaPagos') ?></div>
<?php
if(count($gral_fp_forma_pagos_relacionados) > 0){    
    foreach($gral_fp_forma_pagos_relacionados as $gral_fp_forma_pago_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_gral_fp_forma_pago_<?php echo $gral_fp_forma_pago_relacionado->getId() ?>' >
            <?php
            include 'uno_gral_fp_forma_pago_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('GralFpFormaPagos') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>
