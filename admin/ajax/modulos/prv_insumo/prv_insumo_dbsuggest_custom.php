<?php
include "_autoload.php";

$buscar = Gral::getVars(Gral::VARS_POST, 'buscar', '...');
if (strlen($buscar) < 3)
    return;

$pag = Gral::getVars(Gral::VARS_POST, 'pag', 1);


$prv_proveedor_id = Gral::getVars(Gral::VARS_GET, 'prv_proveedor_id', 0);

$c = new Criterio();

$c->addInicioSubconsulta();
$c->add(PrvInsumo::GEN_ATTR_ESTADO, '1', Criterio::IGUAL, false, '');


if ($prv_proveedor_id != 0) {
    $c->add(PrvProveedor::GEN_ATTR_ID, $prv_proveedor_id, Criterio::IGUAL);
    $c->addRealJoin(PrvProveedor::GEN_TABLA, PrvProveedor::GEN_ATTR_ID, PrvInsumo::GEN_ATTR_PRV_PROVEEDOR_ID);
}
$c->addFinSubconsulta();

if ($buscar != '...') {

    $c->addInicioSubconsulta();
    //$c->add(PrvInsumo::GEN_ATTR_CLAVES, $buscar, Criterio::LIKE);
    $c->add(PrvInsumo::GEN_ATTR_DESCRIPCION, $buscar, Criterio::LIKE);
    $c->add(PrvInsumo::GEN_ATTR_CODIGO_PROVEEDOR, $buscar, Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->addTabla(PrvInsumo::GEN_TABLA);
$c->addOrden(PrvInsumo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
$c->setCriterios();

$p = new Paginador(10, $pag);

$os = PrvInsumo::getPrvInsumos($p, $c);

if (count($os) > 0) {
    ?>
    <ul>
        <?php foreach ($os as $o) { ?>
            <li value="<?php Gral::_echo($o->getId()) ?>" class="uno" descripcion="<?php Gral::_echo($o->getDescripcion()) ?>">
                <div class="datos-uno">
                    <div class="descripcion"><?php Gral::_echo($o->getDescripcion()) ?></div>
                    <div class="codigo codigo-interno"><?php Lang::_lang('Cod Prv') ?>: <strong><?php Gral::_echo($o->getCodigoProveedor()) ?></strong></div>
                    <div class="codigo codigo-marca"><?php Lang::_lang('Marca') ?>: <strong><?php Gral::_echo($o->getInsMarca()->getDescripcion()) ?></strong></div>
                    <div class="codigo codigo-marca"><?php Lang::_lang('Cod Marca') ?>: <strong><?php Gral::_echo($o->getCodigoMarca()) ?></strong></div>
                    <div class="observacion"><?php Gral::_echo($o->getObservacion()) ?></div>
                </div>
            </li>
        <?php } ?>
    </ul>

    <?php if($p->getPaginaSiguiente() != -1){ ?>
    <div class="dbsuggest-boton-ver-mas pag-<?php echo ($pag) ?>" pag_actual="<?php echo ($pag) ?>" pag_siguiente="<?php echo ($pag + 1) ?>">
        Ver próximos <?php Gral::_echoInt($p->getRegistros()) ?> resultados de <?php Gral::_echoInt($p->getTotal()) ?> registros
    </div>
    <?php } ?>

<?php } else { ?>
    <div class="noresultado"><?php Lang::_lang('No se encontraron resultados') ?></div>
<?php } ?>

