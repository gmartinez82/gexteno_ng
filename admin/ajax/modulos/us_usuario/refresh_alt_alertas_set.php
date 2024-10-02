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
$o_ids = eval('return $o_padre->getAltAlertaUsUsuariosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = AltAlerta::setAplicarFiltrosDeAlcance($c);
$c->add('alt_alerta_us_usuario.us_usuario_id', $padre_id, Criterio::IGUAL);
$c->addTabla('alt_alerta');
$c->addRealJoin('alt_alerta_us_usuario', 'alt_alerta_us_usuario.alt_alerta_id', 'alt_alerta.id', 'LEFT JOIN');

$c->addOrden('alt_alerta.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$alt_alertas_relacionados = AltAlerta::getAltAlertas(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('AltAlertas') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($alt_alertas_relacionados) > 0){
    foreach($alt_alertas_relacionados as $alt_alerta_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$alt_alerta_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_alt_alerta_<?php echo $alt_alerta_relacionado->getId() ?>' >
            <?php
            include 'uno_alt_alerta_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('AltAlertas') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = AltAlerta::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('alt_alerta.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('alt_alerta.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('alt_alerta.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('alt_alerta.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('alt_alerta.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('alt_alerta.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('alt_alerta.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('alt_alerta.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('alt_alerta.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('alt_alerta.estado', 1, Criterio::IGUAL);

$c->addTabla('alt_alerta');

$c->addOrden('alt_alerta.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$alt_alertas_relacionados = AltAlerta::getAltAlertas($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('AltAlertas') ?></div>
<?php
if(count($alt_alertas_relacionados) > 0){    
    foreach($alt_alertas_relacionados as $alt_alerta_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_alt_alerta_<?php echo $alt_alerta_relacionado->getId() ?>' >
            <?php
            include 'uno_alt_alerta_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('AltAlertas') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>
