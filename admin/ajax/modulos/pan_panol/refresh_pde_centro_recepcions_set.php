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
$o_ids = eval('return $o_padre->getPdeCentroRecepcionPanPanolsId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = PdeCentroRecepcion::setAplicarFiltrosDeAlcance($c);
$c->add('pde_centro_recepcion_pan_panol.pan_panol_id', $padre_id, Criterio::IGUAL);
$c->addTabla('pde_centro_recepcion');
$c->addRealJoin('pde_centro_recepcion_pan_panol', 'pde_centro_recepcion_pan_panol.pde_centro_recepcion_id', 'pde_centro_recepcion.id', 'LEFT JOIN');

$c->addOrden('pde_centro_recepcion.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$pde_centro_recepcions_relacionados = PdeCentroRecepcion::getPdeCentroRecepcions(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('PdeCentroRecepcions') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($pde_centro_recepcions_relacionados) > 0){
    foreach($pde_centro_recepcions_relacionados as $pde_centro_recepcion_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$pde_centro_recepcion_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_pde_centro_recepcion_<?php echo $pde_centro_recepcion_relacionado->getId() ?>' >
            <?php
            include 'uno_pde_centro_recepcion_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('PdeCentroRecepcions') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = PdeCentroRecepcion::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('pde_centro_recepcion.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('pde_centro_recepcion.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('pde_centro_recepcion.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('pde_centro_recepcion.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('pde_centro_recepcion.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('pde_centro_recepcion.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('pde_centro_recepcion.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('pde_centro_recepcion.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('pde_centro_recepcion.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('pde_centro_recepcion.estado', 1, Criterio::IGUAL);

$c->addTabla('pde_centro_recepcion');

$c->addOrden('pde_centro_recepcion.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$pde_centro_recepcions_relacionados = PdeCentroRecepcion::getPdeCentroRecepcions($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('PdeCentroRecepcions') ?></div>
<?php
if(count($pde_centro_recepcions_relacionados) > 0){    
    foreach($pde_centro_recepcions_relacionados as $pde_centro_recepcion_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_pde_centro_recepcion_<?php echo $pde_centro_recepcion_relacionado->getId() ?>' >
            <?php
            include 'uno_pde_centro_recepcion_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('PdeCentroRecepcions') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>
