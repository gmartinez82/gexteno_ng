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
$o_ids = eval('return $o_padre->getCtrlEquipoCtrlSectorsId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = CtrlSector::setAplicarFiltrosDeAlcance($c);
$c->add('ctrl_equipo_ctrl_sector.ctrl_equipo_id', $padre_id, Criterio::IGUAL);
$c->addTabla('ctrl_sector');
$c->addRealJoin('ctrl_equipo_ctrl_sector', 'ctrl_equipo_ctrl_sector.ctrl_sector_id', 'ctrl_sector.id', 'LEFT JOIN');

$c->addOrden('ctrl_sector.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$ctrl_sectors_relacionados = CtrlSector::getCtrlSectors(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('CtrlSectors') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($ctrl_sectors_relacionados) > 0){
    foreach($ctrl_sectors_relacionados as $ctrl_sector_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$ctrl_sector_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_ctrl_sector_<?php echo $ctrl_sector_relacionado->getId() ?>' >
            <?php
            include 'uno_ctrl_sector_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('CtrlSectors') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = CtrlSector::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('ctrl_sector.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('ctrl_sector.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('ctrl_sector.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ctrl_sector.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ctrl_sector.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('ctrl_sector.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('ctrl_sector.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ctrl_sector.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ctrl_sector.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('ctrl_sector.estado', 1, Criterio::IGUAL);

$c->addTabla('ctrl_sector');

$c->addOrden('ctrl_sector.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$ctrl_sectors_relacionados = CtrlSector::getCtrlSectors($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('CtrlSectors') ?></div>
<?php
if(count($ctrl_sectors_relacionados) > 0){    
    foreach($ctrl_sectors_relacionados as $ctrl_sector_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_ctrl_sector_<?php echo $ctrl_sector_relacionado->getId() ?>' >
            <?php
            include 'uno_ctrl_sector_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('CtrlSectors') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>
