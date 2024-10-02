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
$o_ids = eval('return $o_padre->getOpeOperarioUsUsuariosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = OpeOperario::setAplicarFiltrosDeAlcance($c);
$c->add('ope_operario_us_usuario.us_usuario_id', $padre_id, Criterio::IGUAL);
$c->addTabla('ope_operario');
$c->addRealJoin('ope_operario_us_usuario', 'ope_operario_us_usuario.ope_operario_id', 'ope_operario.id', 'LEFT JOIN');

$c->addOrden('ope_operario.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$ope_operarios_relacionados = OpeOperario::getOpeOperarios(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('OpeOperarios') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($ope_operarios_relacionados) > 0){
    foreach($ope_operarios_relacionados as $ope_operario_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$ope_operario_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_ope_operario_<?php echo $ope_operario_relacionado->getId() ?>' >
            <?php
            include 'uno_ope_operario_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('OpeOperarios') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = OpeOperario::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('ope_operario.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('ope_operario.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('ope_operario.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ope_operario.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ope_operario.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('ope_operario.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('ope_operario.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ope_operario.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('ope_operario.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('ope_operario.estado', 1, Criterio::IGUAL);

$c->addTabla('ope_operario');

$c->addOrden('ope_operario.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$ope_operarios_relacionados = OpeOperario::getOpeOperarios($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('OpeOperarios') ?></div>
<?php
if(count($ope_operarios_relacionados) > 0){    
    foreach($ope_operarios_relacionados as $ope_operario_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_ope_operario_<?php echo $ope_operario_relacionado->getId() ?>' >
            <?php
            include 'uno_ope_operario_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('OpeOperarios') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>
