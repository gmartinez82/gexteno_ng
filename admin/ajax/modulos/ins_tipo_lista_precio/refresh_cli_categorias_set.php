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
$o_ids = eval('return $o_padre->getCliCategoriaInsTipoListaPreciosId();');

// -----------------------------------------------------------------------------
// elementos seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = CliCategoria::setAplicarFiltrosDeAlcance($c);
$c->add('cli_categoria_ins_tipo_lista_precio.ins_tipo_lista_precio_id', $padre_id, Criterio::IGUAL);
$c->addTabla('cli_categoria');
$c->addRealJoin('cli_categoria_ins_tipo_lista_precio', 'cli_categoria_ins_tipo_lista_precio.cli_categoria_id', 'cli_categoria.id', 'LEFT JOIN');

$c->addOrden('cli_categoria.orden', 'asc');
$c->addOrden('2');
$c->setCriterios();

$ids_seleccionados = '';
$cli_categorias_relacionados = CliCategoria::getCliCategorias(null, $c);
?>
    <div class='subtitulo seleccionados' ><?php Lang::_lang('CliCategorias') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
$cont = 0;
if(count($cli_categorias_relacionados) > 0){
    foreach($cli_categorias_relacionados as $cli_categoria_relacionado){
        $cont++;
        $coma = '';
        if($cont > 1) $coma = ',';
        $ids_seleccionados.= $coma.$cli_categoria_relacionado->getId();
        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_cli_categoria_<?php echo $cli_categoria_relacionado->getId() ?>' >
            <?php
            include 'uno_cli_categoria_set.php';
            ?>
        </div>
        <?php
    }
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen') ?> <?php Lang::_lang('CliCategorias') ?> <?php Lang::_lang('Seleccionados') ?></div>
<?php
}

// -----------------------------------------------------------------------------
// elementos NO seleccionados
// -----------------------------------------------------------------------------
$c = new Criterio();
$c = CliCategoria::setAplicarFiltrosDeAlcance($c);
$c->addTrueInicialEnWhere();

if($ids_seleccionados != ''){
    $c->addInicioSubconsulta();
    $c->add('cli_categoria.id', '('.$ids_seleccionados.')', Criterio::NOTIN);
    $c->addFinSubconsulta();

    $c->addInicioSubconsulta();
    $c->add('cli_categoria.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('cli_categoria.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('cli_categoria.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('cli_categoria.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}else{
    $c->addInicioSubconsulta();
    $c->add('cli_categoria.id', '%'.$palabra.'%', Criterio::LIKE);

    $c->add('cli_categoria.descripcion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('cli_categoria.codigo', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->add('cli_categoria.observacion', '%'.$palabra.'%', Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->add('cli_categoria.estado', 1, Criterio::IGUAL);

$c->addTabla('cli_categoria');

$c->addOrden('cli_categoria.orden', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden('2', $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$cli_categorias_relacionados = CliCategoria::getCliCategorias($paginador, $c);
?>
    <div class='subtitulo noseleccionados' ><?php Lang::_lang('Otros') ?> <?php Lang::_lang('CliCategorias') ?></div>
<?php
if(count($cli_categorias_relacionados) > 0){    
    foreach($cli_categorias_relacionados as $cli_categoria_relacionado){

        ?>
        <div class='uno <?php echo $relacion::GEN_FRTN_VINCULO_UNO_ANCHO ?>' id='uno_cli_categoria_<?php echo $cli_categoria_relacionado->getId() ?>' >
            <?php
            include 'uno_cli_categoria_set.php';
            ?>
        </div>
        <?php
    }
    include "../../../parciales/paginador_set.php";
}else{
?>
    <div class='no-resultado' ><?php Lang::_lang('No existen otros') ?> <?php Lang::_lang('CliCategorias') ?> <?php Lang::_lang('con el criterio elegido') ?></div>
<?php
}

?>
