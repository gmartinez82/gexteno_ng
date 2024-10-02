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
$o_ids = eval('return $o_padre->getCliSubcategoriaGralFpFormaPagosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = CliSubcategoria::setAplicarFiltrosDeAlcance($c);
$c->add('cli_subcategoria_gral_fp_forma_pago.gral_fp_forma_pago_id', $padre_id, Criterio::IGUAL);
$c->addTabla('cli_subcategoria');
$c->addRealJoin('cli_subcategoria_gral_fp_forma_pago', 'cli_subcategoria_gral_fp_forma_pago.cli_subcategoria_id', 'cli_subcategoria.id', 'LEFT JOIN');

$c->addOrden('cli_subcategoria.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$cli_subcategorias_relacionados = CliSubcategoria::getCliSubcategorias(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('CliSubcategorias') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($cli_subcategorias_relacionados) > 0){
    foreach($cli_subcategorias_relacionados as $cli_subcategoria_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$cli_subcategoria_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_cli_subcategoria_<?php echo $cli_subcategoria_relacionado->getId() ?>' >
            <?php
            include 'uno_cli_subcategoria_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('CliSubcategorias') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = CliSubcategoria::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('cli_subcategoria.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('cli_subcategoria.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('cli_subcategoria.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('cli_subcategoria.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('cli_subcategoria.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('cli_subcategoria.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('cli_subcategoria.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('cli_subcategoria.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('cli_subcategoria.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('cli_subcategoria.estado', 1, Criterio::IGUAL);

$c->addTabla('cli_subcategoria');

$c->addOrden('cli_subcategoria.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$cli_subcategorias_relacionados = CliSubcategoria::getCliSubcategorias($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('CliSubcategorias') ?></div>
<?php
if(count($cli_subcategorias_relacionados) > 0){    
    foreach($cli_subcategorias_relacionados as $cli_subcategoria_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_cli_subcategoria_<?php echo $cli_subcategoria_relacionado->getId() ?>' >
            <?php
            include 'uno_cli_subcategoria_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('CliSubcategorias') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>
