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
$o_ids = eval('return $o_padre->getUsAcreditadosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = UsCredencial::setAplicarFiltrosDeAlcance($c);
$c->add('us_acreditado.us_usuario_id', $padre_id, Criterio::IGUAL);
$c->addTabla('us_credencial');
$c->addRealJoin('us_acreditado', 'us_acreditado.us_credencial_id', 'us_credencial.id', 'LEFT JOIN');

$c->addOrden('us_credencial.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$us_credencials_relacionados = UsCredencial::getUsCredencials(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('UsCredencials') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($us_credencials_relacionados) > 0){
    foreach($us_credencials_relacionados as $us_credencial_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$us_credencial_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_us_credencial_<?php echo $us_credencial_relacionado->getId() ?>' >
            <?php
            include 'uno_us_credencial_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('UsCredencials') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = UsCredencial::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('us_credencial.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('us_credencial.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('us_credencial.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('us_credencial.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('us_credencial.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('us_credencial.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('us_credencial.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('us_credencial.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('us_credencial.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('us_credencial.estado', 1, Criterio::IGUAL);

$c->addTabla('us_credencial');

$c->addOrden('us_credencial.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$us_credencials_relacionados = UsCredencial::getUsCredencials($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('UsCredencials') ?></div>
<?php
if(count($us_credencials_relacionados) > 0){    
    foreach($us_credencials_relacionados as $us_credencial_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_us_credencial_<?php echo $us_credencial_relacionado->getId() ?>' >
            <?php
            include 'uno_us_credencial_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('UsCredencials') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>
