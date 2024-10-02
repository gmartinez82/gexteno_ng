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
$o_ids = eval('return $o_padre->getGralSucursalGralCajasId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = GralCaja::setAplicarFiltrosDeAlcance($c);
$c->add('gral_sucursal_gral_caja.gral_sucursal_id', $padre_id, Criterio::IGUAL);
$c->addTabla('gral_caja');
$c->addRealJoin('gral_sucursal_gral_caja', 'gral_sucursal_gral_caja.gral_caja_id', 'gral_caja.id', 'LEFT JOIN');

$c->addOrden('gral_caja.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$gral_cajas_relacionados = GralCaja::getGralCajas(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('GralCajas') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($gral_cajas_relacionados) > 0){
    foreach($gral_cajas_relacionados as $gral_caja_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$gral_caja_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_gral_caja_<?php echo $gral_caja_relacionado->getId() ?>' >
            <?php
            include 'uno_gral_caja_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('GralCajas') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = GralCaja::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('gral_caja.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('gral_caja.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('gral_caja.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('gral_caja.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('gral_caja.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('gral_caja.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('gral_caja.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('gral_caja.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('gral_caja.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('gral_caja.estado', 1, Criterio::IGUAL);

$c->addTabla('gral_caja');

$c->addOrden('gral_caja.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$gral_cajas_relacionados = GralCaja::getGralCajas($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('GralCajas') ?></div>
<?php
if(count($gral_cajas_relacionados) > 0){    
    foreach($gral_cajas_relacionados as $gral_caja_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_gral_caja_<?php echo $gral_caja_relacionado->getId() ?>' >
            <?php
            include 'uno_gral_caja_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('GralCajas') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>
