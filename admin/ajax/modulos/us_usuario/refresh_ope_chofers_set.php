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
$o_ids = eval('return $o_padre->getOpeChoferUsUsuariosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = OpeChofer::setAplicarFiltrosDeAlcance($c);
$c->add('ope_chofer_us_usuario.us_usuario_id', $padre_id, Criterio::IGUAL);
$c->addTabla('ope_chofer');
$c->addRealJoin('ope_chofer_us_usuario', 'ope_chofer_us_usuario.ope_chofer_id', 'ope_chofer.id', 'LEFT JOIN');

$c->addOrden('ope_chofer.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$ope_chofers_relacionados = OpeChofer::getOpeChofers(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('OpeChofers') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($ope_chofers_relacionados) > 0){
    foreach($ope_chofers_relacionados as $ope_chofer_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$ope_chofer_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_ope_chofer_<?php echo $ope_chofer_relacionado->getId() ?>' >
            <?php
            include 'uno_ope_chofer_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('OpeChofers') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = OpeChofer::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('ope_chofer.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('ope_chofer.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('ope_chofer.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ope_chofer.apellido', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ope_chofer.nombre', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ope_chofer.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ope_chofer.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('ope_chofer.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('ope_chofer.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ope_chofer.apellido', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ope_chofer.nombre', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ope_chofer.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ope_chofer.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('ope_chofer.estado', 1, Criterio::IGUAL);

$c->addTabla('ope_chofer');

$c->addOrden('ope_chofer.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$ope_chofers_relacionados = OpeChofer::getOpeChofers($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('OpeChofers') ?></div>
<?php
if(count($ope_chofers_relacionados) > 0){    
    foreach($ope_chofers_relacionados as $ope_chofer_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_ope_chofer_<?php echo $ope_chofer_relacionado->getId() ?>' >
            <?php
            include 'uno_ope_chofer_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('OpeChofers') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>
