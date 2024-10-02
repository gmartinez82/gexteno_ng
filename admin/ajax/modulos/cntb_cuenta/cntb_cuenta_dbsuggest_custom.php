<?php
include "_autoload.php";

$buscar = Gral::getVars(1, 'buscar', '...');
if (strlen($buscar) < 3)
    return;

$pag = Gral::getVars(1, 'pag', 1);

$imputable = Gral::getVars(2, 'imputable', 0);

$c = new Criterio();

$c->addInicioSubconsulta();
$c->add('estado', '1', Criterio::IGUAL, false, '');

if ($imputable != 0) {
    $c->add(CntbCuenta::GEN_ATTR_IMPUTABLE, 1, Criterio::IGUAL);
}
$c->addFinSubconsulta();


if ($buscar != '...') {
    $c->addInicioSubconsulta();
    $c->add('descripcion', $buscar, Criterio::LIKE);
    $c->add('codigo', $buscar, Criterio::LIKE, false, Criterio::_OR);
    $c->add('observacion', $buscar, Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->addTabla('cntb_cuenta');
$c->addOrden('orden', 'asc');
$c->setCriterios();

$p = new Paginador(10, $pag);

$os = CntbCuenta::getCntbCuentas($p, $c);
//Gral::prr($os);	

if (count($os) > 0) {
    ?>
    <ul>
        <?php foreach ($os as $o) { ?>
            <li value="<?php Gral::_echo($o->getId()) ?>" class="uno" descripcion="<?php Gral::_echo($o->getDescripcion()) ?>">

                <div class="datos-uno">
                    <div class="descripcion"><?php Gral::_echo($o->getDescripcion()) ?></div>
                    <div class="codigo"><?php Gral::_echo($o->getNivel()) ?> - <?php Gral::_echo($o->getCntbTipoCuenta()->getDescripcion()) ?></div>
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

