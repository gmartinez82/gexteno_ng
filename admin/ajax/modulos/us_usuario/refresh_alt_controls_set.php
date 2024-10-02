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
$o_ids = eval('return $o_padre->getAltControlUsUsuariosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = AltControl::setAplicarFiltrosDeAlcance($c);
$c->add('alt_control_us_usuario.us_usuario_id', $padre_id, Criterio::IGUAL);
$c->addTabla('alt_control');
$c->addRealJoin('alt_control_us_usuario', 'alt_control_us_usuario.alt_control_id', 'alt_control.id', 'LEFT JOIN');

$c->addOrden('alt_control.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$alt_controls_relacionados = AltControl::getAltControls(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('AltControls') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($alt_controls_relacionados) > 0){
    foreach($alt_controls_relacionados as $alt_control_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$alt_control_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_alt_control_<?php echo $alt_control_relacionado->getId() ?>' >
            <?php
            include 'uno_alt_control_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('AltControls') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = AltControl::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('alt_control.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('alt_control.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('alt_control.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('alt_control.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('alt_control.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('alt_control.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('alt_control.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('alt_control.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('alt_control.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('alt_control.estado', 1, Criterio::IGUAL);

$c->addTabla('alt_control');

$c->addOrden('alt_control.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$alt_controls_relacionados = AltControl::getAltControls($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('AltControls') ?></div>
<?php
if(count($alt_controls_relacionados) > 0){    
    foreach($alt_controls_relacionados as $alt_control_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_alt_control_<?php echo $alt_control_relacionado->getId() ?>' >
            <?php
            include 'uno_alt_control_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('AltControls') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>
