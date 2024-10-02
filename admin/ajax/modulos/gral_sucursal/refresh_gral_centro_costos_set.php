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
$o_ids = eval('return $o_padre->getGralCentroCostoGralSucursalsId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = GralCentroCosto::setAplicarFiltrosDeAlcance($c);
$c->add('gral_centro_costo_gral_sucursal.gral_sucursal_id', $padre_id, Criterio::IGUAL);
$c->addTabla('gral_centro_costo');
$c->addRealJoin('gral_centro_costo_gral_sucursal', 'gral_centro_costo_gral_sucursal.gral_centro_costo_id', 'gral_centro_costo.id', 'LEFT JOIN');

$c->addOrden('gral_centro_costo.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$gral_centro_costos_relacionados = GralCentroCosto::getGralCentroCostos(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('GralCentroCostos') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($gral_centro_costos_relacionados) > 0){
    foreach($gral_centro_costos_relacionados as $gral_centro_costo_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$gral_centro_costo_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_gral_centro_costo_<?php echo $gral_centro_costo_relacionado->getId() ?>' >
            <?php
            include 'uno_gral_centro_costo_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('GralCentroCostos') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = GralCentroCosto::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('gral_centro_costo.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('gral_centro_costo.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('gral_centro_costo.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('gral_centro_costo.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('gral_centro_costo.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('gral_centro_costo.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('gral_centro_costo.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('gral_centro_costo.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('gral_centro_costo.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('gral_centro_costo.estado', 1, Criterio::IGUAL);

$c->addTabla('gral_centro_costo');

$c->addOrden('gral_centro_costo.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$gral_centro_costos_relacionados = GralCentroCosto::getGralCentroCostos($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('GralCentroCostos') ?></div>
<?php
if(count($gral_centro_costos_relacionados) > 0){    
    foreach($gral_centro_costos_relacionados as $gral_centro_costo_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_gral_centro_costo_<?php echo $gral_centro_costo_relacionado->getId() ?>' >
            <?php
            include 'uno_gral_centro_costo_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('GralCentroCostos') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>
