<?php
include "_autoload.php";

$buscar = Gral::getVars(1, 'buscar', '...');
if (strlen($buscar) < 3)
    return;

$pag = Gral::getVars(1, 'pag', 1);

$c = new Criterio();

$c->addInicioSubconsulta();
$c->add('estado', '1', Criterio::IGUAL, false, '');
$c->addFinSubconsulta();

if ($buscar != '...') {
    $c->addInicioSubconsulta();
    $c->add('descripcion', $buscar, Criterio::LIKE, false, Criterio::_AND);
    $c->add('razon_social', $buscar, Criterio::LIKE, false, Criterio::_OR);
    $c->add('cuit', $buscar, Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->addTabla('cli_cliente');
$c->addOrden('descripcion', 'asc');
$c->setCriterios();

$p = new Paginador(10, $pag);

$os = CliCliente::getCliClientes($p, $c);

if (count($os) > 0) {
    ?>
    <ul>
        <?php foreach ($os as $o) { ?>
            <li value="<?php Gral::_echo($o->getId()) ?>" class="uno" descripcion="<?php Gral::_echo($o->getDescripcion()) ?>">

                <!--
                <div class="avatar"><img src="<?php //Gral::_echo($o->getPathImagenPrincipal(true))       ?>"></div>
                -->

                <div class="datos-uno">
                    <div class="descripcion"><?php Gral::_echo($o->getDescripcion()) ?></div>
                    <div class="codigo"><?php Lang::_lang('Razon Social') ?>: <strong><?php Gral::_echo($o->getRazonSocial()) ?></strong></div>
                    <div class="codigo"><?php Lang::_lang('CUIT') ?>: <strong><?php Gral::_echo($o->getCuit()) ?></strong></div>
                    <div class="codigo"><?php Lang::_lang('Localidad') ?>: <strong><?php Gral::_echo($o->getGeoLocalidad()->getDescripcionFull($incluir_pais = false)) ?></strong></div>
                </div>
            </li>
        <?php } ?>

    </ul>

    <?php if(($p->getRegistros() * $p->getPagina()) <= $p->getTotal() ){ ?>
    <div class="dbsuggest-boton-ver-mas pag-<?php echo ($pag) ?>" pag_actual="<?php echo ($pag) ?>" pag_siguiente="<?php echo ($pag + 1) ?>">
        Ver próximos <?php Gral::_echoInt($p->getRegistros()) ?> resultados de <?php Gral::_echoInt($p->getTotal()) ?> encontrados
    </div>
    <?php } ?>

<?php } else { ?>
    <div class="noresultado"><?php Lang::_lang('No se encontraron resultados') ?></div>
<?php } ?>

