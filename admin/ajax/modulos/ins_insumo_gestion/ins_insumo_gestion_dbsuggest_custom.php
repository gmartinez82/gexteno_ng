<?php
include "_autoload.php";

$buscar = Gral::getVars(1, 'buscar', '...');
if (strlen($buscar) < 3){
    return;
}

$pag = Gral::getVars(1, 'pag', 1);

$identificable = Gral::getVars(2, 'identificable', 0);
$comprable = Gral::getVars(2, 'comprable', 0);
$consumible = Gral::getVars(2, 'consumible', 0);
$transformable_origen = Gral::getVars(2, 'transformable_origen', 0);
$transformable_destino = Gral::getVars(2, 'transformable_destino', 0);
$prv_proveedor_id = Gral::getVars(2, 'prv_proveedor_id', 0);

$c = new Criterio();

$c->addInicioSubconsulta();
$c->add(InsInsumo::GEN_ATTR_ESTADO, '1', Criterio::IGUAL, false, '');

if ($identificable != 0) {
    $c->add(InsInsumo::GEN_ATTR_IDENTIFICABLE, 1, Criterio::IGUAL);
}
if ($comprable != 0) {
    $c->add(InsInsumo::GEN_ATTR_ES_COMPRABLE, 1, Criterio::IGUAL);
}
if ($consumible != 0) {
    $c->add(InsInsumo::GEN_ATTR_ES_CONSUMIBLE, 1, Criterio::IGUAL);
}
if ($transformable_origen != 0) {
    $c->add(InsInsumo::GEN_ATTR_ES_TRANSFORMABLE_ORIGEN, 1, Criterio::IGUAL);
}
if ($transformable_destino != 0) {
    $c->add(InsInsumo::GEN_ATTR_ES_TRANSFORMABLE_DESTINO, 1, Criterio::IGUAL);
}
if ($prv_proveedor_id != 0) {
    //$c->add(PrvProveedor::GEN_ATTR_ID, $prv_proveedor_id, Criterio::IGUAL);
    //$c->addRealJoin(PrvInsumo::GEN_TABLA, PrvInsumo::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
    //$c->addRealJoin(PrvProveedor::GEN_TABLA, PrvProveedor::GEN_ATTR_ID, PrvInsumo::GEN_ATTR_PRV_PROVEEDOR_ID);
    $c->addRealJoin(InsInsumoPrvProveedor::GEN_TABLA, InsInsumoPrvProveedor::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID, 'LEFT JOIN');
    $c->addRealJoin(PrvProveedor::GEN_TABLA, PrvProveedor::GEN_ATTR_ID, InsInsumoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, 'LEFT JOIN');
}
$c->addFinSubconsulta();

if ($buscar != '...') {

    $c->addInicioSubconsulta();
    $c->add(InsInsumo::GEN_ATTR_CLAVES, $buscar, Criterio::LIKE);
    if ($prv_proveedor_id != 0) {
        $c->add(InsInsumoPrvProveedor::GEN_ATTR_CODIGO, $buscar, Criterio::LIKE, false, Criterio::_OR);
    }
    $c->addFinSubconsulta();
}

$c->addTabla(InsInsumo::GEN_TABLA);
$c->addOrden(InsInsumo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
$c->setCriterios();

$p = new Paginador(10, $pag);

$os = InsInsumo::getInsInsumos($p, $c);

if (count($os) > 0) {
    ?>
    <ul>
        <?php foreach ($os as $o) { ?>
            <li value="<?php Gral::_echo($o->getId()) ?>" class="uno" descripcion="<?php Gral::_echo($o->getDescripcion()) ?>">

                <div class="avatar"><img src="<?php Gral::_echo($o->getPathImagenPrincipal(true)) ?>"></div>

                <div class="datos-uno">
                    <div class="descripcion"><?php Gral::_echo($o->getDescripcion()) ?></div>
                    <div class="codigo codigo-interno"><?php Lang::_lang('Cod Int') ?>: <strong><?php Gral::_echo($o->getCodigoInterno()) ?></strong></div>
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

